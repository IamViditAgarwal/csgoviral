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

		@font-face {
		    font-family: HandelGotDBol;
		    src: url(font/HANDGOTL.TTF);
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
			<span style="display: inline; float: left; " class="fav_font"><a href="/" title="Back to Home Page !" style="position:relative ; top: -4px; color: #989898;">Home</a></span>
			<span style="display: inline; float:left; color: #989898; ">&nbsp; &#8680; &nbsp;</span> 
			<span style="display: inline; float:left; color: #989898; " class="fav_font">Terms Of Service</span>
		</div>

	<div style="width:100%; position: absolute; top:20%;">

	<div style="width: 70% ; margin-left:15% ; margin-right:15%; ">
			<h1 class=" pagename fav_font">TERMS OF SERVICE</h1>
				<div class="whole-box">
					<div class="small-line" style="width: 100%;"></div>
					<div class="small-box">
						<div class="mb" style="width: 95%; color: #a2a2a2; margin: 0 auto; font-size: 13px; line-height: 20px;">
							<br><br>
								<p>Conditions relating to the use of the Service</p>
								<p>No individual under the age of eighteen (18) may use the Service, regardless of any consent from your parent or guardian to use the Service. 
								You need a supported Web browser to access the Service. You acknowledge and agree that csgoviral.com may cease to support a given Web browser and that your continuous use of the Service will require you to download a supported Web browser. You also acknowledge and agree that the performance of the Service is incumbent on the performance of your computer equipment and your Internet connection. 
								You agree to register and sign on the Services through your Steam account provided by the Valve Corporation. You are solely responsible for managing your account and password and for keeping your password confidential. You are also solely responsible for restricting access to your account. 
								You agree that you are responsible for all activities that occur on your account or through the use of your password by yourself or by other persons. If you believe that a third party has access to your password, use the password regeneration feature of the Service to obtain a new password as soon as possible. In all circumstances, you agree not to permit any third party to use or access the Service.</p>
								<p>As a condition to your use of the Service, you agree not to:<br>
								impersonate or misrepresent your affiliation with any person or entity;<br> 
								access, tamper with, or use any non-public areas of the Service or csgoviral.com computer systems;<br> 
								attempt to probe, scan, or test the vulnerability of the Service or any related system or network or breach any security or authentication measures used in connection with the Service and such systems and networks;<br>
								attempt to decipher, decompile, disassemble, reverse engineer or otherwise investigate any of the software or components used to provide the Service; <br>
								harm or threaten to harm other users in any way or interfere with, or attempt to interfere with, the access of any user, host or network, including without limitation, by sending a virus, overloading, flooding, spamming, or mail-bombing the Service; <br>
								provide payment information belonging to a third party;<br> 
								use the Service in an abusive way contrary to its intended use, to csgoviral.com policies and instructions and to any applicable law; <br>
								systematically retrieve data or other content from the Service to create or compile, directly or indirectly, in single or multiple downloads, a collection, compilation, database, directory or the like, whether by manual methods, through the use of bots, crawlers, or spiders, or otherwise;<br> 
								make use of the Service in a manner contrary to the terms and conditions under which third parties provide facilities and technology necessary for the operation of the Service, such as Paypal or Valve;<br> 
								infringe third party intellectual property rights when using or accessing the Service, including but not limited to in making available virtual items by using the Service; <br>
								make use of, promote, link to or provide access to materials deemed by csgoviral.com at its sole discretion to be offensive or cause harm to csgoviral.com reputation, including, but not limited to, illegal content and pornographic content and content deemed offensive or injurious to csgoviral.com and/or the Service (such as Warez sites, IRC bots and torrent sites).</p>
								<p>Termination</p>
								<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.<br>
								All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability. <br>
								We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. <br>
								Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service. <br>
								All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
								<p>Links To Other websites</p>
								<p>Our Service may contain links to third-party websites or services that are not owned or controlled by csgoviral.com. 
								csgoviral.com has no control over and assumes no responsibility for the content, privacy policies, or practices of any third party websites or services. You further acknowledge and agree that csgoviral.com will not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such websites or services. <br>
								We strongly advise you to read the terms and conditions and privacy policies of any third-party websites or services that you visit. </p>
								<p>No warranties</p>
								<p>This website is provided “as is” without any representations or warranties, express or implied. www.csgoviral.com makes no representations or warranties in relation to this website or the information and materials provided on this website. Without prejudice to the generality of the foregoing paragraph, www.csgoviral.com does not warrant that: this website will be constantly available, or available at all; or the information on this website is complete, true, accurate or non-misleading. Nothing on this website constitutes, or is meant to constitute, advice of any kind. If you require advice in relation to any legal, financial or medical matter you should consult an appropriate professional.</p>
								<p>Affiliation</p>
								<p>We are in NO WAY affiliated with or endorsed by the Valve corporation, Counter Strike: Global Offensive, Steam or any other trademarks of the Valve corporation.</p>
								<p>csgoviral.com Wallet</p>
								<p>By topping up an amount to your csgoviral.com wallet, you accept that the credits received(labeled by the $-sign) is worth real money and can be cashed out.<br>
								Once the skin is deposited to our bots via creating case, it won’t be traded back to the seller(after deleting the case) for at most 7 days due to steam regulations. <br>
								Similarly, when the buyer open’s the case, the item may take at most 7 days to reach the inventory of the buyer.<br><br>

								Avoid websites that are looking like they are owned or controlled by csgoviral.com - we don't have any affiliate sites.<br><br> 

								All of our contact details are listed on our site.<br> 
								Everyone pretending to be "administrator", "moderator" or "trade bot" of csgoviral.com is a scammer - we will never send you screenshots of our control panel or add you on Steam for purposes of trading your items.</p>
								<p>Additional Terms and Conditions; EULAs<br><br>

								Personal data <br><br>

								We can use payment emails to notify customers about news and discounts. <br><br>

								When you use Paypal services provided by Paypal.com to make a purchase on our website, responsibility over your purchase will first be transferred to Paypal.com before it is delivered to you. Paypal assumes primary responsibility, with our assistance, for payment and payment related customer support. The terms between Paypal services and customers who utilize services of Paypal are governed by separate agreements and are not subject to the Terms on this website. <br>
								With respect to customers making purchases through Paypal express checkout, (i) the Privacy Policy of Paypal shall apply to all payments and should be reviewed before making any purchase, and (ii) the Paypal Refund Policy shall apply to all payments unless notice is expressly provided by the relevant supplier to buyers in advance. In addition the purchase of certain products may also require shoppers to agree to one or more End-User License Agreements (or "EULAs") that may include additional terms set by the product supplier rather than by Us or Paypal. You will be bound by any EULA that you agree to. <br>
								We and/or entities that sell products on our website by using Paypal services are primarily responsible for warranty, maintenance, technical or product support services for those Products. We and/or entities that sell products on our website are primarily responsible to users for any liabilities related to fulfillment of orders, and EULAs entered into by the End-User Customer. Paypal services is primarily responsible for facilitating your payment. 
								You are responsible for any fees, taxes or other costs associated with the purchase and delivery of your items resulting from charges imposed by your relationship with payment services providers or the duties and taxes imposed by your local customs officials or other regulatory body. <br>
								For customer service inquiries or disputes, You may contact us by email at csgoviral9@gmail.com. <br>
								Questions related to payments made through Paypal payment services should be addressed to support@paypal.com. <br>
								Where possible, we will work with You and/or any user selling on our website, to resolve any disputes arising from your purchase.<br><br><br><br></p>
					</div>
					</div>
				</div>


	</div>
	<footer>
			<svg width="50px" height="50px">
				<image xlink:href="logoheader.svg" width="50" height="50"/>
			</svg>
			<article>
				<span class="Hfont">CSGOVIRAL.COM © 2018 <a href="terms and service.php"> Terms of Service</a></span>
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


