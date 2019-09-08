<?php
if(!isset($Functions)){
    die("Error! 404");
}
$user = $Functions->getUser();
if(!$user && empty($_GET['id'])) die($Functions->getIndex("404"));

if(!empty($_GET['id'])){
    $getUser = $Functions->getUser($_GET['id']);
    if(!$getUser || $getUser->steamid == $user->steamid){
        header("Location: /user");
    }else{
        $itemsBlock = '';
		$items = $Functions->db->query("SELECT * FROM `drops` WHERE user = '".$getUser->steamid."' ORDER BY id DESC");
		$casesopened = 0;
		while($drop = $items->fetch_object()){
			$casesopened++;
			$item = $Functions->db->query("SELECT * FROM `items` WHERE id = '".$drop->itemid."'")->fetch_object();
			$case = $Functions->db->query("SELECT `picture`,`name` FROM `cases` WHERE name = '".$drop->casename."'")->fetch_object();
			if($drop->status == 0){
				$status = '<span class="status-icon alarm" title="Status is not selected!"></span>';
			}
			if($drop->status == 1){
				$status = '<span class="status-icon compl" title="Referred to the bot"></span>';
			}elseif($drop->status == 2){
				$status = '<span class="status-icon ingame" title="Sold for '.$drop->price.' руб."></span>';
			}elseif($drop->status == 3){
				$status = '<span class="status-icon compl" title="Sent to the user"></span>';
			}elseif($drop->status == 4){
				$status = '<span class="status-icon alarm" title="'.$drop->message.'"></span>';
			}
			$itemsBlock .= '<span class="item-incase '.$item->type.'" target="_blank" style="text-decoration: none;">
									<div class="status">
										<span class="status-text">'.$drop->price.'p.</span>
										'.$status.'
									</div>
									<div class="picture">
										<img class="picture-item" src="'.$item->image.'/110fx82f" alt="Drop">
										<a href="http://domain.com/case/'.$case->name.'"><img class="picture-case" src="/admin/images/'.$case->picture.'"></a>
									</div>
									<div class="descr">
										<strong>'.$item->weapon.'</strong>
										<span>'.$item->name.'</span>
									</div>
								</span>';
		}
		$itemsBlock .= '';

		if($items->num_rows == 0){
			$itemsBlock = 'You have not yet opened cases...';
		}
            $items = $Functions->db->query("SELECT * FROM `drops`");
		$totalcase = 0;
		while($drop = $items->fetch_object()){
			$totalcase++;}
			
	  $sqr = $Functions->db->query("SELECT * FROM `users`");
	  $totaluser = 0;
	  while($row = $sqr->fetch_object()){
	  $totaluser++;}
		
    session_start();
    $id = session_id();
    
    if ($id!="") {
     $CurrentTime = time();
     $LastTime = time() - 600;
     $base = "session.txt";

     $file = file($base);
     $k = 0;
     for ($i = 0; $i < sizeof($file); $i++) {
      $line = explode("|", $file[$i]);
       if ($line[1] > $LastTime) {
       $ResFile[$k] = $file[$i];
       $k++;
      }
     }

     for ($i = 0; $i<sizeof($ResFile); $i++) {
      $line = explode("|", $ResFile[$i]);
      if ($line[0]==$id) {
          $line[1] = trim($CurrentTime)."\n";
          $is_sid_in_file = 1;
      }
      $line = implode("|", $line); $ResFile[$i] = $line;
     }
    
     $fp = fopen($base, "w");
     for ($i = 0; $i<sizeof($ResFile); $i++) { fputs($fp, $ResFile[$i]); }
     fclose($fp);
    
     if (!$is_sid_in_file) {
      $fp = fopen($base, "a-");
      $line = $id."|".$CurrentTime."\n";
      fputs($fp, $line);
      fclose($fp);
     }
    }
		echo $Functions->getIndex("otheruser", [
			'from' => ['{inventory}', '{user_avatar}', '{user_name}', '{user_steam}', '{casesopened}', '{total_case}', '{total_users}', '{online_people}'],
			'to' => [$itemsBlock, $getUser->avatar, strip_tags($getUser->name), $getUser->steamid, $casesopened, $totalcase, $totaluser, sizeof(file($base))]
		]);
    }
}else{
    $itemsBlock = '';
    $items = $Functions->db->query("SELECT * FROM drops WHERE user = '".$user->steamid."' ORDER BY id DESC");
	$casesopened = 0;
    while($drop = $items->fetch_object()){
		$casesopened++;
        $item = $Functions->db->query("SELECT * FROM items WHERE id = '".$drop->itemid."'")->fetch_object();
		$case = $Functions->db->query("SELECT `picture` FROM cases WHERE name = '".$drop->casename."'")->fetch_object();
		$status = '';
        if($drop->status == 0){
            $status = '<a href="/api?action=sellItem&item_id='.$drop->id.'" class="status-icon ingame" title="Sold for '.$drop->price.' руб."></a> <a href="/api?action=sendItem&item_id='.$drop->id.'" class="status-icon tosell" title="Print"></a>';
        }
        if($drop->status == 1){
            $status = '<span class="status-icon compl" title="Referred to the bot"></span>';
        }elseif($drop->status == 2){
            $status = '<span class="status-icon ingame" title="Sold for '.$drop->price.' руб."></span>';
        }elseif($drop->status == 3){
			$status = '<span class="status-icon compl" title="Uploaded"></span>';
		}elseif($drop->status == 4){
			$status = '<span class="status-icon alarm" title="'.$drop->message.'"></span>';
		}
        $itemsBlock .= '<span class="item-incase '.$item->type.'" target="_blank" style="text-decoration: none;">
								<div class="status">
									<span class="status-text">'.$drop->price.'p.</span>
									'.$status.'
								</div>
								<div class="picture">
									<a href="http://domain.com/case/'.$item->name.'"><img class="picture-item" src="'.$item->image.'/110fx82f" alt="Drop">
									<img class="picture-case" src="/admin/images/'.$case->picture.'"></a>
								</div>
								<div class="descr">
									<strong>'.$item->weapon.'</strong>
									<span>'.$item->name.'</span>
								</div>
							</span>';
    }
    $itemsBlock .= '';

    if($items->num_rows == 0){
        $itemsBlock = 'You have not yet opened cases...';
    }
    $items = $Functions->db->query("SELECT * FROM `drops`");
		$totalcase = 0;
		while($drop = $items->fetch_object()){
			$totalcase++;}
			
	  $sqr = $Functions->db->query("SELECT * FROM `users`");
	  $totaluser = 0;
	  while($row = $sqr->fetch_object()){
	  $totaluser++;}
		
    session_start();
    $id = session_id();
    
    if ($id!="") {
     $CurrentTime = time();
     $LastTime = time() - 600;
     $base = "session.txt";

     $file = file($base);
     $k = 0;
     for ($i = 0; $i < sizeof($file); $i++) {
      $line = explode("|", $file[$i]);
       if ($line[1] > $LastTime) {
       $ResFile[$k] = $file[$i];
       $k++;
      }
     }

     for ($i = 0; $i<sizeof($ResFile); $i++) {
      $line = explode("|", $ResFile[$i]);
      if ($line[0]==$id) {
          $line[1] = trim($CurrentTime)."\n";
          $is_sid_in_file = 1;
      }
      $line = implode("|", $line); $ResFile[$i] = $line;
     }
    
     $fp = fopen($base, "w");
     for ($i = 0; $i<sizeof($ResFile); $i++) { fputs($fp, $ResFile[$i]); }
     fclose($fp);
    
     if (!$is_sid_in_file) {
      $fp = fopen($base, "a-");
      $line = $id."|".$CurrentTime."\n";
      fputs($fp, $line);
      fclose($fp);
     }
    }
    echo $Functions->getIndex("user", [
        'from' => ['{trade_link}', '{inventory}', '{user_avatar}', '{user_name}', '{user_steam}', '{casesopened}', '{total_case}', '{total_users}', '{online_people}'],
        'to' => [$user->tradelink, $itemsBlock, $user->avatar, strip_tags($user->name), $user->steamid, $casesopened, $totalcase, $totaluser, sizeof(file($base))]
    ]);
}

?>