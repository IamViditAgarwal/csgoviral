	<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		
	{  echo '<body style="background-color: #f7f7f7; font-family: sans-serif; ">
			<div style="width:56%; height:auto; margin-right: 22%; margin-left: 22%; margin-top:35%;">
				<img src="images/unreachable.png" style="width:50px; height:50px; float: left;"> <br> <br> <br>
				<p style="float: left;">
					<h3 style="color: #716f6f;">This site can\'t be accessible on Mobile Devices .</h3> <br>
					<p style="color:#969696">Try connecting website from Desktop <br> <br>
					ERR_NOT_SUPPORTED_DEVICE</p>
				</p>
			</div>
		</body>
		' ;
	}
else{
	

session_start() ;
 require('steamauth/steamauth.php');
 require('steamauth/userInfo.php');
 require("db_connect.php") ;


$is_zero= 0; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>CSGOVIRAL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="images/logo.png" rel="icon" type="image/icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/template.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/create case.css">

	<link rel="stylesheet" type="text/css" href="css/profile.css">



	<!--[/end css linking]-->
	<style type="text/css">

		html {
			height: 100%;
		} 
		body {
			background-color: #181818;
			height:100vh;
			min-height: 1000px ! important ; 
			background: radial-gradient(#363636, #181818);
			
		}
		#main {
			height: 100vh;
			width: 100%;
			position: static;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;

		}
	
		#backdrop {
			width: 100%;
			opacity: 0.1;
			position: absolute;
			height :100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	
	
		.logout {
		    background-color: black;
		    color: white;
		    border: 0px;
		    margin-top: 78px;
		    margin-left: 5px;
		    cursor: pointer;
		}
		.steamlogo {
		    margin-top: -22px;
		    margin-left: 7px;
		}


	    #scrollbox {
			width: 70%;
			height: 100%;
			overflow-y: scroll;
			position: relative;
			margin: 0 auto;
		}

		.mb p {
			margin-bottom: 10px;
			font-family: 'Roboto', sans-serif;
		}

		p{
			width: fit-content;
		}

	

		footer {

			

			background-color: black;
			background: linear-gradient(rgba(0,0,0,0) 5%, black 55%);
			min-height: 50px;
			height: 10%;
			padding-top: 120px;
			padding-left: 30px;
			padding-bottom: 20px;
			position: relative;
			color: white;
		}
		@font-face {
		    font-family: HandelGotDBol;
		    src: url(font/HANDGOTL.TTF);
		}



	
		

	</style>
</head>
<body style="position: relative;  min-width: 1100px; top:0px;">
	<header>
		<a href="/" style="cursor: pointer; text-decoration: none ;">
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
							if(!isset($_SESSION['steamid'])) {

	    
	    								loginbutton(); //login button
	    
								}  
								else 
								{
									$person_a_name = $steamprofile['personaname'];
									$avatar = $steamprofile['avatarfull'];
									$steamid = $steamprofile['steamid']; 

									$profile_url = $steamprofile['profileurl'] ;
									$real_name = $steamprofile['realname'] ;


									//make a random name for the credit table
									$credit_table = "Credit_".$steamid ;


										

									$query = $connection->query("SELECT * FROM user_data WHERE steamid ='$steamid' ");

									
										$res = mysqli_fetch_row($query) ;

										if( ($person_a_name != $res['personaname']) || ($real_name != $res['real_name']) || ($avatar != $res['avatar']) )
										{
											$mod_query = $connection->query("UPDATE user_data SET personaname='$person_a_name' , real_name='$real_name', avatar='$avatar', profileurl='$profile_url' WHERE steamid= $steamid ;") ;

											
										}
									

									$_SESSION['personaname'] = $person_a_name ;
									$_SESSION['profile_url'] = $profile_url ;
									$_SESSION['real_name'] = $real_name ;
									$_SESSION['avatar'] = $avatar ;
									$_SESSION['steamid'] = $steamid ;
									$_SESSION['case_table'] = $case_table ;
									$_SESSION['credit_table'] = $credit_table ;


	    							
								     echo '<div style="position: absolute; top: 1px; left: 1px;  z-index: 1001; margin-left:-8px;   margin-top:-5px;">
								                
								                    <div class="dp-border circle">
								                        <div class="dp circle">
								                            <img src="'.$steamprofile['avatarfull'].'" title="" alt="" />
								                        </div>
								                    </div>  ';


								     echo   " <div style='color: white; float: left; font-size: 18px; font-weight: 400; letter-spacing: 1px;
								       margin-top: -55px; margin-left: 65px; width:fit-content; max-width:160px; max-height:25px; overflow:hidden;' class='fav_font'>
								       	<a id='link_profile' href='profile.php'  style='text-decoration :none  ;' class='fav_font'>".$steamprofile['personaname']."</a>
								       </div>";

								     echo      "<div style='color: #16d366; font-size: 18px; font-weight: 400; letter-spacing: 1px; margin-left: 50px; margin-top: 25px;' class='fav_font'>
								     			<div style='display:inline; float:left;'>$</div>
								     			<div id='wallet_balance'>";
								          
								          //get from the database , credit amount

						            $balance = "SELECT * FROM credit_system.".$credit_table." LIMIT 0,1 ";
						             $br = $connection->query($balance);
						          	if ($br->num_rows >0) 
									{
											 $row_bal = $br->fetch_assoc();
					 						   echo $row_bal['amount'];	  
									}
									else
									{
										echo '<script type="text/javascript">
								                    alert("error");
								                    </script> ' ;
									}
							          //end here
							           
							          echo "</div>+</div>";

							          echo " </div>";

								     //chek for the trade url present or not , ifnot ask for it

								  
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



			<!-- Language translation-->
			

			<div class="fav_font" id="google_translate_element">
				<!--<i class="material-icons" style="padding-top: 3px;font-size:18px;font-weight:400;color:white">language</i>
				-->
				<img src="images/ic_language_white_24dp_1x.png">
				<!--<div id="google_translate_element"></div>-->
			</div>

			

			<div id="social-icons">
				<a href="https://www.facebook.com/csgoviral/" target="_blank"><img class="social" src="images/fb icon.png"></a>
				<a href="https://twitter.com/csgoviral2" target="_blank"><img class="social" src="images/tw icon.png"></a>
				<a href="https://www.instagram.com/csgoviral9/?hl=en" target="_blank"><img class="social" src="images/ic.PNG"></a>
				<a href="https://www.youtube.com/channel/UCRHrKiY20MvzzrbWq0MFi6g?view_as=subscriber" target="_blank"><img class="social" src="images/yt icon.png"></a>
			</div>

			<div id="title">
				<div class="small-line" style="width: 150px;"></div>
				<div class="title fav_font">CSGOVIRAL</div>
				<div class="small-line" style="width: 70%;"></div>


				
			</div>



		</div>

	




						
	</header>

	<div id="main">
		<img id="backdrop" src="images/backdrop.png">
	</div>

	  <div class="gng_bk" style="top:16%; ">
			<span style="display: inline; float: left; " class="fav_font"><a href="/" title="Back to Home Page !" style="position:relative ; top: -4px; color: #989898; text-decoration: none ;">Home</a></span>
			<span style="display: inline; float:left; color: #989898; ">&nbsp; &#8680; &nbsp;</span> 
			<span style="display: inline; float:left; color: #989898; " class="fav_font">What Is CSGOVIRAL ? </span>
		</div>

	<div style="width:100%; position: absolute; top:20%;">

	<div style="width: 70% ; margin-left:15% ; margin-right:15%; ">
			<h1 class=" pagename fav_font">What Is CSGOVIRAL ?</h1>
				<div class="whole-box">
					<div class="small-line" style="width: 100%;"></div>
					<div class="small-box">
						<div class="fav_font" style="width: 95%; font-weight: 400; color: #a2a2a2; margin: 0 auto; font-size: 20px; line-height: 27px;">
							<br><br>


								<p>We all love opening cases, the excitement of winning a rare skin and the thrill of trying our luck. The rush we get from seeing the roulette moving, but big corporations try to take unfair advantage of  us, players.</p>
								<p>Their roulettes are rigged and the market is filled with scammers.</p>
								<br>

								<p><b>What can a player do ?</b></p>
								<br>

								<p>This is where CSGOVIRAL comes in with only one motto...</p>
								<br>

								<p style="margin: 0 auto;color: whitesmoke;">By the Player, for the Player</p>
								<br>

								<p>CSGOVIRAL provides a platform to the players where they are the sellers and they are the buyers of their own cases. Here the player has the opportunity to make money the same way case opening sites do, by selling cases.</p>
								<br>

								<p>
									Here you can <b>create your own cases</b> from <b>your own skins</b> and decide the odds for each skin, set the price for the case and sell it.
								</p>
								<br>

								<p>
									You can also open cases created by other players on CSGOVIRAL, where you have the advantage of seeing the odds of getting each skin and their quality( Minimal Wear, Field tested , etc.). Since, the odds are set by the player so <b>NO rigging</b>. Our roulette purely works based on the odds set by the player itself. <br>
									Whenever a case is sold, only 10% of the case value goes to CSGOVIRAL for maintaining its platform rest 90% goes to the seller’s wallet.
								</p>
								<br>

								<p>
									You can cash out the amount from your CSGOVIRAL Wallet to your PAYPAL, PAYTM or Bank Account.

								</p>
								<br>

								<p>You can add money to your CSGOVIRAL Wallet by choosing many different payment methods provided as per your convenience.
								</p>
								<br><br><br><br>
					</div>
					</div>
				</div>


	</div>
	<footer>
			<svg width="50px" height="50px">
				<image xlink:href="logoheader.svg" width="50" height="50"/>
			</svg>
			<article>
				<span class="Hfont">CSGOVIRAL.COM © 2018 <a href="terms and service.php" target="_blank"> Terms of Service</a></span>
				<p class="Bfont"><br>You can open various cases on our website CS:GO at best prices.</p>
				<p class="Bfont"><br>All trades work in the automatic mode via Steam bots.</p>
			</article>
			<img id="chat_icon" src="images/chat_icon.PNG">
		</div>
	</footer>
	
	


	<script type="text/javascript" src="js/translate.js"></script>	
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

		

</body>
</html>
	
	<?php

		}
	?>

