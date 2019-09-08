<?php
	$tt=$_POST['tn'] ;
	$db_userProfileCasesItem = "sell_case_db" ;
	$server = "";
	$username = "";
	$password = "";

	$con_userProfile = new mysqli($server , $username , $password , $db_userProfileCasesItem) ;

	 $sql_profile_user = "SELECT * FROM Table_".$tt."	 "; 


	$result1 = $con_userProfile->query($sql_profile_user);

	if ($result1->num_rows > 0)
	{
		$col_count=0 ;
		echo '
		<div class="case_info_tb"  style="width:100%;">
		<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';

		while ($row1=mysqli_fetch_array($result1))
		{	

	 

	    		echo '
		        <li style="padding:10px;">
		        
		            <div id="both">
		            	<div id="case_contain_div_content">
							<div id="case_contain_div_upper_content">

								<img src="'.$row1['case_item_image'].'" title="Item Skin" alt="Image">
								<span style=" position: absolute; top: 2%; float: right; right: 2%; z-index: 15; color:#ff9300;" class="fav_font">';
								if (stripos($row1['weapon_name'], "StatTrak") !== false) 
										echo substr($row1['weapon_name'], 0,11);
									  else
									  	echo '';
								echo '</span>
							</div>
							<div id="case_contain_div_lower_content">
								<div id="case_contain_item_name">
										<div id="case_contain_weapon_name" class="fav_font">';
																			if (stripos($row1['weapon_name'], "StatTrak") !== false) 
																				echo substr($row1['weapon_name'], 12,-1);
																			  else
																			  	echo $row1['weapon_name'];
																			echo '</div>
																			<div style="font-weight: 900; color: white; width: 0.9%; display:inline; float:left;">|</div>
																			<div class="fav_font" id="case_contain_weapon_skin_name">'.$row1['skin_name'].'</div>

								</div>
								<div id="case_contain_item_extras">
									<div id="case_contain_item_extras_upper">
										<div id="case_contain_item_extras_upper_left" class="fav_font">Finish Style</div>
										<div id="case_contain_item_extras_upper_middle" class="fav_font">:</div>
										<div id="case_contain_item_extras_upper_right" class="fav_font">';

											if (stripos($row1['weapon_name'], "StatTrak") !== false) 
											{
												//PRESENT
												 $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".  strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "",  substr($row1['weapon_name'], 12,-1))))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row1['skin_name'])))."' ";

											}
											else
											{

												   $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row1['weapon_name'])))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row1['skin_name'])))."' ";
											}


										//   echo '<script type="text/javascript">alert("'.$finish_sql.'");</script>';

											$fr = $con_userProfile->query($finish_sql);

											if ($fr->num_rows > 0) {
											    
											    $f_row = $fr->fetch_assoc();
											    echo strtolower(reset($f_row));
											} 
											else {
											    echo "-";
											}

										echo '</div>
									</div>
									<div id="case_contain_item_extras_lower">
										<div id="case_contain_item_extras_upper_left" class="fav_font">Exterior</div>
										<div id="case_contain_item_extras_upper_middle" class="fav_font">:</div>
										<div id="case_contain_item_extras_upper_right" class="fav_font">'.$row1['exterior'].'</div>
									</div>
								</div>
								<div id="case_contain_item_odds">
									<div id="odds_left" class="fav_font">Odds</div>
									<div id="odds_middle" class="fav_font">:</div>
									<div id="odds_right" class="fav_font">'.$row1['odd'].'&nbsp;%</div>
								</div>
							</div>

						</div>
						<div id="case_contain_div">
							<div id="case_contain_div_upper">
								
							</div>
							<div id="case_contain_div_lower">
								
							</div>

						</div>
					</div>
		        </li>';
		      
		}

		 echo '</ul></div>';
		

		 
	}
	else
	{
			echo '<div class="fav_font" style="text-align:center ; margin-top:10%; font-size:16px; letter-spacing:1px; color :#9a9a9a;" >Sorry, Case Items can\'t available</div>' ;
	} 

	$con_userProfile->close();

?>