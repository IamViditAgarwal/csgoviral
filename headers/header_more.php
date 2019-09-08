<header>
	<a href="../index.php" style="cursor: pointer; text-decoration: none ;">
		<div id="main-logo">
				<div class="main-logo">
					<svg width="100px" height="100px">
						<image xlink:href="../logo_header (3).svg" width="100" height="100"/>
					</svg>
				</div>
				<div class="main-logo">
					<svg width="100px" height="100px">
						<image xlink:href="../logoheader.svg" width="100" height="100"/>
					</svg>
				</div>
		</div>
	</a>

		<div id="header-slab">
			<div class="login-box">
				
			</div>
			<div class="dp-box">
				<div class="steamlogo">
					    <?php
							if(!isset($_SESSION['steamid'])) {

	    
	    								loginbutton(); //login button
	    
								}  
								else 
								{
									

								

	    							
								     echo '      <div style="position: absolute;
								    top: 1px;
								    left: 1px;
								    z-index: 1001;
								    margin-left:-8px;
								    margin-top:-5px;">
								                
								                    <div class="dp-border circle">
								                        <div class="dp circle">
								                            <img src="'.$steamprofile['avatarfull'].'" title="" alt="" />
								                        </div>
								                    </div>
								                ';
								           echo   " <div style='color: white; float: left; font-size: 18px; font-weight: 400; letter-spacing: 1px; max-width:160px; max-height:25px; overflow:hidden ;
								    margin-top: -55px; margin-left: 65px;' class='fav_font'><a id='link_profile' href='../profile.php'  style='text-decoration :none  ;' class='fav_font'>".$steamprofile['personaname']."</a></div>";

								          echo      "<div style='color: #16d366; font-size: 18px; font-weight: 400; letter-spacing: 1px; margin-left: 50px; margin-top: 25px;' class='fav_font'><div style='display:inline; float:left;'>$</div><div id='wallet_balance'>";
											

											$database = "credit_system" ;
											$server = "";
											$username = "";
											$password = "";

											$cbs = new mysqli($server,$username,$password,$database) ;

											$credit_table = "Credit_".$_SESSION['steamid'] ;

											$balance = "SELECT * FROM ".$credit_table."  LIMIT 0,1 ";
								             $br = $cbs->query($balance);
								          	if ($br->num_rows >0) 
											{
													 $row = $br->fetch_assoc();
							 						   echo $row['amount'];	  
											}
											else
											{
												echo '<script type="text/javascript">
										                    alert("error");
										                    </script> ' ;
											}
								          //end here
								           $cbs->close();
								          echo "</div></div>";
								          echo " </div>";

								     


								    //Protected content

								    $connection->close();
								   logoutbutton();
								    
								}    

						?>

						<a href="template.html"> 
							
						</a>
					
				</div>


				<div class="green-txt fav_font"><span></span></div>
			</div>


			<div class="fav_font" id="google_translate_element">
				<!--<i class="material-icons" style="padding-top: 3px;font-size:18px;font-weight:400;color:white">language</i>
				-->
				<img src="../images/ic_language_white_24dp_1x.png">
				<!--<div id="google_translate_element"></div>-->
			</div>


	<a  class="fav_font what" href="../whatiscsgoviral.php" target="_blank">
			
				What Is CSGOVIRAL ?

			</a>


			<div id="social-icons">
				<a href="https://www.facebook.com/csgoviral/" target="_blank"><img class="social" src="../images/fb icon.png"></a>
				<a href="https://twitter.com/csgoviral2" target="_blank"><img class="social" src="../images/tw icon.png"></a>
				<a href="https://www.instagram.com/csgoviral9/?hl=en" target="_blank"><img class="social" src="../images/ic.PNG"></a>
				<a href="https://www.youtube.com/channel/UCRHrKiY20MvzzrbWq0MFi6g?view_as=subscriber" target="_blank"><img class="social" src="../images/yt icon.png"></a>
			</div>

			<div id="title">
				<div class="small-line" style="width: 150px;"></div>
				<div class="title fav_font">CSGOVIRAL</div>
				<div class="small-line" style="width: 70%;"></div>

				

				<div id="person_of_week_after">
					
					<div id="buyer_of_week_div">
						<div id="buyer_week_title_image">
							<img src="../images/buyer.png" alt="image" class="buyer_title_img">
						</div>
						<div id="buyer_of_week_person_profile_image">	
							<div class="dp_class">
								 <div class="dp-border1 circle" style="z-index: 130;">
										<div class="dp circle">
											<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/62/624d82d3d1cfa94fe7e036f5a7463a2fea962cd2_full.jpg" title="Best Buyer Avatar" alt="Image" />
										</div>
								</div>
							</div>
						</div>

						<div id="buyer_of_week_person_detail">
							<div class="bwpd">
								<spam style="font-weight: bolder; font-size: 16px; color :#eed66a; width: 100%; max-height: 55px; height:55px; overflow-y: hidden;" class="fav_font">D:-@g0nK!ng</spam>
								<br />
								<span style="font-weight: bolder; font-size: 16px;color :#f3f3f3;" class="fav_font">13</span>
								<br />
								<span class="fav_font" style="color :#f3f3f3; font-size: 13px;">CASES OPENED</span>
							</div>
						</div>

						<div id="buyer_of_week_skin_won">
							<div style="margin-top:3px;">
								<span id="buyer_won" class="fav_font">WON!</span>
							</div>
							<img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszJemkV08u_mpSOhcjnI7TDglRd4cJ5ntbN9J7yjRrj80Y9Y2GicdXBew84NQuGrAK4l-3nhpG_6smaznFlsyd343_czhPmn1gSOaDw15cN/512fx384f" title="Skin Won : AK-47 | Frontside Misty" alt="image" class="skin_won_class">
						</div>
					</div>

					<div id="v_line">
						<div id="line">
						</div>
					</div>

					<div id="seller_of_week_div">
						<div id="seller_week_title_image">
							<img src="../images/seller.png" alt="image" class="seller_title_img">
						</div>

						<div id="seller_of_week_person_profile_image">	
							<div class="dp_class">
								 <div class="dp-border1 circle" style="background-color:#f3f3f3;z-index: 130;">
										<div class="dp circle">
											<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/53/5309397cb683f111600e65e51cb137e53512b705_full.jpg" title="Best Buyer Avatar" alt="Image" />
										</div>
								</div>
							</div>
						</div>
						<div id="seller_of_week_person_detail">
							<div class="bwpd">
								<spam style="font-weight: bolder; font-size: 17px; color :#f3f3f3;" class="fav_font">Ceaser</spam>
								<br />
								<span style="font-weight: bolder; font-size: 17px;color :#f3f3f3;" class="fav_font">11</span>
								<br />
								<span class="fav_font" style="color :#f3f3f3; font-size: 13px;">CASES SOLD</span>
							</div>
						</div>
						<div id="seller_of_week_skin_won">
							<div style="margin-top:3px;">
								<span id="seller_won" class="fav_font">WON!</span>
							</div>
							<img src="https://steamcdn-a.akamaihd.net/apps/730/icons/econ/default_generated/weapon_ump45_cu_ump45_primalsaber_light_large.67bef91a43734d654516f65c4288711b257d2049.png" title="Skin Won : UMP-45 | Primal Saber" alt="image" class="skin_won_class">
						</div>
					</div>
				</div>
				<div id="person_of_week"></div>

			</div>



		</div>

		<div id="stats_left">
			<table  cellpadding="5" cellspacing="10" align="center">
				<tr>
					<td align="center" id="case_open_stats">
						<?php 

							$servername = "";
							$username = "";
							$password = "";
							$dbname = "Csgoviral_MBR";

							
							$conn = new mysqli($servername, $username, $password, $dbname);
							

							$sql = "SELECT DISTINCT(COUNT(*) ) FROM MBR_skin_out";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    
							    $row = $result->fetch_assoc();
							    echo reset($row);
							} else {
							    echo "0";
							}
							$conn->close();

						?>
					</td>
					<td align="center" id="case_available_stat">
						<?php 

							$servername = "";
											$username = "";
											$password = "";
							$dbname = "sell_case_db";

							
							$conn = new mysqli($servername, $username, $password, $dbname);
							

							$sql = "SELECT DISTINCT(COUNT(*) ) FROM sell_case";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    
							    $row = $result->fetch_assoc();
							    echo reset($row);
							} else {
							    echo "0";
							}
							$conn->close();

						?>
					</td>
				</tr>
				<tr>
					<td align="center" id="case_open_text">CASES OPENED</td>
					<td align="center" id="case_available_text">CASES AVAILABLE</td>
				</tr>
			</table>		
		</div>

		<div id="stats_right">
			<table  cellpadding="5" cellspacing="10" align="center">
				<tr>
					<td align="center" id="players_stats">
						<?php 

							$servername = "";
											$username = "";
											$password = "";
							$dbname = "csgoviral";

							
							$conn = new mysqli($servername, $username, $password, $dbname);
							

							$sql = "SELECT DISTINCT(COUNT(*) ) FROM user_data";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    
							    $row = $result->fetch_assoc();
							    echo reset($row);
							} else {
							    echo "0";
							}
							$conn->close();

						?>
						
					</td>
					<td align="center" id="online_stat">
						<?php

							$servername = "";
							$username = "";
							$password = "";
							$dbname = "online_users";

							
							$conn = new mysqli($servername, $username, $password, $dbname);
							

							$sql = "SELECT DISTINCT(COUNT(*) ) FROM onlineUserCOunt";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    
							    $row = $result->fetch_assoc();
							    echo reset($row);
							} else {
							    echo "0";
							}
							$conn->close();

						?>
					</td>
				</tr>
				<tr>
					<td align="center" id="players_text">PLAYERS</td>
					<td align="center" id="online_text">ONLINE</td>
				</tr>
			</table>		
		</div>
				<?php
		
			if(isset($_SESSION['steamid']))
			{
				echo '
					<div style=" z-index:3000 ; position:fixed; top: 50%; right:0%; width: auto; height: auto; display: flex;">
						<a href="javascript:void(0)" style="height: fit-content;" onclick="return expand_notif();">
							<div id="icon" style="background-color: #0debb0; width: 30px; height: 30px; border-radius: 5px 0 0 5px;">
								<i class="fa fa-bell" style="font-size:18px; padding: 6px; color: #303030;"></i>
							</div>
						</a>
						<div id="notif-bar">
							<div style="width: 100%; height: 30px; background-color: #17362e; color: #0debb0; font-family: HandelGotDBol;">
								<div style="padding: 5px;">Notifications</div>

								
								<div style="width: 205px; padding-left: 5px; padding-top: 6px; padding-bottom:6px; height:260px; overflow-x:hidden; overflow-y:scroll;">

								
									<div id="notif-box">
										<div id="notif-content">Welcome to CSGOVIRAL !</div>
										<a href="#" style="text-decoration: none;"><div style=" width: 15px; min-height: 25px; padding-top: 5px;"></div></a>
									</div>';


									$nf_server = "";
									$nf_name = "";
									$nf_password = "";
									$nf_db = "notification" ;

									$nf_con = new mysqli($nf_server , $nf_name , $nf_password, $nf_db);
									$nf_sql = " SELECT message FROM notify WHERE userid ='-' or userid='".$_SESSION['steamid']."' ORDER BY notification_id DESC; " ;
									$nf_result = $nf_con->query($nf_sql) ;
									if($nf_result->num_rows >0)
									{
										while($nf_row = mysqli_fetch_array($nf_result))
										{
											echo '
												<div id="notif-box">
													<div id="notif-content">'.$nf_row['message'].'</div>
													<a href="" class="close-div" style="text-decoration: none;"><div style=" width: 15px; min-height: 25px; padding-top: 5px;">X</div></a>
												</div>
											';
										}
									}

									$nf_con->close();
									
								echo '</div>
								
							</div>

						</div>
					</div>
				';
			}

		?>

		<script>
			$('.close-div').on('click', function(event){
			    $(this).closest("#notif-box").remove();
			    event.preventDefault();
			});
		</script>			
	</header>