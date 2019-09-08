
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
					    	require ('steamauth/steamauth.php');
							if(!isset($_SESSION['steamid'])) {

	    
	    								loginbutton(); //login button
	    
								}  
								else {

	    							include ('steamauth/userInfo.php');
								     print '      <div style="position: absolute;
								    top: 1px;
								    left: 1px;
								    z-index: 1001;
								    margin-left:-8px;
								    margin-top:-5px;">
								                <a href="">
								                    <div class="dp-border circle">
								                        <div class="dp circle">
								                            <img src="'.$steamprofile['avatarfull'].'" title="" alt="" />
								                        </div>
								                    </div>
								                </a>';
								            echo   " <div style='color: white;
								    float: left;
								    font-size: 18px;
								    font-weight: 400;
								    letter-spacing: 1px;
								    margin-top: -55px;
								    margin-left: 65px;' class='fav_font'><a href='profile.php' style='text-decoration :none !important ;'>".$steamprofile['personaname']."</a></div>";
								          echo      "<div style='color: #16d366;
								    font-size: 18px;
								    font-weight: 400;
								    letter-spacing: 1px;
								    margin-left: 50px;
								    margin-top: 25px;' class='fav_font'>$<span id='wallet_balance'>0</span>+</div>";
								          echo " </div>";
								    //Protected content
								   logoutbutton();
								    
								}    

						?>

						<a href="template.html"> 
							
						</a>
					
				</div>
					
				<div class="green-txt fav_font"><span></span></div>
			</div>


			<div class="lang fav_font">
				<i class="material-icons" style="padding-top: 3px;font-size:18px;font-weight:400;color:white">language</i>
				<span class="shama">EN</span>
				<i class="fa fa-chevron-down" style="font-size:13px;font-weight:400;color:white;padding-top: 5px;padding-left: 3px;"></i>
			</div>

			<div id="social-icons">
				<a href="https://www.facebook.com/csgoviral/" target="_blank"><img class="social" src="images/fb icon.png"></a>
				<a href="https://www.instagram.com/csgoviral9/?hl=en" target="_blank"><img class="social" src="images/ic.PNG"></a>
				<a href=""><img class="social" src="images/yt icon.png"></a>
			</div>

			<div id="title">
				<div class="small-line" style="width: 150px;"></div>
				<div class="title fav_font">CSGOVIRAL</div>
				<div class="small-line" style="width: 70%;"></div>
			</div>

		</div>

</header>
