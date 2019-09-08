<?php
	
	session_start();

	$servername = "";
				$username = "";
				$password = "";
	$dbname = "finishStyle_csgo";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


	$url = 'http://127.0.0.1:8888?steamid='.$_SESSION['steamid'].'';
	//	$url = 'http://127.0.0.1:8888?steamid=76561198306639779';
		$contents = file_get_contents($url);

		function get_string_between($string, $start, $end){
				    $string = ' ' . $string;
				    $ini = strpos($string, $start);
				    if ($ini == 0) return '';
				    $ini += strlen($start);
				    $len = strpos($string, $end, $ini) - $ini;
				    return substr($string, $ini, $len);
				}

		if(strcmp($contents, "Error")==0)
			{	echo "<div id='err_container'>" ;
				echo '<div type="error" class="fav_font" id="err_button" >Error</div>';
				echo "<br><br><br>" ;
				echo "<div id='msg_error' class='fav_font'>Please Check Your inventory. Make it Public !</div>" ;
				echo "</div>" ;

			}
		else 
			{
					$json_inventory = (json_decode($contents,true));



					$inventoryTable= '<div id="loading_rifles" align= "center" style="text-align:center ;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ; padding-top:10px; padding-left:10px;">' ; 
				
					$col_count=0;

					foreach ($json_inventory as $key => $inventoryItem) {
							
						
										foreach ($inventoryItem as $itemName => $itemValue) {
										
												
												if($itemName=='market_name')
												{	
													if(strpos($itemValue, "Graffiti", 0) !== false){
														break;
													}
													else if( (strpos($itemValue, "AK-47" ) !== false ) || (strpos($itemValue, "M4A4" ) !== false ) || (strpos($itemValue, "M4A1-S" ) !== false ) ||(strpos($itemValue, "FAMAS" ) !== false ) ||(strpos($itemValue, "Galil AR" , 0) !== false ) || (strpos($itemValue, "AUG" , 0) !== false ) || (strpos($itemValue, "SG 553") !== false ) )
													{
														//means contain item
														//do the following -> GET THE NEXT ITEM WHICH IS IMAGE URL 
														//$next_item = $inventoryItem['image'] ;
														$next_item = "https://steamcommunity-a.akamaihd.net/economy/image/".$inventoryItem['icon_url'] ;

														// image url value


														$market_name = $inventoryItem['market_name'] ;
														$weapon_name = explode("|",$market_name );
														$skin_name = get_string_between($market_name, '|', '(');  
														$exterior =  get_string_between($market_name, '(', ')');

															if (stripos($weapon_name[0], "StatTrak") !== false) 
															{
																//PRESENT
																 $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".  strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "",  substr($weapon_name[0], 12,-1))))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $skin_name)))."' ";

															}
															else
															{

																   $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $weapon_name[0])))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $skin_name)))."' ";
															}

															//   echo '<script type="text/javascript">alert("'.$finish_sql.'");</script>';

															$fr = $conn->query($finish_sql);

															if ($fr->num_rows > 0) {
															    
															    $f_row = $fr->fetch_assoc();
															    $fs= strtolower(reset($f_row));
															} 
															else {
															    $fs="-";
															}




														$rarity = "#".$inventoryItem['color'] ;


														$tt =  $inventoryItem['tradable'] ;
												
														if($tt!=0)  //tradeable

														{
														   $cc= ' class="invn-itm" ' ;
														}
														else //not tradebale
														{
														   $cc='style=" width: 8vw; min-width: 100px; height: 8vw;  min-height: 100px; background-color: #343235; padding: 5px; vertical-align: middle; text-align: center; position: relative; opacity :0.4 ; border:1px solid rgba(0,0,0,0) ; " ';
														}

														$inventoryTable.='<li style="border:2px solid rgba(0,0,0,0) ; position:relative; padding-right:5px; padding-bottom:5px ;">';

														if($tt==0)
														{
															$inventoryTable.='<div style="width: 30%;height: 30%;position: absolute;top: 35%;z-index: 1001;left: 35%;right: 35%;">	<svg xmlns="http://www.w3.org/2000/svg" style="fill: #8a8a8a;" viewBox="0 0 448 512"> <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path> </svg> </div>';
														}


														$inventoryTable.='<div id="inventory_item_number_'.$col_count.'"  '.$cc.'  onclick="addItem(\''.$next_item.'\',\''.$weapon_name[0].'\',\''.$skin_name.'\',\''.$exterior.'\',\''.$fs.'\',\''.$rarity.'\',\'inventory_item_number_'.$col_count.'\', \''.$tt.'\' )"   >' ;

	/*
														
														$inventoryTable.='<tr><td ><div id="inventory_item_number_'.$col_count.'" onclick="addItem(\''.$next_item.'\',\''.$weapon_name[0].'\',\''.$skin_name.'\',\''.$exterior.'\',\''.$rarity.'\',\'inventory_item_number_'.$col_count.'\')" class="invn-itm" >' ;*/


														$imageofitem='<img src="'.$next_item.'" alt="Image_View" style="position: absolute; margin: 0 auto; left: 0; right: 0; top: 12%;" >' ;

														$inventoryTable.=$imageofitem.'</div></li>';
														$col_count+=1;
													}
												
												}
												
									
											
										}
								//}
								
					}
					if($col_count==0)
					{
						echo "<div id='no_element' class='fav_font' style='width :40%; height :auto;  margin:0 auto; left:0; right:0;  text-align: center;'>" ;
						echo '<div type="error" class="fav_font" style="width:50%; height:auto;  margin:0 auto; left:0; right:0; font-size : 18px; margin-top:10px; padding-top:5px; padding-bottom:10px; color :#7b7b7b;">No Rifles Found!</div>';
						echo "</div>" ;
					}



					$inventoryTable.='</ul></div>' ;


					echo $inventoryTable ;

			}

?>