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
								                            <img src="'.$_SESSION['avatar'].'" title="" alt="" />
								                        </div>
								                    </div>
								                ';
								            echo   " <div style='color: white; float: left; font-size: 18px; font-weight: 400; letter-spacing: 1px; max-width:160px; overflow:hidden ; max-height:25px;   margin-top: -55px; margin-left: 65px;' class='fav_font'><a id='link_profile' href='../profile.php'  style='text-decoration :none  ;' class='fav_font'>".$steamprofile['personaname']."</a></div>";

								          echo      "<div style='color: #16d366; font-size: 18px; font-weight: 400; letter-spacing: 1px;
								    margin-left: 50px; margin-top: 25px;' class='fav_font'> <div style='display:inline; float:left;'>$</div><div id='wallet_balance'>";
								          
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




			<a  class="fav_font what" href="../whatiscsgoviral" target="_blank">
			
				What Is CSGOVIRAL ?

			</a>

			<div id="social-icons">
				<a href="https://www.facebook.com/csgoviral/" target="_blank"><img class="social" src="../images/fb icon.png"></a>
				<a href="https://www.instagram.com/csgoviral9/?hl=en" target="_blank"><img class="social" src="../images/ic.PNG"></a>
				<a href=""><img class="social" src="../images/yt icon.png"></a>
			</div>

			<div id="title">
				<div class="small-line" style="width: 150px;"></div>
				<div class="title fav_font">CSGOVIRAL</div>
				<div class="small-line" style="width: 70%;"></div>
			</div>



		</div>

	

						
	</header>