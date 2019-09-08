<?php

function get_string_between($string, $start, $end){
				    $string = ' ' . $string;
				    $ini = strpos($string, $start);
				    if ($ini == 0) return '';
				    $ini += strlen($start);
				    $len = strpos($string, $end, $ini) - $ini;
				    return substr($string, $ini, $len);
				}
	?>
<?php
			
			session_start();

			$url = 'http://127.0.0.1:8888?steamid='.$_SESSION['steamid'].'';

			//the fiollowing url is for demo m replace it with upper url in deplyment

			//$url = 'http://127.0.0.1:8888?steamid=76561198058604396';
						
			$contents = file_get_contents($url);

			if(strcmp($contents, "Error")==0)
			{	echo "<div id='err_container'>" ;
				echo '<div type="error" class="fav_font" id="err_button" >Error</div>';
				echo "<br><br>" ;
				echo "<div id='msg_error' class='fav_font'>Please Check Your inventory.Make it Public !</div>" ;
				echo "</div>" ;

			}
			else 
			{
					$json_inventory = (json_decode($contents,true));



					$inventoryTable= '<div align= "center"  style="text-align:center ;"><ul style="padding-top:0.5%; padding-left:0.5%; display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">' ;
				
					$col_count=0;
					//$id_count=0;

					foreach ($json_inventory as $key => $inventoryItem) 
					{
							
								//if(($col_count)%5==0)
								//{		
										
										
										foreach ($inventoryItem as $itemName => $itemValue) {
										
											
											
												
												/*if($itemName =='name')
												{
													if(strpos($itemValue, "Case" , 0) !== false )
													{
														break;
													}

												}
												if($itemName =='name')
												{
													if(strpos($itemValue, "Medal" , 0) !== false )
													{
														break;
													}

												}
												if($itemName =='name')
												{
													if(strpos($itemValue, "Graffiti" , 0) !== false )
													{
														break;
													}

												}*/
												if($itemName=='image')
												{	$arg = "https://steamcommunity-a.akamaihd.net/economy/image/".$inventoryItem['icon_url'] ;

													$name = $inventoryItem['name'] ;
													$market_name = $inventoryItem['market_name'] ;
													$exterior = get_string_between($market_name, '(' , ')') ;

													$type= $inventoryItem['type'];

													$tt =  $inventoryItem['tradable'] ;
													
													$id="inventory_item".$col_count ;
													
													
													$inventoryTable.='<li style="padding-right:5px; padding-bottom:5px;"><div id="inventory_item'.$col_count.'" onclick="showItem(\''.$id.'\',\''.$arg.'\',\''.$name.'\',\''.$exterior.'\',\''.$type.'\' , \''.$tt.'\' )" style="border:1px solid rgba(0,0,0,0);" class="invn-itm-profile" ><input type="hidden" id="default'.$col_count.'" value="'.$arg.','.$name.','.$exterior.','.$type.','.$tt.' ">' ;


													$imageofitem='<img src="'.$arg.'" alt="Image_View"  style="position:absolute; margin:0 auto; left :0; right :0; top:13%;">' ;

													$inventoryTable.=$imageofitem.'</div></li>';
													$col_count+=1;
												}
												
									
											
										}
								//}
							/*	else
								{
										

										foreach ($inventoryItem as $itemName => $itemValue) {
							
											
											//$pos=strpos($itemValue, $case) ;
											
												/*if($itemName =='name')
												{
													if(strpos($itemValue, "Case" , 0) !== false )
													{
														break;
													}

												}
												
												if($itemName =='name')
												{
													if(strpos($itemValue, "Graffiti" , 0) !== false )
													{
														break;
													}

												}
												if($itemName =='name')
												{
													if(strpos($itemValue, "Medal" , 0) !== false )
													{
														break;
													}

												}
												if($itemName=='image')

												{
													$arg = $itemValue ;

													$name = $inventoryItem['name'] ;
													$market_name = $inventoryItem['market_name'] ;
													$exterior = get_string_between($market_name, '(' , ')') ;

													$type= $inventoryItem['type'];

													$tt =  $inventoryItem['tradable'] ;

													$id="inventory_item".$col_count ;

													
													
													$inventoryTable.='<td ><div id="inventory_item'.$col_count.'" class="invn-itm-profile" style="border:1px solid rgba(0,0,0,0);"  onclick="showItem(\''.$id.'\', \''.$arg.'\',\''.$name.'\',\''.$exterior.'\',\''.$type.'\' , \''.$tt.'\' )" >' ; //style="border :1px solid white;"


													$imageofitem='<img src="'.$itemValue.'" style="position:absolute; margin:0 auto; left :0; right :0; top:13%;" alt="Image_View" >' ;

													$inventoryTable.=$imageofitem.'</div></td>';
													$col_count+=1;
												}
											
										}
								}*/
					}



					$inventoryTable.='</ul></div>' ;


					echo $inventoryTable ;

			}
			


?>

	

