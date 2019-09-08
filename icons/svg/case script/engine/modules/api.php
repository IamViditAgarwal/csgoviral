<?php
header('Content-Type: application/json');

if(!isset($Functions)){
    die("Error! 404");
}

$user = $Functions->getUser();

function getSteamInventory($id, $items){
    global $Functions;
	$json = json_decode(file_get_contents("http://steamcommunity.com/id/".$id."/inventory/json/730/2?l=russian"),true);
	if(isset($json['rgDescriptions'])){
		$new = [];
		foreach($json['rgDescriptions'] as $key => $botInv){
			foreach($items as $i){
				$str = $i['weapon'].' | '.$i['name'];
				if(strpos($botInv['market_hash_name'], $str) !== false || strpos($botInv['name'], $str) !== false){
                    if(strpos($botInv['market_hash_name'], "StatTrak™") !== false){
                        $i['stattrak'] = "true";
                    }else{
                        $i['stattrak'] = "false";
                    }
					$i['market_hash_name'] = $botInv['market_hash_name'];
                    $i['inventory_id'] = $key;
                    foreach($json['rgInventory'] as $rgInv){
                        if($rgInv['classid'] == $botInv['classid'] && $rgInv['instanceid'] == $botInv['instanceid']){
                            $i['weaponid'] = $rgInv['id'];
                            break;
                        }
                    }
                    $checkDrop = $Functions->db->query("SELECT * FROM drops WHERE inventoryid = '".$key."' ORDER BY id DESC LIMIT 1");
                    if($checkDrop->num_rows !== 0){
                        $checkDrop = $checkDrop->fetch_object();
                        if($checkDrop->status == 2){
                            $new[] = $i;
                        }else{
                            continue;
                        }
                    }else{
                        $new[] = $i;
                    }
				}
			}
		}
		if(count($new) == 0){
			return false;
		}else{
			return $new;
		}
	}else{
		return false;
	}
}
$action = $_REQUEST['action'];
if(!$Functions->isLogged() && $action != "liveDrop"){
    die(json_encode(['result' => 'false', 'message' => 'no_login']));
}
switch($action){
	case 'liveDrop':
	
		$items = $Functions->db->query("SELECT id FROM drops WHERE status = '0' AND user = '".$user->steamid."' AND time < ". (time() - 3600));
		
		while($i = $items->fetch_object())
		{
			$itemid = intval($i->id);
			echo $itemid;
			$item = $Functions->db->query("SELECT price FROM drops WHERE id = '".$itemid."' AND status = '0' AND user = '".$user->steamid."'");
			$item = $item->fetch_object();
			$Functions->giveMoney($user->steamid, $item->price);
			$Functions->db->query("UPDATE drops SET status='2' WHERE id = '".$itemid."' AND user = '".$user->steamid."'");
		}
			
		$last = $Functions->db->query("SELECT user,itemid,time,casename,id FROM drops WHERE time > ".intval($_POST['tlast'])." ORDER BY id ASC LIMIT 20000");
		if($last->num_rows > 0){
			$json = ['result' => 'true', 'timelast' => 0, 'total' => [], 'last_drops' => []];
			$timelast = 0;
			$json['total'] = [
				'last' => 1500000000000,
				'onusers' => count(scandir(ini_get("session.save_path"))),
				'opened' => $Functions->db->query("SELECT COUNT(`id`) FROM `drops`")->fetch_row()[0],
				'regusers' => $Functions->db->query("SELECT COUNT(`steamid`) FROM `users`")->fetch_row()[0]
			];
			
			while($last2 = $last->fetch_object()){
				if($last2->time > $timelast) $timelast = $last2->time;
				$item = $Functions->db->query("SELECT * FROM items WHERE id = '".$last2->itemid."'")->fetch_object();
				$user = $Functions->db->query("SELECT name FROM users WHERE steamid = '".$last2->user."'")->fetch_object();
				$case = $Functions->db->query("SELECT picture FROM cases WHERE name = '".$last2->casename."'")->fetch_object();
				$json['last_drops'][] = ['image' => $item->image, 'name' => $item->weapon.' | '.$item->name, 'steam' => $last2->user, 'casenames' => $item->type, 'rare' => $item->type, 'case_img' => $case->picture, 'nick' => $user->name];
			}
			$json['timelast'] = $timelast;
			echo json_encode($json);
		}
	break;
	case 'updateLink':
		$link = $Functions->getString($_REQUEST['tradelink']);
		if(!preg_match('/^(https?:\/\/)?(http?:\/\/)?(www\.)?steamcommunity.com\/tradeoffer\/new\/\?partner=([0-9]+)&token=([A-Za-z0-9\-\_]+)/', $link) || empty($link)){
            header("Location: /user");
		}else{
            $Functions->db->query("UPDATE users SET tradelink='".$link."' WHERE steamid = '".$user->steamid."'");
            header("Location: /user");
		}
	break;
	case 'sellItem':
		$itemid = intval($_REQUEST['item_id']);
		if($itemid > 0){
			$item = $Functions->db->query("SELECT price FROM drops WHERE id = '".$itemid."' AND status = '0' AND user = '".$user->steamid."'");
            if($item->num_rows == 0){
                echo json_encode(['result' => 'false', 'message' => 'Error.']);
            }else{
				$item = $item->fetch_object();
				$Functions->giveMoney($user->steamid, $item->price);
				$Functions->db->query("UPDATE drops SET status='2' WHERE id = '".$itemid."' AND user = '".$user->steamid."'");
				header("Location: /user");
			}
		}else{
			echo json_encode(['result' => 'false', 'message' => 'Error.']);
		}
	break;
    case 'sendItem':
        $itemid = intval($_REQUEST['item_id']);
        if($itemid > 0){
            $item = $Functions->db->query("SELECT * FROM drops WHERE id = '".$itemid."' AND status = '0' AND user = '".$user->steamid."'");
            if($item->num_rows == 0){
                echo json_encode(['result' => 'false', 'message' => 'Error']);
            }else{
                $item = $item->fetch_object();
                $Functions->db->query("UPDATE drops SET status = '1' WHERE id = '".$itemid."' AND user = '".$user->steamid."'");
                header("Location: /user");
            }
        }else{
            echo json_encode(['result' => 'false', 'message' => 'Error']);
        }
    break;
    case 'openCase':
        $caseName = $Functions->getString($_POST['case']);
        if(empty($caseName)){
            echo json_encode(['result' => 'false', 'message' => 'no_login']);
        }else{
				$case = $Functions->db->query("SELECT * FROM cases WHERE name = '".$caseName."'");
						if($case->num_rows == 0){
						echo json_encode(['result' => 'false', 'message' => 'no_login']);
				}else{
                $case3 = $Functions->db->query("SELECT * FROM cases WHERE name = '".$caseName."' and visible='1'");
						if($case3->num_rows == 0){
						echo json_encode(['result' => 'false', 'message' => 'stop_case']);
				}else{
					$case = $case->fetch_object();
					if($user->money < $case->price){
						echo json_encode(['result' => 'false', 'message' => 'no_money']);
					}else{
					
						$items = explode(",", $case->items);
						foreach($items as $item){
							$item = $Functions->db->query("SELECT * FROM items WHERE id = '".$item."'")->fetch_object();
							$randItems[] = ['id' => $item->id, 'weapon' => $item->weapon, 'name' => $item->name, 'image' => $item->image, 'type' => $item->type];
							shuffle($randItems);
						}
						$inv = getSteamInventory($Functions->config['bot_profile'], $randItems);
						if($inv == false){
							echo json_encode(['result' => 'false', 'message' => 'no_items']);
						}else{

							$case1 = $Functions->db->query("SELECT * FROM cases WHERE name = '".$caseName."' AND red_stock='1'");
							$case1 = $case1->fetch_object();
							$items = explode(",", $case1->items);
							foreach($items as $item1){
							$item1 = $Functions->db->query("SELECT * FROM items WHERE id = '".$item1."'")->fetch_object();
							$randItems1[] = ['id' => $item1->id, 'weapon' => $item1->weapon, 'name' => $item1->name, 'image' => $item1->image, 'type' => $item1->type];
							shuffle($randItems1);
							}
							$inv1 = getSteamInventory($Functions->config['bot_profile'], $randItems1);
							$er = true;
							foreach ($inv1 as $i)
							{
								if ($i['type'] != 'covert')
								{
									$er = false;
									break;
								}
							}
							if ($er) {
								echo json_encode(['result' => 'false', 'message' => 'no_items']);
								break;
							}
							
							$co = $Functions->db->query("SELECT cases_open FROM users WHERE steamid = '".$user->steamid."'");
							$co = $co->fetch_object();
							if ($co->cases_open != false)
							{
								$co = json_decode($co->cases_open, true);
								if (!$co[$caseName][0]) $co[$caseName][0] = time();
								$co[$caseName] = array($co[$caseName][0], $co[$caseName][1] + 1);
								
								if ($co[$caseName][0] < (time() - 1800))
								{
									$co[$caseName] = array(time(), 1);
								}
							}
							else
							{
								$co = array();
								$co[$caseName] = array(time(), 1);
							}
							
							if ($co[$caseName][1] > intval($case->lim))
							{
								echo json_encode(['result' => 'false', 'message' => 'no_case']);
								break;
							}
							
							$Functions->takeMoney($user->steamid, $case->price);
							$user = $Functions->getUser();

							$randItem = $inv[array_rand($inv)];

							$itemPrice = $Functions->getItemSteamPrice($randItem['market_hash_name']);
							$lowest_price = str_replace(" pуб.", "", $itemPrice['lowest_price']);
							
							if($randItem['type'] == "milspec"){
								$price = round($lowest_price);
							}else{
								$price = round($lowest_price * 0.85);
							}
							
							$json_co = json_encode($co);
							
							$Functions->db->query("UPDATE `users` SET cases_open = ('".$json_co."'), profit = (`profit` + ".(int)$price.") WHERE steamid = '".$user->steamid."'");
							
							$itemsjson = [];
							foreach($randItems as $new){
								$itemsjson[] = [
									'image' => $new['image'],
									'name_first' => $new['weapon'],
									'name_second' => $new['name'],
									'color' => $new['type']
								];
							}
							$winid = 10;
							$itemsjson[$winid] = [
								'image' => $randItem['image'],
								'name_first' => $randItem['weapon'],
								'name_second' => $randItem['name'],
								'color' => $randItem['type']
							];
							
							$Functions->db->query("INSERT INTO `drops`(`itemid`, `inventoryid`, `weaponid`, `casename`, `price`, `user`, `time`, `status`) VALUES ('".$randItem['id']."', '".$randItem['inventory_id']."', '".$randItem['weaponid']."', '".$case->name."', '".$price."', '".$user->steamid."', '".time()."', '0')");
							echo json_encode(
								[
									'result' => 'true',
									'items' => $itemsjson,
									'win_slot' => $winid,
									'balans' => $user->money,
									'info' => [
										'name_case' => $case->title,
										'id_case' => '/case/'.$case->name,
										'item_id' => $Functions->db->insert_id,
										'cost' => $price
									]
								]
							);
						
						
						}
					}
				}
            }
        }
    break;
    default:
        echo json_encode(['result' => 'false', 'message' => 'Error! Action found.']);
    break;
}

?>