
	<header>

		<a href="index.php" style="cursor: pointer; text-decoration: none ;">
		<div id="main-logo">
				<div class="main-logo">
					<svg width="100px" height="100px">
						<image xlink:href="logo_header (3).svg" width="100" height="100"/>
					</svg>
				</div>
				<div class="main-logo">
					<svg width="100px" height="100px">
						<image xlink:href="logoheader.svg" width="100" height="100"/>
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
					    //	require ('steamauth/steamauth.php');
							if(!isset($_SESSION['steamid'])) {

	    
	    								loginbutton(); //login button
	    
								}  
								else {

	    						//	include ('steamauth/userInfo.php');
								     print '<div style="position: absolute; top: 1px; left: 1px; z-index: 2101; margin-left:-8px; margin-top:-5px;">
								                <a href="">
								                    <div class="dp-border circle">
								                        <div class="dp circle">
								                            <img src="'.$steamprofile['avatarfull'].'" title="" alt="" />
								                        </div>
								                    </div>
								                </a>';
								            echo   " <div style='color: white; float: left; font-size: 18px; font-weight: 400; letter-spacing: 1px; max-width:160px; max-height:25px; overflow:hidden ;
								    margin-top: -55px; margin-left: 65px;' class='fav_font'>
								    			<a id='link_profile' href='profile'  style='text-decoration :none  ;' class='fav_font'>".$steamprofile['personaname']."</a>
								    		</div>";
								          echo  "<div style='color: #16d366; font-size: 18px; font-weight: 400; letter-spacing: 1px; margin-left: 50px; margin-top: 25px;' class='fav_font'>  
								          <div style='display:inline; float:left;'>$</div><div id='wallet_balance'>";
								          
								          //get from the database , credit amount

								    		$database = "credit_system" ;
											$server = "";
											$username = "";
											$password = "";

											$con = new mysqli($server,$username,$password,$database) ;

								             $balance = "SELECT * FROM ".$_SESSION['credit_table']."  LIMIT 0,1 ";
								             $br = $con->query($balance);
								          	if ($br->num_rows >0) 
											{
													 $row_b = $br->fetch_assoc();
							 						   echo $row_b['amount'];	  
							 						 global  $user_amount;
							 						 $user_amount =$row_b['amount'];

							 					}	
											else
											{
												echo '<script type="text/javascript">
										                    alert("error");
										                    </script> ' ;
											}
								          //end here
								           
								          echo "</div></div>";
								          echo " </div>";

								          $con->close();
								    //Protected content
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
				<img src="images/ic_language_white_24dp_1x.png">
				<!--<div id="google_translate_element"></div>-->
			</div>

				<a  class="fav_font what" href="whatiscsgoviral" target="_blank">
			
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
			</div>


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
