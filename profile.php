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

	session_start();
	if(!isset($_SESSION['steamid']))
	{ 
		/*session_start();*/
		echo '<script type="text/javascript">
	                    alert("Please Login To continue !");
	                    window.location="../";
	                    </script> ';
		
	}
	
	 else
	 {
		
	 }


?>

<?php

 require('steamauth/steamauth.php');
 require('steamauth/userInfo.php');


?>





<!DOCTYPE html>
<html>
<head>
	<title>CSGOVIRAL-Profile</title>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="images/logo.png" rel="icon" type="image/icon">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/notification.js"></script>
	<link href="color-picker.min.css" rel="stylesheet">	

	<link rel="stylesheet" type="text/css" href="css/template.css">
	<link rel="stylesheet" type="text/css" href="css/create case.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<!--css fot div styles-->

	<link rel="stylesheet" type="text/css" href="css/div_style_allInOne.css">
	<link rel="stylesheet" type="text/css" href="css/div_style_rifle.css">
	<link rel="stylesheet" type="text/css" href="css/div_style_pistol.css">
	<link rel="stylesheet" type="text/css" href="css/div_style_smg.css">
	<link rel="stylesheet" type="text/css" href="css/div_style_heavy.css">
	<link rel="stylesheet" type="text/css" href="css/div_style_sniper.css">
	<link rel="stylesheet" type="text/css" href="css/div_style_knife.css">
	<link rel="stylesheet" type="text/css" href="css/div_style_glove.css">

	<!--[/end css linking]-->

	<link rel="stylesheet" type="text/css" href="css/your_case.css">

	<style type="text/css">
	
		body
		{
			background-color: #181818;

			min-height: 1000px ! important ; 
			background: radial-gradient(#363636, #181818);
		}



		p{
			width: fit-content;
		}
		
		
		#backdrop {
			width: 100%;
			height : auto;
			opacity: 0.1;
		}

		
		.logout {
		    background-color: black;
		    color: white;
		    border: 0px;
		    margin-top: 56px;
		    margin-left: 12px;
		    cursor: pointer;
		}
		.player_info {
			
			
			margin-top:15%;
			margin-left :5%;
			
			color :white;
			
		}
		#err_container{
			display :inline;
			width : 80%;
			height :auto;
			margin-left :10%;
			margin-right: 10%;
			margin-top:20%;
		}
		#err_button{
			padding-top: 7px;
			padding-bottom: 7px;
			padding-right: 15px;
			padding-left: 15px;
			background-color: #351515;
			border-radius: 3px;
			border: 2px solid #f10e0e;
			font-size: 30px;
			text-align: center;
			color: #f10e0e;
			margin-left: 35%;
			width:72px;
			height:42px;
			
		}
		#err_button:hover{
			color: #d81717;
		}
		#msg_error
		{
			
			color :#e84a4a;
			font-size: 20px;
			height: auto;
			width : 90%;
			margin-left: 10%;
			margin-right: 10%;
			font-weight: bold;
			margin-top:10%;


		}
		.player_info >h1 {
			font-size :28px;
			font-weight: 400 ;
		}
		.player_info >a {
			text-decoration: none !important ;
		}
		.goog-te-gadget-simple{
			background-color: black !important;
			border: none !important;
		}
		.goog-te-gadget-icon{
			display: none;
		}
		.goog-te-menu-value{ /*select language*/
			color: white !important;
			font-family: HandelGotDBol;
		}
		.goog-te-menu-frame
		{
			background-color: black;
			color:white;
			border-radius: 5px;
			z-index:1010;
			position: absolute;
			top:40px;
			left:40px;
			border: none;

		}
		.goog-te-menu-frame span {
			background : rgba(220,38,38,0.9);
			font-size: 30px;
			position: absolute;
			top:40px;
			width: 195px;
		}
		.goog-te-menu2
		{
			background-color: black;
			color :white;
		}	
		.goog-te-menu2-item, .goog-te-menu2-item-selected
		{
				background-color: black;
				color:white;
		}
		#google_translate_element
		{
			position: absolute;
			top: 13px;
			left: 215px;
			font-weight: 700;
			font-size: 20px;
			display: inline-flex;
		}
		footer {
			background-color: black;
			background: linear-gradient(rgba(0,0,0,0) 5%, black 70%);
			min-height: 50px;
			height: 10%;
			padding-top: 80px;
			padding-left: 30px;
			padding-bottom: 20px;
			position: relative;
			margin-top: 10%;
			color: white;
		}

		@media screen and (max-width: 1440px)
		{
			footer
			{
				margin-top: 20%;
			}
		}
	</style>



</head>
<body style="position: relative;  min-width: 1100px; top:0px;">


	<?php
		include("headers/header_profile.php") ;
	?>

	<div id="main">

		<img id="backdrop" src="images/backdrop.png">
	</div>


	  <div class="gng_bk">
			<span style="display: inline; float: left; " class="fav_font"><a href="index.php" title="Back to Home Page !" style="position:relative ; top: -4px; text-decoration: none;">Home</a></span>
			<span style="display: inline; float:left;">&nbsp; &#8680; &nbsp;</span> 
			<span style="display: inline; float:left;" class="fav_font">Profile</span>
		</div>


	<div id="profile_box">
		
     

		<div class="whole-box">
			<div class="small-line" style="width: 97%;"></div>
				<div class="small-box">
					<div id="big-dp">
						<div class="dp_large circle">
							<img alt="images/default-avatar.png" style="width:100%; height:100%;" src="<?php echo $_SESSION['avatar'];?> ">
						</div>
					</div>
					

					


					<div class="player_info fav_font" style="position: absolute; top: -8.5%; left: 14%; ">
						<h1 id="player_name" style="line-height: 0" class="fav_font"><?php echo $_SESSION['personaname'];?></h1><br>
						<a href="<?php echo $_SESSION['profile_url'];?>" target="_blank" style="color: #a2a0a3; font-weight: 900;" class="fav_font"><u>Steam Profile</u></a>
					</div>
					<!--<a href=""><span class="fav_font logout">Logout</span></a>-->
					<div class="wrap_small">
						<div class="info-col" style="border-right: 2px solid rgba(192,192,192,0.25);">
							<div class="fav_font" style="word-spacing: 5px;font-size: 20px; font-weight: 900;">
								<div style="display: inline; float: left;">Your Wallet :</div> 
								<div style="color: #16d366; padding-left: 3px; padding-right: 3px; display: inline; float: left;">$</div>
								<div style="display: inline; float: left;">
									<?php
								    		echo $user_amount;
									?>
								</div>
							</div>
							<br />
							<div style="padding-top: 1vw">



								<?php

								if($user_amount>500)
								{
									//no add money in wallet
									?>
									<div  title="You can't add more money. Wallet Limit reached of $ 500  ! " style="cursor: not-allowed; display: inline-block;">
									<button disabled class="fav_font" style="opacity:0.5;  pointer-events:none ; padding-top: 7px; padding-bottom: 7px; padding-right: 15px;     padding-left: 15px; background-color: #16361f; border-radius: 3px; border: 2px solid #0ef229; font-size: 1.6vw; color: #0ef229; margin: 0 auto; cursor: pointer;" >Add Money</button></div>
								<?php }
								else
								{

									?>

								<button type="add" class="fav_font" id="add_button" >Add Money</button>

								

								<div id="add_money" class="modal">

									  <!-- Modal content -->
									<div class="modal-content">
									    
									    <div class="modal-header">
										      <span class="close">&times;</span>
											<div style="text-align: center; font-size: 25px; margin-top: 5%;">
											    <span class="fav_font">
											        Add funds to your CSGOVIRAL wallet
											    </span>

											</div>
									    </div>
									     
									    <div class="modal-body">

									    	 <form class="paypal" action="payment/callPay.php" style="width:100%;" method="post" id="paypal_form" >
			     
												<div class="amount_enter">
												     	 
												     <span class="fav_font">
												        csgoviral/user/<?php echo $_SESSION['personaname']; ?>
												    </span>
												    <br>

												    <div id="pricetag" style="width:100%; display: block;">
														<div style="position:relative; width: 100%;">

															<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ;">

																<li style="width: 30%; margin-right: 2%; margin-left: 1%; ">
																	<input type="radio" name="r_f" value="1" style="margin-right:3px;">
																	 <span class="fav_font" id="curr">$ <span style="color:white; font-weight: 400; font-size: 20px; text-align: center;  padding-right: 26px; padding-left:5px;" class="fav_font">2.00</span></span>
															   		
															
																</li>
																<li style="width: 30%; margin-right: 1.5%; margin-left: 1.5%;">
																	<input type="radio" name="r_f" value="2" style="margin-right:3px;">
																	 <span class="fav_font" id="curr">$ <span style="color:white; font-weight: 400; font-size: 20px; text-align: center;  padding-right: 26px; padding-left:5px;" class="fav_font">5.00</span></span>
															   		
															
																</li>
																<li style="width: 30%; margin-right: 2%; margin-left: 1%;">
																	<input type="radio" name="r_f" value="3" style="margin-right:3px;">
																	 <span class="fav_font" id="curr">$ <span style="color:white; font-weight: 400; font-size: 20px; text-align: center;  padding-right: 18px; padding-left:5px;" class="fav_font">10.00</span></span>
															   		
															
																</li>
															</ul>

														</div>

														<br> <br>

														<div style="position: absolute; width: 100%;">
															<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ;">
																
																<li style="width: 30%; margin-right: 2.5%; margin-left: 0.5%;">
																	<input type="radio" name="r_f" value="4" style="margin-right:3px;">
																	 <span class="fav_font" id="curr">$ <span style="color:white; font-weight: 400; font-size: 20px; text-align: center;  padding-right: 13px; padding-left:5px;" class="fav_font">25.00</span></span>
															   		
															
																</li>
																<li style="width: 30%; margin-right: 3.5%; margin-left: -0.5%;">
																	<input type="radio" name="r_f" value="5" style="margin-right:3px;">
																	 <span class="fav_font" id="curr">$ <span style="color:white; font-weight: 400; font-size: 20px; text-align: center;  padding-right: 12px; padding-left:5px;" class="fav_font">50.00</span></span>
															   		
															
																</li>
																<li style="width: 30%;  margin-left: -2.5%;">
																	<input type="radio" name="r_f" value="6" style="margin-right:3px;">
																	 <span class="fav_font" id="curr">$ <span style="color:white; font-weight: 400; font-size: 20px; text-align: center;  padding-right: 5px; padding-left:5px;" class="fav_font">100.00</span></span>
															   		
															
																</li>
															</ul>

														</div>
															   
												
													</div>

												    <div class="fav_font" style="color: #474747;  font-weight:800; position:absolute ; margin-top: 10%; margin-left: 0%; ">
													  
													    	<span style="display: inline; width:50px; margin-top: 5px;">
													    		<p style="display: inline; float: left; margin-left:10px;">Wallet Limit :</p>
													    		<p style="display: inline; float: left; margin-left: 10px;  overflow: hidden;" id="buyer_receive" >$ 500 </p>
													    	</span>
													</div>

												</div>
												    
										</div>

										 <div class="modal-footer" >

											<input type="submit" name="submit" value="PAY" class="fav_font" style="cursor:pointer; padding-top: 10px; padding-bottom: 10px; padding-right: 25px; padding-left: 25px; background-color:rgba(2, 37, 28, 1); border-radius: 1px;  border: 2px solid rgba(14, 244, 180,1);  font-size: 20px; font-weight: 600; margin-bottom:  3% ; letter-spacing: 3px; left:0; right :0; color:rgba(14, 244, 180,1); margin-top: 5%;"/>
												   
										    </form>


										    <div class="conditions fav_font">
										      	<p>* Payments are processed by Paypal</p>
										      	
										      	<p style="margin-top:5px;">* Taxes & Conversion Rates are applicable. </p>
										    </div>
									    
										 
									     </div>
									</div>

								</div>
								<?php
								}
								?>
								

								
							<?php
								if($user_amount>=5)
								{

								?>
								<button type="cash" class="fav_font" id="cash_button" >Cashout</button>


								<div id="cashout_money" class="modal">

									  <!-- Modal content -->
									<div class="modal-content">
									   
									    <div class="modal-header">
										      <span class="close close_cashoutdialog">&times;</span>
											  <div style="text-align: center; font-size: 25px; margin-top: 5%;">
												    <span class="fav_font">
												        Cashout from your CSGOVIRAL wallet
												    </span>
											   </div>
									    </div>
									     
									    <div class="modal-body" style="text-align: center;">
									    	 <span class="fav_font">
												        csgoviral/user/<?php echo $_SESSION['personaname']; ?>
										     </span>
									    
									       <form method="post" action="intermediate/cashout.php" enctype="application/x-www-form-urlencoded" style="margin-top: 50px;">
										        <div id="pricetag" style="margin: 0 auto;">
										            <label style="font-size: 20px;padding: 7px; color: white; margin-right: 30px;" class="fav_font">Amount</label>
										            <span class="fav_font" id="curr">$</span>
										            <input type="number" min="5" max="500" name="amount" id="price" class="fav_font" style="width: 100px; background-color: #565555; color: white;">
										            <span class="fav_font" style="color: #474747;margin-left: 10px;">Minimum amount : $ 5</span>
										        </div>
										        <div id="pricetag" style="margin: 0 auto; margin-top: 30px;">
										            <label style="padding: 7px;margin-right: 20px;">
										              <img src="images/paypal_logo.png" width="100px">
										            </label>
										            <input type="text" name="paypalID" id="price" class="fav_font" style="width: 300px; background-color: #565555; color: #c3c1c1; font-size: 2vh;" placeholder="Email">
										        </div>
										        <div class="fav_font" style="margin-top:20px; font-size: 18px; font-weight: 600;">
										        	Or
										        	<br>
										        	<span style="font-weight: 400;  font-style: italic; font-size: 15px; color:#5ef2b4;">If you are from India , select Paytm </span>
										        </div>
										        <div id="pricetag" style="margin: 0 auto; margin-top: 20px;">
										            <label style="padding: 7px;margin-right: 20px;">
										              <img src="images/Paytm_logo.png" width="100px" height="26px">
										            </label>
										            <input type="text" name="paytmID" id="price" class="fav_font" style="width: 300px; background-color: #565555; color: #c3c1c1; font-size: 2vh;" placeholder="Email or mobile number">
										        </div>

										       


									    </div>

									    <div class="modal-footer" >

									    	<!-- <div id="pricetag" style="margin: 0 auto; margin-top: 50px;">
										            <input type="submit" name="continue" value="Continue" style="background-color: rgba(0,0,0,0); border: none; font-size: 25px; color: #10eeb1;">
										        </div>-->


										        
									    	 <input type="submit" name="continue" value="CONTINUE" class="fav_font" style="cursor:pointer; padding-top: 10px; padding-bottom: 10px; padding-right: 10px; padding-left: 10px; background-color:rgba(2, 37, 28, 1); border-radius: 1px;  border: 2px solid rgba(14, 244, 180,1);  font-size: 14px; font-weight: 600; margin-bottom:  3% ; letter-spacing: 2px; left:0; right :0; color:rgba(14, 244, 180,1);">


									    	 <br>
								           </form>

								            <div class="conditions fav_font">
										      	<p>* Payments are processed by Paypal & Paytm</p>
										      	<p style="margin-top:5px;">* Cashout will be done once in a week</p>										      	
										      	<p style="margin-top:5px;">* Taxes & Conversion Rates are applicable. </p>
										    </div>

										</div>


										

									</div>
								</div>
								<?php
								}

								else
								{?>
											<div title="Minimum $5 wallet balance is required for cashout" style="cursor: not-allowed; display: inline-block;">
											<button disabled title="Minimum $5 wallet balance is needed for cashout !" class="fav_font" style="opacity:0.6; display:inline-block; padding-top: 7px; padding-bottom: 7px; padding-right: 15px; padding-left: 15px; background-color: #382915; border-radius: 3px; border: 2px solid #ff9300; font-size: 1.6vw; color: #f7a639; margin-left: 1vw; pointer-events: none;">Cashout</button></div>
								<?php }

								?>




								<a href="case.php"><button type="create" class="fav_font" id="create_button" >Create New Case</button></a>
							</div>
						</div>
						<div class="info-col">
							<span class="fav_font page-font" style="font-weight: 900; ">Your Trade URL</span><br>
							<input  style="width :70%; margin-top: 2%;" type="text" id="tradeURL" name="tradeURL" placeholder="Enter your trade URL!"  value="<?php 

								$servername = "";
								$username = "";
								$password = "";
								$dbname = "csgoviral";
								$id = $_SESSION['steamid'];
								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								
								$sql = "SELECT trade_url_val FROM trade_url WHERE steamid= '$id' ";


								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
								    while($row = $result->fetch_assoc()) {
								        echo $row["trade_url_val"];
								        $_SESSION["tu"] = $row["trade_url_val"];
								    }
								} else {
								    echo "";
								}
								$conn->close();

							?>">
							<button type="save" class="fav_font" id="save_button" style="display: none;" >Save</button>
							<div style="margin-top: 3vh;">
								<span class="fav_font page-font" style="color: #1bd9b7"><?php
									
											//$servername = "localhost";

											$servername = "";
											$un_co = "";
											$pass_co = "";


										//	$un_co = "root";
										//	$pass_co = "root";
											$db_co = "userCaseOpenDb";
											$id = $_SESSION['steamid'];
											// Create connection
											$conn_co = new mysqli($servername, $un_co, $pass_co, $db_co);
											
											$sql = "SELECT  DISTINCT(COUNT(*) ) FROM User_Case_Open_Table_".$id." ";

											$result = $conn_co->query($sql);

											if ($result->num_rows > 0) {
											    
											    $row = $result->fetch_assoc();
											    echo reset($row);
											} else {
											    echo "0";
											}
											$conn_co->close();
								
								?></span>
								<span class="fav_font page-font" style="padding-left: 5px; font-weight: 900;">Cases Opened , </span>
								<span class="fav_font page-font" style="color: #15d365"><?php
									
											$servername = "";
											$un_co = "";
											$pass_co = "";
											$db_co = "user_profile_case_db";
											$id = $_SESSION['steamid'];
											// Create connection
											$conn_co = new mysqli($servername, $un_co, $pass_co, $db_co);
											
											$sql = "SELECT  DISTINCT(COUNT(*) ) FROM User_Case_Table_".$id." WHERE case_stat='sold' ";

											$result = $conn_co->query($sql);

											if ($result->num_rows > 0) {
											    
											    $row = $result->fetch_assoc();
											    echo reset($row);
											} else {
											    echo "0";
											}
											$conn_co->close();
								
								?></span>
								<span class="fav_font page-font" style="padding-left: 5px; font-weight: 900;">Cases Sold</span>
							</div>
						</div>
					</div>
				</div>
		</div>


		<div class="whole-box">
			<div class="small-line" style="width: 97%;"></div>
				<div class="small-box">
					<div id="player_itm_info_box">
						<div id="nav-tab">
							<nav>
								<a href="javascript:void(0)" class="prof-nav-button fav_font" id="case-button" onclick="toggInvt1()" class="fav_font yi" >Your Cases</a>
								<a href="javascript:void(0)" class="prof-nav-button fav_font" id="invt-button" onclick="toggInvt()" class="fav_font yc" >Your Inventory</a>
								<a href="javascript:void(0)" class="prof-nav-button fav_font" id="hld-button" onclick="toggHldItem()" class="fav_font yi" >Items on Hold</a>
								<a href="javascript:void(0)" class="prof-nav-button fav_font" id="history-button" onclick="toggHistory()" class="fav_font yc" >History</a>

							</nav>
						</div>

						<div id="invt-container">
							<div class="inline-container">
								<div id="invt-items-container">
							
									<!-- Inventory Item list goes here -->

									<div class="case-grid">

										<!--Dynamically create this in form of a grid-->

										<script type="text/javascript">
											
											function showItem(id,src, name, exterior, type , trade_tp)
											{
												//prob to clear the session storage on page refreshing
												 var set = sessionStorage.getItem("inventory_item");
												 console.log(set);
												 if(set==id)
												 { 
												 	console.log('same');
													if(trade_tp==0)
															{ document.getElementById('tradeable_stat').style.color="#db0202"; 
																document.getElementById('tradeable_stat').innerHTML="Non Tradeable";  }
														else {
															document.getElementById('tradeable_stat').style.color="green"; 
															document.getElementById('tradeable_stat').innerHTML="Tradeable";	}
														
												 	document.getElementById(set).style.cssText= "border:1px solid #c6c6c6;background: radial-gradient(#8c8c8c, #343235);";
												 	//make hover class bg gradient

												 	//sessionStorage.clear();	
												 }
												 else {
														  if(set==null)
														 {}
														 else{
																document.getElementById(set).style.cssText= "border : 1px solid rgba(0,0,0,0) ; ";
														 }
														

														 sessionStorage.setItem("inventory_item",id);
														  set = sessionStorage.getItem("inventory_item");
														 document.getElementById(set).style.cssText = "border:1px solid #c6c6c6;background: radial-gradient(#8c8c8c, #343235);";


														
														document.getElementById('item_pic').src= src;
														
														//set tradeable
														if(trade_tp==0)
															{ document.getElementById('tradeable_stat').style.color="#db0202"; 
																document.getElementById('tradeable_stat').innerHTML="Non Tradeable";  }
														else {
															document.getElementById('tradeable_stat').style.color="green"; 
															document.getElementById('tradeable_stat').innerHTML="Tradeable";	}
														

														//if it is stat trel make order and write special stat trek tm

														if(name.includes("StatTrak"))
														{
															var res= name.substring(10,);
															document.getElementById('item_detail_name').innerHTML= res;

															document.getElementById('StatTrak_logo').innerHTML=name.substring(0,10);
															document.getElementById('item-info-container').style.border="2px solid #ff9300" ;
														}
														else
														{
															document.getElementById('StatTrak_logo').innerHTML="";
															document.getElementById('item_detail_name').innerHTML= name;
															document.getElementById('item-info-container').style.border="none" ;
														}
														document.getElementById('item_detail_extra_detail').innerHTML= type;
														document.getElementById('item_detail_exterior').innerHTML= exterior;
													}
											}
										</script>

										<?php
											require("get_inv.php")
										?>

									</div>

								</div>
								<!--<div id="item-info-container_layout">
								</div>-->
								<div id="item-info-container">

											<span id="StatTrak_logo" class="fav_font"></span>
											<div class="item_pic">
												<img src="" id="item_pic" >
											</div>

											<!-- white break line -->
											<div class="small-line" style="width: 90%; opacity: 0.2;"></div>


											<!--display further item information-->

											<div id="item_detail">
												<div id="item_detail_name" class="fav_font">
													
												</div>
												<div id="csgo_image">

													<img src="images/csgo.png" >
												</div>
												<div id="item_detail_extra">
													<div id="item_detail_game_name" class="fav_font">
														Counter Strike : Global Offensive
													</div>
													<div id="item_detail_extra_detail" class="fav_font">
															
													</div>
												</div>
												<br />
												<br />
												<div id="item_detail_exterior" class="fav_font">
													
												</div>

												<div id="tradeable_stat" class="fav_font">
													Tradeable
												</div>
											</div>

								</div>
								
							</div>
						</div>

						<div id="case-container">    <!-- user cases that he has created will be here-->
							<div class="inline-container">
								<div id="case-list-conatiner">   <!--user cases design-->
									
									<ul id="caseLoadContainer" style="list-style-type: none;">
										<?php

											$db_userProfile = "user_profile_case_db" ;
											
											

											$server = "";
											$username = "";
											$password = "";


											$con_userProfile = new mysqli($server , $username , $password , $db_userProfile) ;
											//$userid= $_SESSION['steamid'];

											$q_pc = $con_userProfile->query("SELECT * FROM User_Case_Table_".$_SESSION['steamid']."  WHERE case_stat='available'  ");

												
											if($q_pc->num_rows==0)
											{ 
												echo '<div class="no_case fav_font">No Case</div>';
											}
											else
											{
												
									        	$counting=-1;
												while($q_r = $q_pc->fetch_assoc()) 
												 {      	$counting+=1;
								        				
								        				if(strcmp($q_r["case_type"], 'allInOne')==0)
								        				{
								        					echo '<li class="user_profile_cases_list upcl'.$counting.'" id="'.substr($q_r['case_desc_table'],6).'">
								        					
								        					<div class="lin-grad id_user_profile_case_default'.$counting.'" id="id_user_profile_case_default'.$counting.'" style="opacity:0;"></div>

								        						<div class="allinone_container">	
																<img src="'.$q_r["skinOfCase"].'"  class="allinone_container_skinImage">
 
										 						<div class="case_box" >

																    <div id="case-name" class="fav_font" >';

																		    if(strlen($q_r['case_name'])>10 )
																		    	echo substr($q_r['case_name'],0, 10).'..' ;
																		    else
																		    	echo $q_r['case_name'] ; 

																		    echo '</div>
																  	<div id="case-price" class="fav_font">
																  		<span style="color:#3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																  		<span style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">'.$q_r["case_price"].'</span>
																  	</div>
																  
																    <img src="case images/All In One.png" class="allinone_pic">

																    <svg  id="allInOne_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="90%" height="87%" viewBox="0 7 500 390" enable-background="new 0 7 500 390" xml:space="preserve" style="fill: '.$q_r["case_color"].'; position: absolute; margin-left: 7%; margin-top:1px; z-index: 120; mix-blend-mode: soft-light;" >

																	<g id="Layer_2">
																	<path d="M6,218.667c0,0-4.333-14-0.667-15l-2-10c0,0-2-9.667,2.667-13c0,0,54-92,86.333-134l14.667-20c0,0,7.667-13,25.333-11.167
																		l4.167,3.333l31.667-2.167l6.167-4.333c0,0,13-1.833,16.833,3.333c0,0,3.667,6.333,10.667,9L236.5,18.5c0,0,10-4.25,14.75,3.25
																		c0,0,59-14.75,112.5-10c0,0,21.25-14.25,25.5-3l16.5,1l3.25-4l10.75,0.75c0,0,7.75,7.5,10.75,12.25l3.25,0.25l8.75,10.25l5.75,0.5
																		L456,42l-7.75,12.5c0,0,11,27.25-14,16.25l-9.5,10.5c0,0,0,27.5-14.5,15.75l-11.5,12.25c0,0-0.75,23.5-13.5,13.25l-12,13
																		c0,0-0.5,15.75-10.75,12l-10.25,12c0,0-5,17-13.75,8.75l-6.25,13.5c0,0-1.75,24.75-13.25,13.5c0,0-13,1.75-2.5,4.25l174.5,23
																		c0,0,13.5,2,6,15.75l-0.25,14.25l-4,2.25l-2,62.75c0,0-2.25,10.75-17,7.5L454,330c0,0-7.25,6.5-9,5.25l-21.75,11.25l-48-4
																		l-68.5,17.5l-1,9.5c0,0-1,8.75-15.25,9.75l-45,6c0,0-14.25-1.5-18.25,0.5L199,391.5c0,0-3.5,11.5-25.75,5
																		c0,0-113-41.75-138.25-54.25c0,0-13.25-4.25-13.5-14l-5.25-58.5L11.5,268L8,242l-3.5-2.25l-0.25-5.5l-2.5-7L6,218.667z"/>
																	</g>
																	</svg>

																	 
																	 <img src="images/case back.png" class="case_back">
																</div>
									
																</div> </li>';
								        				}
								        				elseif(strcmp($q_r["case_type"], 'rifle')==0)
								        				{
								        					echo '<li class="user_profile_cases_list upcl'.$counting.'" id="'.substr($q_r['case_desc_table'],6).'">
								        					
								        					<div class="lin-grad id_user_profile_case_default'.$counting.'" id="id_user_profile_case_default'.$counting.'" style="opacity:0;"></div>



								        						  <div class="rifle_maincontainer">	
																	 <img src="'.$q_r['skinOfCase'].'" class="rifle_container_skinImage">
						 
											 						<div class="case_box" >

																		    <div id="case-name" class="fav_font" >';

																		    if(strlen($q_r['case_name'])>10 )
																		    	echo substr($q_r['case_name'],0, 10).'..' ;
																		    else
																		    	echo $q_r['case_name'] ; 

																		    echo '</div>
																		  	<div id="case-price" class="fav_font" >
																		  		<span style="color:#3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																  				<span style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">'.$q_r["case_price"].'</span>
																		  	</div>
																		    

																		    <img src="case images/Rifle Only.png" class="rifle_pic">

																		    <svg  id="rifle_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="1.5 1.5 497.333 302.167" enable-background="new 1.5 1.5 497.333 302.167" xml:space="preserve" style="fill: '.$q_r['case_color'].'; position: absolute; margin-left: 1%; z-index: 1 ; mix-blend-mode: soft-light;" >

																			<path d="M496.625,133.876c3.625-7.75,1.375-19.125,1.375-19.125l-22.375-1.75l2.25-27.375l5.625-4.75l1-15.375
																				L473,52.126c-2.625-6.5-12.875-5.25-12.875-5.25l-5.25-6.125l-2.25,0.25c-1.375-5-6.25-1-6.25-1l-3-0.5l-0.5-21.625
																				c-14.125-2.375-17.75,0-17.75,0l-1.75,4.25L423,25.751l1.375,0.125l-1.125,15.875l-2-2.75l-7.375-0.25l-2-2.125h-3.5l-7.375,6.5
																				l-49.5-3.125c-1.75-3.625-8.25-8.5-8.25-8.5l-2.875,2.375l-3-0.125l0.25-21l-16-0.5l-2.875,4l0.125,3.5l1.375,0.125l-0.875,15h-1.25
																				l-2.625-2.25l-11.25-0.5l-2.875,1.5l-60.125-2.75l-4-2.625l-5.625-0.25L231,7.251l-15.375-0.75l-2.75,3.875l-0.25,4.375L214,14.876
																				l0.5,14.25l-1.625,0.375l-1.75-2.375l-7.375-0.625l-3.25-2.375l-7.5,6.875l-42.75-2.625l-7.75-7.625l-2.625,2.25l-1.375-0.875
																				l-1.625-19.5L123,2.001l-3.25,4.25l0.375,3.375l2.125,0.375l0.25,13.75l-1.625,0.625c-0.625-3.25-7.875-3-7.875-3
																				c-2.75-5.25-4.75-0.625-4.75-0.625l-1.75-0.375l-4.625,5.375l-2.375-0.5c-4.875-0.375-6.375,2-6.375,2L81.25,38.376l-1.125,17.875
																				L82,59.001l-1.875,22.875L63.5,81.001l-0.625,16.25l15.625,1.5l-1.25,22.125l-3.125,3.875l-1,18l6.75,9
																				c3.625,6,8.375,5.625,8.375,5.625l8.875,0.75l-0.75,0.875l-6.75,0.5l-0.375,1.75c-8.625-2.625-15-0.625-15-0.625l-5.75,1.75
																				l-6.25,0.25l-21.375,9.75v1.125l-8.125,4l-2.375-0.75l-13.25,6.125H13.25l-11.125,4.75l0.5,4.625L8,197.501
																				c4.625,4.375,6.75,46.5,6.75,46.5c1.25,6.375,7,6.25,7,6.25L401,302.834c8.666,1.5,10.666-3.666,10.666-3.666
																				c5,5.334,12.334,4.166,12.334,4.166c17.834-4.334,6.666-21.499,6.666-21.499L442,269.668c4.5,5,12.332,3.667,12.332,3.667
																				c14.5-6.833,5.293-19.709,5.293-19.709l2.125-37.125l5-4.125l-0.125-5.375l-10.125-5.375c0.375-3-10.875-3.125-10.875-3.125
																				l-0.75-2.125l-5.5-1l-0.375-0.75l8.375,0.625C454,197.001,459,193.876,459,193.876l16.125-14.25l0.75-14l-4.25-5.5l2.75-27.25
																				L496.625,133.876z M187.239,168.745c-0.943-0.384-1.933-0.386-2.928-0.451c-0.063,0.37-0.326,0.699-0.811,0.699
																				c-0.853,0-1.705-0.013-2.554-0.101c-0.177,0.5-0.616,0.877-1.321,0.826c-7.55-0.544-15.066-1.595-22.597-2.137
																				c-6.164-0.443-12.363-1.753-18.528-1.738c-1.285,0.004-1.695-1.346-1.236-2.216c-1.285-0.075-2.601-0.694-3.877-0.383
																				c-0.642,0.157-0.914-0.831-0.271-0.987c1.454-0.355,2.816,0.309,4.261,0.357c0.289,0.009,0.443,0.213,0.479,0.436
																				c0.184-0.088,0.397-0.142,0.646-0.142c6.697-0.017,13.541,1.261,20.208,1.899c6.985,0.668,13.907,1.471,20.917,1.976
																				c0.372,0.026,0.667,0.167,0.893,0.368c0.037-0.002,0.07-0.021,0.107-0.017c0.954,0.125,1.915,0.125,2.875,0.125
																				c0.048,0,0.082,0.021,0.125,0.025c0.068-0.034,0.148-0.056,0.25-0.045c1.229,0.118,2.471,0.045,3.636,0.518
																				C188.115,168.002,187.851,168.993,187.239,168.745z M291.366,179.943c-1.805-0.887-4.007-0.922-6.002-0.928
																				c0.254,1.021-0.276,2.213-1.614,2.11c-10.723-0.828-21.424-1.931-32.131-2.933c-4.657-0.437-9.417-1.35-14.084-1.519
																				c-2.293-0.083-4.974,0.122-6.918-1.289c-0.597-0.433-0.801-1.051-0.747-1.64c-0.237-0.121-0.367-0.352-0.406-0.602
																				c-1.123,0.023-2.276,0.084-3.352-0.275c-0.622-0.208-0.354-1.197,0.272-0.987c1.115,0.373,2.332,0.239,3.489,0.232
																				c0.104,0,0.186,0.03,0.256,0.073c0.042-0.004,0.073-0.023,0.119-0.023c0.177,0,0.313,0.057,0.434,0.131
																				c0.466-0.32,1.075-0.383,1.699,0.07c2.109,1.529,9.254,1.352,11.657,1.598c4.416,0.452,8.837,0.842,13.257,1.251
																				c8.815,0.817,17.624,1.729,26.453,2.412c0.423,0.033,0.766,0.185,1.028,0.409c0.063-0.029,0.137-0.046,0.222-0.046
																				c2.277,0.008,4.798,0.045,6.884,1.069C292.476,179.352,291.957,180.232,291.366,179.943z M396.116,190.857
																				c-2.231-0.654-4.573-0.332-6.869-0.25c0.009,0.959-0.747,1.92-1.915,1.533c-2.818-0.938-5.773-0.826-8.707-0.82
																				c-0.273,0-0.508-0.06-0.706-0.157c-7.078-1.165-14.021-1.103-21.134-1.912c-3.365-0.383-6.767-1.417-10.16-1.431
																				c-2.558-0.008-4.866,0.248-7.293-0.68c-0.734-0.281-1.051-0.92-1.055-1.55c-0.314-0.041-0.61-0.131-0.882-0.36
																				c-0.082-0.068-0.12-0.157-0.136-0.252c-0.521-0.117-0.486-0.977,0.114-0.977h1.375c0.068,0,0.132,0.016,0.188,0.04
																				c0.104-0.017,0.206-0.034,0.313-0.04c0.063-0.003,0.114,0.008,0.166,0.023c0.226-0.036,0.475-0.018,0.751,0.088
																				c2.962,1.134,6.641,0.525,9.808,0.935c3.449,0.445,6.854,1.241,10.338,1.408c6.429,0.308,12.419,0.64,18.748,1.724
																				c3.063-0.011,6.169-0.043,9.106,0.934c0.324,0.107,0.564,0.289,0.739,0.505c2.497-0.058,5.038-0.44,7.477,0.276
																				C397,190.076,396.737,191.041,396.116,190.857z"/>
																			</svg>

																			 
																			 <img src="images/case back.png" class="case_back">

																	</div>
								
																</div></li>';
								        				}
								        				elseif(strcmp($q_r["case_type"], 'pistol')==0)
								        				{
								        					echo '<li class="user_profile_cases_list upcl'.$counting.'" id="'.substr($q_r['case_desc_table'],6).'" style="margin-top:40px;">
								        					
								        					<div class="lin-grad id_user_profile_case_default'.$counting.'" id="id_user_profile_case_default'.$counting.'" style="opacity:0;"></div>

								        						<div class="pistol_maincontainer">	
																	<img src="'.$q_r['skinOfCase'].'" class="pistol_container_skinImage">
						 
						 											<div class="case_box" >
																	    <div id="case-name" class="fav_font">';

																	    if(strlen($q_r['case_name'])>10 )
																	    	echo substr($q_r['case_name'],0, 10).'..' ;
																	    else
																	    	echo $q_r['case_name'] ; 

																	    echo '</div>
																	  	<div id="case-price" class="fav_font">
																	  		<span style="color:#3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																  		<span style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">'.$q_r["case_price"].'</span>
																	  	</div>
													  

																	    <img src="case images/Pistol Only.png" class="pistol_pic">

													   					 <svg  id="pistol_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.334 4.833 449.667 492.667" enable-background="new 3.334 4.833 449.667 492.667" xml:space="preserve" style="fill: '.$q_r['case_color'].'; position: absolute; margin-left: 15%; margin-top:-12px; z-index: 1 ; mix-blend-mode: soft-light;" >

																			<path d="M450.75,382.25l-4.75-1.5l-38.5-87c8.25-16-27.5-17-27.5-17c-1.5-6-5-7.25-5-7.25l-0.5-2.5l5.75,0.5l3,1.5
																			c22.5-6.75,20.75-26.75,20.75-26.75l-2.25-2.75l5-174l3.25-3c2.5-13.5-9.75-24.75-9.75-24.75l-3-14.75l-27.75-0.75l-5.25,5l-0.5,7.5
																			h-2.5v-16.5L362.5,12l-2.5-0.25l0.75-5L358.5,6l-27.75,1l-0.5,6.25l1.5,0.5l-0.25,9l-3.5,1l-0.5,10.75l-188,0.5l-3-1l-1.5-9.5l-2-2
																			l-0.75-10.25L134,10.5l-1.25-2.75c-14-5.75-27.5,1-27.5,1l-0.5,2.25L102,15.75l2.75,3.5l-1.5,15.25l-2.75,0.25l-0.25-7.25l-4.5-4.75
																			L73,23.5h-6.25L63.25,38c-10,12.5-9.5,23-9.5,23l3.75,3.5l3.75,174L58.5,241C58.25,263.5,79,268,79,268l3.125-1.875l6,0.5L83,272.25
																			l-0.375,2.125c-30.25,3-29.375,13.125-29.375,13.125l0.75,4.25L10.75,378c-4-0.25-5.75,4.25-5.75,4.25
																			c-1.75,12.5,5.5,19.25,5.5,19.25l-0.5,5l2,4.25L24.25,412l9.5,46.75c2.5,14.5,19.75,16,19.75,16c5.25,5.25,8.25,0.25,8.25,0.25H113
																			l2,1.75l43.25,17.5c18.5,5,141,1.25,141,1.25l42-18.5l53.25,0.25c5.25,6,7.75-0.25,7.75-0.25c16.5,0.25,21-13.25,21-13.25l9-49.75
																			H442c3.75-0.5,4-8.25,4-8.25C456,392,450.75,382.25,450.75,382.25z M287.433,269.186c0.074,0.362-2.907,3.961-3.07,4.186
																			c-0.749,1.023-1.553,1.74-2.861,1.843c-0.43,0.033-1.135-0.347-1.25-0.347h-93.956c-2.282,0.566-4.824,1.566-6.787,0.359
																			c-1.888-1.16-3.496-5.261-3.56-5.5c-1.778-0.49-1.775-3.322,0.303-3.266c1.169,0.031,2.307,0.266,3.442,0.5h2.558
																			c0.325,0,0.593,0.081,0.818,0.207c0.143-0.014,0.28-0.034,0.432-0.034h96.75c0.12,0,0.223,0.024,0.337,0.033
																			c0.014-0.001,0.023-0.005,0.038-0.005c2.449-0.057,4.879-0.868,7.321-0.332C289.431,267.154,288.861,269.361,287.433,269.186z"/>
																											</svg>

																		 
																			 <img src="images/case back.png" class="case_back">
														
																				</div>
																	</div></li>';
								        				}
								        				elseif(strcmp($q_r["case_type"],'smg')==0)
								        				{
								        					echo '<li class="user_profile_cases_list upcl'.$counting.'" id="'.substr($q_r['case_desc_table'],6).'" style="margin-top:40px;">
								        					
								        					<div class="lin-grad id_user_profile_case_default'.$counting.'" id="id_user_profile_case_default'.$counting.'" style="opacity:0;"></div>
								        						  <div class="smg_maincontainer">	
																		<img src="'.$q_r['skinOfCase'].'" class="smg_container_skinImage">
	 
					 													<div class="case_box" >
					
																		    <div id="case-name" class="fav_font">';

																			    if(strlen($q_r['case_name'])>10 )
																			    	echo substr($q_r['case_name'],0, 10).'..' ;
																			    else
																			    	echo $q_r['case_name'] ; 

																			    echo '</div>
																		  	<div id="case-price" class="fav_font">
																		  		<span style="color:#3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																  		<span style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">'.$q_r["case_price"].'</span>
																		  	</div>	
												 

											 							   <img src="case images/SMG Only.png" class="smg_pic">

																		    <svg  id="smg_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.167 2.333 496.833 476.833" enable-background="new 3.167 2.333 496.833 476.833" xml:space="preserve" style="fill: '.$q_r['case_color'].'; position: absolute; margin-left: 10%; margin-top:-14px; z-index: 1 ; mix-blend-mode: soft-light;" >

																			   <path d="M16.5,348.5L4.25,277c0,0-2-6,11.25-11.5l5.75-3c0,0,13-3.75,19.5-9.5l15.5-2.25l7.25-3.25l0.25-3.75L77,241
																					c0,0,5.667-1,6.667-7.167c0,0,18.167,0.167,16.833-8c0,0,16.167,0,14.5-6.333l21.5-9.667c0,0,15.834-4.5,31.667-2.667
																					c0,0-14.5-6.334-18-21.167l-3.667-1.833l-0.167-6.5l2.667-1.333l-0.833-13l-3.333-1.5l0.833-6.833l5.333-3l-0.667-10.667
																					c0,0-10.834-6.667-0.167-12.667l-1.167-9c0,0-10.167-8-1.167-14.167l-0.5-9.667c0,0-9.833-6.167-1.5-14.167L145,70.5l-7.333-8.667
																					l-0.5-8.333l3-0.5l-0.833-16.5L136,36.167l-0.833-8.667h3.333l-0.667-11.167c0,0,2.833-9.833,14.5-9.667l13.833,0.167L166,3
																					l29.667,0.333L198,8l40.167,1.333l1.667-4.5l8.833,0.833L250,9.5h12.667l1.666-4.5l8.5,0.667l1.834,5l36.999,1.833l0.5-4.167
																					l10.666-1l1.335,5.333l15.334,0.5l0.166-5.667l10.834,0.833L351.166,14l53.168,1.333l2.5-5.167l9.832,0.667H447L449.834,17
																					l27.5,1.167c0,0,24.666,2.833,18.833,28.667l3.833,1.5l-2.332,10.833l-4.667,0.5l-0.334,20.667l3.834,1.333L494.834,92
																					c0,0-25.666,14-6.833,27.667l-1.167,5.667c0,0-17.5,11.333-2.833,24l-1.667,7.5c0,0-16.834,6.5-1.5,20.5l-1,7
																					c0,0-17.667,8.5,0,24.667l-0.5,10l-3.5,0.833l-1.166,16.833l3.166,1.333l-1.833,9.333l-4.833,0.5c0,0-6.167,16.833-27.834,14.333
																					L443,264.333c0,0,22.499,7.666,19.334,15.333l2.5,3.167l-1,16L458.668,304l-3.167,35.833c0,0,2.665,19.5-8.167,25l-3.166,0.667
																					l-1.667,4.166L436.334,375l-1,7.833l-8.167,8l-1,8.167l-9.166,7.5l-0.167,8.666l-10.667,9.334l-1.833,19l-10.5,15.333l-3.167-0.5
																					l-5.833,10c0,0-5.832,14.834-36.166,7.667L27.334,356.166L16.5,348.5z"/>

																				
																				</svg>

													 
																			 <img src="images/case back.png" class="case_back">
																			

																	</div>
													
																</div> </li>';
								        				}
								        				elseif(strcmp($q_r["case_type"],'heavy')==0)
								        				{
								        					echo '<li class="user_profile_cases_list upcl'.$counting.'" id="'.substr($q_r['case_desc_table'],6).'" style="margin-top:40px;">
								        				
								        					<div class="lin-grad id_user_profile_case_default'.$counting.'" id="id_user_profile_case_default'.$counting.'" style="opacity:0;"></div>

								        						  <div class="heavy_maincontainer">	
																	<img src="'.$q_r['skinOfCase'].'" class="heavy_container_skinImage">
							 
											 						<div class="case_box" >

												  

																    <div id="case-name" class="fav_font">';

																	    if(strlen($q_r['case_name'])>10 )
																	    	echo substr($q_r['case_name'],0, 10).'..' ;
																	    else
																	    	echo $q_r['case_name'] ; 

																	    echo '</div>
																	  	<div id="case-price" class="fav_font">
																	  		<span style="color:#3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																  		<span style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">'.$q_r["case_price"].'</span>
																	  	</div>
												   	

																	    <img src="case images/Heavy only.png" class="heavy_pic">

																	    <svg  id="heavy_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="2.5 2.167 495 359.5" enable-background="new 2.5 2.167 495 359.5" xml:space="preserve" style="fill: '.$q_r['case_color'].'; position: absolute; margin-left: 1%; margin-top:-12px; z-index: 1; mix-blend-mode: soft-light;" >

																	    <path  d="M17,199.917c0,0-3-2.25-7.25-2.5L8,180.167l1.5-1.25L4.75,27.667l-1.5-1.25l0.5-17.75c0,0,3.75,3,7.75-1.75
																			L66,8.167c0,0,0.625-1.375,9.125-0.125l0.25-5.375l13.25,0.125c0,0-0.125,7.625,4,5h5.25l0.5,1.25l85.875,0.75l3.5-2.125h11.375
																			l3.75-0.625l4.25,2.75L308.082,12c0,0,3.085-3.917,8.418-0.833l1.166-0.833l-0.084-4.25l11.667-0.167v4.167
																			c0,0,1.25,1.834,2.583,0.917l4.25-0.25l1,1.083l44.25,0.25L381.166,181l-44.916,2.333L336.166,185l2.916,0.416l0.084,1.166
																			l-17.501,1.334v-1.5l-2.083-2L90.083,196.25l0.084,1.916l2.167,1.75l255.25-13.418l37.75-2.416l111.25,21.582l0.29,8.625l-1,1.375
																			l-2,82.75l0.75,0.25l-0.125,17l-18.125,3.75L475,318.542l-166.25,18.375l-10.75,1.75l-0.5-0.75l-193.375,20.25l-2.375,1.375
																			l-22.375,1.25l-6.125-4.875v-1.375l-20.75-18.75l-1.125-0.125l-3.375-3.5l-17.875-16.25l-1.75,0.375l-4.5-4.125l-0.125-17.5
																			l-4.125-90.25l52.875-3.25l-1.375-3.625L17,199.917z"/>

																		
																		</svg>

													 
																		 <img src="images/case back.png" class="case_back">
																		

																</div>
												
															</div></li>';
								        				}
								        				elseif(strcmp($q_r["case_type"],'sniper')==0)
								        				{
								        					echo '<li class="user_profile_cases_list upcl'.$counting.'" id="'.substr($q_r['case_desc_table'],6).'" style="margin-top:40px;">

								        					<div class="lin-grad id_user_profile_case_default'.$counting.'" id="id_user_profile_case_default'.$counting.'" style="opacity:0;"></div>
								        				
								        						  <div class="sniper_maincontainer">	
																	<img src="'.$q_r['skinOfCase'].'" class="sniper_container_skinImage" >
											 
											 						<div class="case_box" >

																		    <div id="case-name" class="fav_font" >';

																			    if(strlen($q_r['case_name'])>10 )
																			    	echo substr($q_r['case_name'],0, 10).'..' ;
																			    else
																			    	echo $q_r['case_name'] ; 

																			    echo '</div>
																		  	<div id="case-price" class="fav_font">
																		  		<span style="color:#3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																  		<span style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">'.$q_r["case_price"].'</span>
																		  	</div>
												   

																		    <img src="case images/Sniper Only.PNG" class="sniper_pic">

																		    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93%" height="92%" viewBox="2.375 1.625 488 263.875" enable-background="new 2.375 1.625 488 263.875" xml:space="preserve" style="fill: '.$q_r['case_color'].'; position: absolute; margin-left: 5%; margin-top:-14px; z-index: 1; mix-blend-mode: multiply;" >

																			  <path d="M24.5,224.167l-3.833-31.166l4-3.334c0,0,5-4.334,7.667-4l-3.167-2.833c0,0-7.333,4.166-14-3.167L10.5,173.5
																				l-1.375-16.75L11.25,154l-3.5-49.5c0,0-0.375-6.625-4-9.875l-1.125-15.5c0,0,0.625-8.5,10.125-9.375l10.125-1.375L24,65.125
																				c0,0,9.625-5.75,9.875,4.5l14.5-1.5L50.25,64.5l2.125-0.75c0,0,1.375-7.875,8.375-3.75l1.75,2.125l10-1.75c0,0,2.125,3.375,16,0.5
																				l47.25-7.625c0,0,0.5-3,7.75-3.75l12.25-1.5c0,0,0.75-6.75,7.125-4.625c0,0,4.5,1.125,3.625,5.625l10.625-1.5l2.375-3.625
																				l2.875-0.375L183,40.25c0,0,5.5-3.5,9,1.5l8.125-1.125c0,0,2.25,3.375,16.875,0.25l39.125-6.375c0,0,0.5-4,5.75-4l13.25-2
																				l1.75-3.625c0,0,4.25-3.125,8.375,1.125l1,3.625l7.875-1.5c0,0,2-4.25,5.5-3.75c0,0,0.25-8,8.625-3l1,1.25l5.75-1
																				c0,0,4.25,2.625,16,0l35.625-6c0,0,2-4.25,4.875-3.625l13.75-1.875l1.875-3.375c0,0,3-2.625,8.25,0.25l0.75,3.75l5.5-1l3-3.25
																				l2.875-0.25c0,0,1.625-7.125,9.625-3.25L418,4.875L427.875,7c0,0,6.25,2.375,4.875,9.375l-2.375,57.875l19.875,40.625L444,111.75
																				l-12.875-28.125L429.75,83.5L429.125,95c0,0-0.25,8.5-11,8.375l-2.5,2.75l-0.125,1.125l-19,3.375l-0.75-2.5l-3.25,3.5l-3.75,0.75
																				l-4.25-2.25l-72.875,14.5l-3.75,4.125l-3.125,0.875L302.125,128L302,129.875l-12.25,2.5L289,130c0,0-2.75,0.75-3.75,3.5
																				l-3.875,0.625l-3.375-2.5l-80.5,16.75c0,0-2.125,1.5-2.625,3.5l-5,1.375c0,0-1-1.875-2.5-1.75l-0.125,2.125l-13.75,2.5l-0.375-2.375
																				c0,0-1.875,0.5-3.25,3.5l-4.75,0.875l-3.375-2.75L71.5,174.5l-2.25,3.375L63.625,179l-2.375-2.375l-1.125,0.5L60.75,179l-15.625,3.5
																				v-2l-3.375,1.625l0.875,2l160.875-33.5l120.625-24.375l98.125-20.125c0,0,8.375-2.125,12.625,1.625l46.375,22.125l2.416,2.042
																				l6.584,3.917l0.082,5.917l-3.666,21.75c0,0-0.084,4.584-9.584,5.917l-8.5,1.5L464.25,172l-4.25-1.416h-2.085l-4.665,3.583
																				l-15.918,4.583c0,0-4.415,0.833-7.915-1.917c0,0-0.919-1.667-4.335-0.417L381.75,186.5c0,0-0.375,5.375-3.75,4.875
																				c0,0-14.375,4.875-20.25,4.25c0,0-3.063,2.313-7.125-0.25l-4.125,0.875l-0.375,1.813l-14,4.625l-2.313-0.125l-4.25-2.813L320.75,201
																				v1.625l-8.063,6.5l-38.25,9.813l-5.188-0.5l-6.25-4.875l-7.313,2.688l-0.875,3.313c0,0-1.688,2.125-5.188,2.25l-7.313,1.25H239
																				c0,0-4.438,2.375-6.688-0.188l-5.563,1.625l-1,1.625l-24.875,7.375l-2.375-0.625l-3.25-2.625l-2.875-0.25l-55.25,13.75
																				c0,0-0.125,6.25-4.75,6c0,0-17.875,5.625-23.125,4.75l-4.25,1.75l-3.625-1.75l-6.25,1.75l-0.875,2l-21,6.5c0,0-5.5,2.375-10.375-2
																				l-6.25-6.125l-1.375-1.75l-0.625-7.5l-14.5-14.625c0,0-1.5-1-3.25,0l-2.375,0.375C34.5,233.125,26.875,228.959,24.5,224.167z"/>

																				
																				</svg>

													 
																				 <img src="images/case back.png" class="case_back">
																				

																		</div>
														
																	</div></li>';
								        				}
								        				elseif(strcmp($q_r["case_type"],'knife')==0)
								        				{
								        					echo '<li class="user_profile_cases_list upcl'.$counting.'" id="'.substr($q_r['case_desc_table'],6).'" style="margin-top:30px;">
								        				
								        					<div class="lin-grad id_user_profile_case_default'.$counting.'" id="id_user_profile_case_default'.$counting.'" style="opacity:0;"></div>

								        						  <div class="knife_maincontainer">	
																	<img src="'.$q_r['skinOfCase'].'" class="knife_container_skinImage">
						 
											 						<div class="case_box" >

																		    <div id="case-name" class="fav_font">';

																		    if(strlen($q_r['case_name'])>10 )
																		    	echo substr($q_r['case_name'],0, 10).'..' ;
																		    else
																		    	echo $q_r['case_name'] ; 

																		    echo '</div>
																		  	<div id="case-price" class="fav_font">
																		  		<span style="color:#3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																  		<span style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">'.$q_r["case_price"].'</span>
																		  	</div>
																		  

																		    <img src="case images/Knife Only.png" class="knife_pic">

																		    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80%" height="67%" viewBox="2.084 1.333 492.584 363.25" enable-background="new 2.084 1.333 492.584 363.25" xml:space="preserve" style="fill: '.$q_r['case_color'].'; position: absolute; margin-left: 16%; margin-top:6%; z-index: 1; mix-blend-mode: soft-light;  -webkit-filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($q_r['case_color'] , '(' , ')').', 0.8)); filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($q_r['case_color'] , '(' , ')').', 0.9));" >

																				<path d="M451,160.001l18.5,2.5l18.5-4.5l6-151.5l-341-5l1.5,131.5l31.5,3.667v2.667l-30.333-2.333L10.333,156.334
																				L18,284.001l-15,6.666l0.667,10.334l30.667,5L42,303.667l8,0.666c6,4.666,92.333,23,92.333,23l10-1.666
																				c6.333,5.668,9.333,1.334,9.333,1.334C169,337.667,285,348.333,285,348.333c4.333-0.666,18,9.334,18,9.334l40,6.668l25.666-8.668
																				c3-6.666,18-9,18-9c19-1.332,24-8,24-8h5l2.334-3.332l9.332-0.668l18.334-11H456l19-6.666l3-3.334l0.665-9.332L466,299.667
																				l4.5-134.333l-40.5-3.833v-3.5L451,160.001z M388.5,157.985c-1.962-0.031-3.837-0.486-5.723-0.89
																				c-0.227,0.09-0.482,0.145-0.777,0.14c-6.689-0.09-13.312-1.159-20-1.25c-0.786-0.011-1.328-0.395-1.633-0.918
																				c-5.374-0.448-10.757-0.794-16.116-1.389c-14.604-1.621-29.379-1.842-43.932-3.766c-2.674-0.353-5.344-0.772-8.016-1.179
																				c-6.241,0.019-12.435-0.105-18.67-0.474c-3.743-0.221-7.503-0.5-11.01-1.836c-1.828-0.119-3.656-0.268-5.487-0.464
																				c-7.003-0.754-13.93-1.597-20.978-1.782c-5.787-0.152-11.552-0.34-17.188-1.763c-2.479-0.626-1.427-4.453,1.055-3.826
																				c6.992,1.765,14.146,1.39,21.283,1.793c6.518,0.368,12.978,1.401,19.478,1.972c0.406,0.036,15.487,0.475,21.813,1.154
																				c3.17,0.34,6.323,0.794,9.474,1.261c0.394-0.001,2.017,0.128,2.313,0.34c2.568,0.381,5.138,0.758,7.716,1.073
																				c7.593,0.925,15.242,1.105,22.869,1.617c7.086,0.476,14.092,1.469,21.158,2.099c7.645,0.68,15.302,1.42,22.947,2.03
																				c3.77,0.3,7.547,0.424,11.315,0.719c2.771,0.217,5.287,1.327,8.106,1.372C391.057,154.057,391.061,158.025,388.5,157.985z"/>
																												
																				</svg>

														 
																				 <img src="images/case back.png" class="case_back">
																				 
																		</div>
													
																	</div></li>';
								        				}
								        				elseif(strcmp($q_r["case_type"],'glove')==0)
								        				{
								        					echo '<li class="user_profile_cases_list upcl'.$counting.'" id="'.substr($q_r['case_desc_table'],6).'" style="margin-top:30px;">
								        				
								        					<div class="lin-grad id_user_profile_case_default'.$counting.'" id="id_user_profile_case_default'.$counting.'" style="opacity:0;"></div>

								        						  <div class="glove_maincontainer">	
																	<img src="'.$q_r['skinOfCase'].'" class="glove_container_skinImage">
												
																	 <div style="background-color: rgb('.get_string_between($q_r['case_color'] , '(' , ')').') ; opacity:0.6;  mix-blend-mode: soft-light; position: absolute; top:0px;right:0px; left:auto; width: 222px; height: 175px ;z-index:-100; ">
																	 </div>
	 						
											 						<div class="case_box" >

																		    <div id="case-name" class="fav_font">';

																			    if(strlen($q_r['case_name'])>10 )
																			    	echo substr($q_r['case_name'],0, 10).'..' ;
																			    else
																			    	echo $q_r['case_name'] ; 

																			    echo '</div>
																		  	<div id="case-price" class="fav_font" >
																		  		<span style="color:#3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																  		<span style="margin-left: -10px; display: inline; float: right; width: 80px ; text-align:left ;" class="fav_font">'.$q_r["case_price"].'</span>
																		  	</div>
												 
																		    <img src="case images/Gloves Only.png" class="glove_pic">

																		 	<img src="images/case back.png" class="case_back">

														
																			</div>

																	</div></li>';
								        				}

		
								        				
								        		 }

											}

											$con_userProfile->close() ;

										?>
									</ul>
									

								</div>

								
								<div id="case-info-container">
								
									<input type="hidden" name="dI" id="dI" value="">

								
									<div id="delCase" class="fav_font">
										<svg style="fill: #c0c0c0;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
										    <path fill="none" d="M0 0h24v24H0V0z"/>
										    <path  d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zm2.46-7.12l1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12zM15.5 4l-1-1h-5l-1 1H5v2h14V4z"/>
										    <path fill="none" d="M0 0h24v24H0z"/>
										</svg>
										<span>Delete Case</span>

									</div>	
																		
									<br />

								 	<div id="cic">
									<?php
										
										
									   		$db_userProfile = "user_profile_case_db" ;

									   		$server = "";
											$username = "";
											$password = "";

											


											

											$con_userProfile = new mysqli($server , $username , $password , $db_userProfile) ;
											$userid= $_SESSION['steamid'];
											$q_pc = $con_userProfile->query("SELECT * FROM User_Case_Table_".$userid."  WHERE case_stat= 'available'  ");    //initially display first available case

												
											if($q_pc->num_rows==0)
											{ 
												echo '<div class="no_case_list fav_font">You haven\'t created any Case</div>';
											}
											else
											{
												
										
												while($q_r = $q_pc->fetch_assoc()) 
												 { 
													$df=$q_r["case_desc_table"];
													break;
												}
											}

											$sql_profile_user = "SELECT * FROM sell_case_db.".$df." ";


											$result1 = $con_userProfile->query($sql_profile_user);

											if ($result1->num_rows > 0)
											{
												//$col_count=0 ;
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
																				echo "StatTrak";
																			  else
																			  	echo '';
																		echo '</span>
																	</div>
																	<div id="case_contain_div_lower_content">
																		<div id="case_contain_item_name">
																			
																			<div id="case_contain_weapon_name" class="fav_font">';
																			if (stripos($row1['weapon_name'], "StatTrak") !== false) 
																				echo substr($row1['weapon_name'], 10,-1);
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

																					$fr = $conn->query($finish_sql);

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
													
											} 
																				
											$con_userProfile ->close();

									?>
									</div>
									
								</div>
							</div>
						</div>

						<div id="hld-container"> <!-- div for items on hold-->
								
							<div class="cont_hld">

								<div class="hld_item_main_div">
								

									<?php
										
											$db_caseOpen = "userCaseOpenDb" ;
											$server = "";
											$username = "";
											$password = "";
											
											$b2 = 0 ; //means no empty

											$conn_hst = new mysqli($server, $username, $password, $db_caseOpen);
											// Check connection
											if ($conn_hst->connect_error) {
											    die("Connection failed: " . $conn_hst->connect_error);
											} 

										
											//item on hold - case delete , remaining skins  and winning skin
											$hold = "SELECT * FROM holdItem.holdItem_user_".$_SESSION['steamid']." ;  " ;
											$hold_result = $conn_hst->query($hold);

											if ($hold_result->num_rows > 0)
											{
												//output hold rows from db[now only delete]
												 while($row_hd = $hold_result->fetch_assoc()) 
												 {
												 	if($row_hd['flag']=="cd")
												 	{
											    		echo '
											    		<div class="hld-info-row">

															<div class="hld-top">
																
																<div style="width:20%; float:left; display:inline; padding:1%; margin-top:1%;  margin-right:1%; ">	

																	<!--container type-->
																	';
																	if($row_hd['ct']=="allInOne")
																	{ 	
																	 echo '<div class="allinone_container" style="width:180px; height:135px;">	
																		<img src="'.$row_hd['cskin'].'" class="allinone_container_skinImage">
																		<div class="case_box">
																			
																		  	<div id="case-price" class="fav_font">
																		  		<span style="color:#3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																		  		<span style="margin-left: -20px; display:inline ;float:right ;width:80px ; text-align:left ;" class="fav_font">'.$row_hd['cp'].'</span>
																		  	</div>
																		  
																		    <img src="case images/All In One.png" class="allinone_pic">

																		    <svg  id="allInOne_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="90%" height="87%" viewBox="0 7 500 390" enable-background="new 0 7 500 390" xml:space="preserve" style="fill:'.$row_hd['cc'].'; position: absolute; margin-left: 7%; margin-top:0.5px; z-index: 120; mix-blend-mode: soft-light;" >

																			<g id="Layer_2">
																			<path d="M6,218.667c0,0-4.333-14-0.667-15l-2-10c0,0-2-9.667,2.667-13c0,0,54-92,86.333-134l14.667-20c0,0,7.667-13,25.333-11.167
																				l4.167,3.333l31.667-2.167l6.167-4.333c0,0,13-1.833,16.833,3.333c0,0,3.667,6.333,10.667,9L236.5,18.5c0,0,10-4.25,14.75,3.25
																				c0,0,59-14.75,112.5-10c0,0,21.25-14.25,25.5-3l16.5,1l3.25-4l10.75,0.75c0,0,7.75,7.5,10.75,12.25l3.25,0.25l8.75,10.25l5.75,0.5
																				L456,42l-7.75,12.5c0,0,11,27.25-14,16.25l-9.5,10.5c0,0,0,27.5-14.5,15.75l-11.5,12.25c0,0-0.75,23.5-13.5,13.25l-12,13
																				c0,0-0.5,15.75-10.75,12l-10.25,12c0,0-5,17-13.75,8.75l-6.25,13.5c0,0-1.75,24.75-13.25,13.5c0,0-13,1.75-2.5,4.25l174.5,23
																				c0,0,13.5,2,6,15.75l-0.25,14.25l-4,2.25l-2,62.75c0,0-2.25,10.75-17,7.5L454,330c0,0-7.25,6.5-9,5.25l-21.75,11.25l-48-4
																				l-68.5,17.5l-1,9.5c0,0-1,8.75-15.25,9.75l-45,6c0,0-14.25-1.5-18.25,0.5L199,391.5c0,0-3.5,11.5-25.75,5
																				c0,0-113-41.75-138.25-54.25c0,0-13.25-4.25-13.5-14l-5.25-58.5L11.5,268L8,242l-3.5-2.25l-0.25-5.5l-2.5-7L6,218.667z"/>
																			</g>
																			</svg>

																			 
																			 <img src="images/case back.png" class="case_back">
																		</div>

																	</div>';
																	}
																	if($row_hd['ct']=="rifle")
																	{ 	
																		echo '
																			<div class="rifle_maincontainer" style="width:180px; height:135px;">	
																				<img src="'.$row_hd['cskin'].'" class="rifle_container_skinImage">

																				<div class="case_box" >

																					<div id="case-price" class="fav_font" >
																						<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																						<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;" class="fav_font">'.$row_hd['cp'].'</span>
																					</div>

																					   
																					<img src="case images/Rifle Only.png" class="rifle_pic">

																					    <svg  id="rifle_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="1.5 1.5 497.333 302.167" enable-background="new 1.5 1.5 497.333 302.167" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 1%; z-index: 1; mix-blend-mode: soft-light;" >

																						<path d="M496.625,133.876c3.625-7.75,1.375-19.125,1.375-19.125l-22.375-1.75l2.25-27.375l5.625-4.75l1-15.375
																							L473,52.126c-2.625-6.5-12.875-5.25-12.875-5.25l-5.25-6.125l-2.25,0.25c-1.375-5-6.25-1-6.25-1l-3-0.5l-0.5-21.625
																							c-14.125-2.375-17.75,0-17.75,0l-1.75,4.25L423,25.751l1.375,0.125l-1.125,15.875l-2-2.75l-7.375-0.25l-2-2.125h-3.5l-7.375,6.5
																							l-49.5-3.125c-1.75-3.625-8.25-8.5-8.25-8.5l-2.875,2.375l-3-0.125l0.25-21l-16-0.5l-2.875,4l0.125,3.5l1.375,0.125l-0.875,15h-1.25
																							l-2.625-2.25l-11.25-0.5l-2.875,1.5l-60.125-2.75l-4-2.625l-5.625-0.25L231,7.251l-15.375-0.75l-2.75,3.875l-0.25,4.375L214,14.876
																							l0.5,14.25l-1.625,0.375l-1.75-2.375l-7.375-0.625l-3.25-2.375l-7.5,6.875l-42.75-2.625l-7.75-7.625l-2.625,2.25l-1.375-0.875
																							l-1.625-19.5L123,2.001l-3.25,4.25l0.375,3.375l2.125,0.375l0.25,13.75l-1.625,0.625c-0.625-3.25-7.875-3-7.875-3
																							c-2.75-5.25-4.75-0.625-4.75-0.625l-1.75-0.375l-4.625,5.375l-2.375-0.5c-4.875-0.375-6.375,2-6.375,2L81.25,38.376l-1.125,17.875
																							L82,59.001l-1.875,22.875L63.5,81.001l-0.625,16.25l15.625,1.5l-1.25,22.125l-3.125,3.875l-1,18l6.75,9
																							c3.625,6,8.375,5.625,8.375,5.625l8.875,0.75l-0.75,0.875l-6.75,0.5l-0.375,1.75c-8.625-2.625-15-0.625-15-0.625l-5.75,1.75
																							l-6.25,0.25l-21.375,9.75v1.125l-8.125,4l-2.375-0.75l-13.25,6.125H13.25l-11.125,4.75l0.5,4.625L8,197.501
																							c4.625,4.375,6.75,46.5,6.75,46.5c1.25,6.375,7,6.25,7,6.25L401,302.834c8.666,1.5,10.666-3.666,10.666-3.666
																							c5,5.334,12.334,4.166,12.334,4.166c17.834-4.334,6.666-21.499,6.666-21.499L442,269.668c4.5,5,12.332,3.667,12.332,3.667
																							c14.5-6.833,5.293-19.709,5.293-19.709l2.125-37.125l5-4.125l-0.125-5.375l-10.125-5.375c0.375-3-10.875-3.125-10.875-3.125
																							l-0.75-2.125l-5.5-1l-0.375-0.75l8.375,0.625C454,197.001,459,193.876,459,193.876l16.125-14.25l0.75-14l-4.25-5.5l2.75-27.25
																							L496.625,133.876z M187.239,168.745c-0.943-0.384-1.933-0.386-2.928-0.451c-0.063,0.37-0.326,0.699-0.811,0.699
																							c-0.853,0-1.705-0.013-2.554-0.101c-0.177,0.5-0.616,0.877-1.321,0.826c-7.55-0.544-15.066-1.595-22.597-2.137
																							c-6.164-0.443-12.363-1.753-18.528-1.738c-1.285,0.004-1.695-1.346-1.236-2.216c-1.285-0.075-2.601-0.694-3.877-0.383
																							c-0.642,0.157-0.914-0.831-0.271-0.987c1.454-0.355,2.816,0.309,4.261,0.357c0.289,0.009,0.443,0.213,0.479,0.436
																							c0.184-0.088,0.397-0.142,0.646-0.142c6.697-0.017,13.541,1.261,20.208,1.899c6.985,0.668,13.907,1.471,20.917,1.976
																							c0.372,0.026,0.667,0.167,0.893,0.368c0.037-0.002,0.07-0.021,0.107-0.017c0.954,0.125,1.915,0.125,2.875,0.125
																							c0.048,0,0.082,0.021,0.125,0.025c0.068-0.034,0.148-0.056,0.25-0.045c1.229,0.118,2.471,0.045,3.636,0.518
																							C188.115,168.002,187.851,168.993,187.239,168.745z M291.366,179.943c-1.805-0.887-4.007-0.922-6.002-0.928
																							c0.254,1.021-0.276,2.213-1.614,2.11c-10.723-0.828-21.424-1.931-32.131-2.933c-4.657-0.437-9.417-1.35-14.084-1.519
																							c-2.293-0.083-4.974,0.122-6.918-1.289c-0.597-0.433-0.801-1.051-0.747-1.64c-0.237-0.121-0.367-0.352-0.406-0.602
																							c-1.123,0.023-2.276,0.084-3.352-0.275c-0.622-0.208-0.354-1.197,0.272-0.987c1.115,0.373,2.332,0.239,3.489,0.232
																							c0.104,0,0.186,0.03,0.256,0.073c0.042-0.004,0.073-0.023,0.119-0.023c0.177,0,0.313,0.057,0.434,0.131
																							c0.466-0.32,1.075-0.383,1.699,0.07c2.109,1.529,9.254,1.352,11.657,1.598c4.416,0.452,8.837,0.842,13.257,1.251
																							c8.815,0.817,17.624,1.729,26.453,2.412c0.423,0.033,0.766,0.185,1.028,0.409c0.063-0.029,0.137-0.046,0.222-0.046
																							c2.277,0.008,4.798,0.045,6.884,1.069C292.476,179.352,291.957,180.232,291.366,179.943z M396.116,190.857
																							c-2.231-0.654-4.573-0.332-6.869-0.25c0.009,0.959-0.747,1.92-1.915,1.533c-2.818-0.938-5.773-0.826-8.707-0.82
																							c-0.273,0-0.508-0.06-0.706-0.157c-7.078-1.165-14.021-1.103-21.134-1.912c-3.365-0.383-6.767-1.417-10.16-1.431
																							c-2.558-0.008-4.866,0.248-7.293-0.68c-0.734-0.281-1.051-0.92-1.055-1.55c-0.314-0.041-0.61-0.131-0.882-0.36
																							c-0.082-0.068-0.12-0.157-0.136-0.252c-0.521-0.117-0.486-0.977,0.114-0.977h1.375c0.068,0,0.132,0.016,0.188,0.04
																							c0.104-0.017,0.206-0.034,0.313-0.04c0.063-0.003,0.114,0.008,0.166,0.023c0.226-0.036,0.475-0.018,0.751,0.088
																							c2.962,1.134,6.641,0.525,9.808,0.935c3.449,0.445,6.854,1.241,10.338,1.408c6.429,0.308,12.419,0.64,18.748,1.724
																							c3.063-0.011,6.169-0.043,9.106,0.934c0.324,0.107,0.564,0.289,0.739,0.505c2.497-0.058,5.038-0.44,7.477,0.276
																							C397,190.076,396.737,191.041,396.116,190.857z"/>
																						</svg>

																						 
																						 <img src="images/case back.png" class="case_back">
																				</div>

																			</div>
																																					';
																	}
																	if($row_hd['ct']=="smg")
																	{ 	
																		echo '
																			<div class="smg_maincontainer" style="width:180px; height:135px;">	
																				<img src="'.$row_hd['cskin'].'" class="smg_container_skinImage">

																				<div class="case_box" >
																			 
																			  	<div id="case-price" class="fav_font">
																			  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																			  		<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																			  	</div>

																			 
																			    <img src="case images/SMG Only.png" class="smg_pic" style="width:73.5%;margin-left:22%;margin-top:-5%;">

																			    <svg  id="smg_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.167 2.333 496.833 476.833" enable-background="new 3.167 2.333 496.833 476.833" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 9%; margin-top:-8px; z-index: 1; mix-blend-mode: soft-light;" >

																			   <path d="M16.5,348.5L4.25,277c0,0-2-6,11.25-11.5l5.75-3c0,0,13-3.75,19.5-9.5l15.5-2.25l7.25-3.25l0.25-3.75L77,241
																					c0,0,5.667-1,6.667-7.167c0,0,18.167,0.167,16.833-8c0,0,16.167,0,14.5-6.333l21.5-9.667c0,0,15.834-4.5,31.667-2.667
																					c0,0-14.5-6.334-18-21.167l-3.667-1.833l-0.167-6.5l2.667-1.333l-0.833-13l-3.333-1.5l0.833-6.833l5.333-3l-0.667-10.667
																					c0,0-10.834-6.667-0.167-12.667l-1.167-9c0,0-10.167-8-1.167-14.167l-0.5-9.667c0,0-9.833-6.167-1.5-14.167L145,70.5l-7.333-8.667
																					l-0.5-8.333l3-0.5l-0.833-16.5L136,36.167l-0.833-8.667h3.333l-0.667-11.167c0,0,2.833-9.833,14.5-9.667l13.833,0.167L166,3
																					l29.667,0.333L198,8l40.167,1.333l1.667-4.5l8.833,0.833L250,9.5h12.667l1.666-4.5l8.5,0.667l1.834,5l36.999,1.833l0.5-4.167
																					l10.666-1l1.335,5.333l15.334,0.5l0.166-5.667l10.834,0.833L351.166,14l53.168,1.333l2.5-5.167l9.832,0.667H447L449.834,17
																					l27.5,1.167c0,0,24.666,2.833,18.833,28.667l3.833,1.5l-2.332,10.833l-4.667,0.5l-0.334,20.667l3.834,1.333L494.834,92
																					c0,0-25.666,14-6.833,27.667l-1.167,5.667c0,0-17.5,11.333-2.833,24l-1.667,7.5c0,0-16.834,6.5-1.5,20.5l-1,7
																					c0,0-17.667,8.5,0,24.667l-0.5,10l-3.5,0.833l-1.166,16.833l3.166,1.333l-1.833,9.333l-4.833,0.5c0,0-6.167,16.833-27.834,14.333
																					L443,264.333c0,0,22.499,7.666,19.334,15.333l2.5,3.167l-1,16L458.668,304l-3.167,35.833c0,0,2.665,19.5-8.167,25l-3.166,0.667
																					l-1.667,4.166L436.334,375l-1,7.833l-8.167,8l-1,8.167l-9.166,7.5l-0.167,8.666l-10.667,9.334l-1.833,19l-10.5,15.333l-3.167-0.5
																					l-5.833,10c0,0-5.832,14.834-36.166,7.667L27.334,356.166L16.5,348.5z"/>


																				</svg>
																				 <img src="images/case back.png" class="case_back">
																				</div>
																			</div>
																		';
																	}
																	if($row_hd['ct']=="pistol")
																	{ 	
																		echo '
																			<div class="pistol_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="pistol_container_skinImage">

																			<div class="case_box" >
																				  
																				<div id="case-price" class="fav_font">
																					<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																					<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																				</div>



																				<img src="case images/Pistol Only.png" class="pistol_pic">

																				<svg  id="pistol_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.334 4.833 449.667 492.667" enable-background="new 3.334 4.833 449.667 492.667" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 15%; margin-top:-8px; z-index: 1; mix-blend-mode: soft-light;" >

																				<path d="M450.75,382.25l-4.75-1.5l-38.5-87c8.25-16-27.5-17-27.5-17c-1.5-6-5-7.25-5-7.25l-0.5-2.5l5.75,0.5l3,1.5
																					c22.5-6.75,20.75-26.75,20.75-26.75l-2.25-2.75l5-174l3.25-3c2.5-13.5-9.75-24.75-9.75-24.75l-3-14.75l-27.75-0.75l-5.25,5l-0.5,7.5
																					h-2.5v-16.5L362.5,12l-2.5-0.25l0.75-5L358.5,6l-27.75,1l-0.5,6.25l1.5,0.5l-0.25,9l-3.5,1l-0.5,10.75l-188,0.5l-3-1l-1.5-9.5l-2-2
																					l-0.75-10.25L134,10.5l-1.25-2.75c-14-5.75-27.5,1-27.5,1l-0.5,2.25L102,15.75l2.75,3.5l-1.5,15.25l-2.75,0.25l-0.25-7.25l-4.5-4.75
																					L73,23.5h-6.25L63.25,38c-10,12.5-9.5,23-9.5,23l3.75,3.5l3.75,174L58.5,241C58.25,263.5,79,268,79,268l3.125-1.875l6,0.5L83,272.25
																					l-0.375,2.125c-30.25,3-29.375,13.125-29.375,13.125l0.75,4.25L10.75,378c-4-0.25-5.75,4.25-5.75,4.25
																					c-1.75,12.5,5.5,19.25,5.5,19.25l-0.5,5l2,4.25L24.25,412l9.5,46.75c2.5,14.5,19.75,16,19.75,16c5.25,5.25,8.25,0.25,8.25,0.25H113
																					l2,1.75l43.25,17.5c18.5,5,141,1.25,141,1.25l42-18.5l53.25,0.25c5.25,6,7.75-0.25,7.75-0.25c16.5,0.25,21-13.25,21-13.25l9-49.75
																					H442c3.75-0.5,4-8.25,4-8.25C456,392,450.75,382.25,450.75,382.25z M287.433,269.186c0.074,0.362-2.907,3.961-3.07,4.186
																					c-0.749,1.023-1.553,1.74-2.861,1.843c-0.43,0.033-1.135-0.347-1.25-0.347h-93.956c-2.282,0.566-4.824,1.566-6.787,0.359
																					c-1.888-1.16-3.496-5.261-3.56-5.5c-1.778-0.49-1.775-3.322,0.303-3.266c1.169,0.031,2.307,0.266,3.442,0.5h2.558
																					c0.325,0,0.593,0.081,0.818,0.207c0.143-0.014,0.28-0.034,0.432-0.034h96.75c0.12,0,0.223,0.024,0.337,0.033
																					c0.014-0.001,0.023-0.005,0.038-0.005c2.449-0.057,4.879-0.868,7.321-0.332C289.431,267.154,288.861,269.361,287.433,269.186z"/>
																													</svg>

																				 
																				 <img src="images/case back.png" class="case_back">
																				

																			</div>
																		</div>
																		';
																	}
																	if($row_hd['ct']=="sniper")
																	{ 	
																		echo '
																			<div class="sniper_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="sniper_container_skinImage" >

																			<div class="case_box" >

																				 
																			  	<div id="case-price" class="fav_font">
																			  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																			  		<span style="margin-left: -20px;display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																			  	</div>

																			   
																			    <img src="case images/Sniper Only.PNG" class="sniper_pic">

																			    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93%" height="92%" viewBox="2.375 1.625 488 263.875" enable-background="new 2.375 1.625 488 263.875" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 5%; margin-top:-10px; z-index: 1; mix-blend-mode: multiply;" >

																			  <path d="M24.5,224.167l-3.833-31.166l4-3.334c0,0,5-4.334,7.667-4l-3.167-2.833c0,0-7.333,4.166-14-3.167L10.5,173.5
																				l-1.375-16.75L11.25,154l-3.5-49.5c0,0-0.375-6.625-4-9.875l-1.125-15.5c0,0,0.625-8.5,10.125-9.375l10.125-1.375L24,65.125
																				c0,0,9.625-5.75,9.875,4.5l14.5-1.5L50.25,64.5l2.125-0.75c0,0,1.375-7.875,8.375-3.75l1.75,2.125l10-1.75c0,0,2.125,3.375,16,0.5
																				l47.25-7.625c0,0,0.5-3,7.75-3.75l12.25-1.5c0,0,0.75-6.75,7.125-4.625c0,0,4.5,1.125,3.625,5.625l10.625-1.5l2.375-3.625
																				l2.875-0.375L183,40.25c0,0,5.5-3.5,9,1.5l8.125-1.125c0,0,2.25,3.375,16.875,0.25l39.125-6.375c0,0,0.5-4,5.75-4l13.25-2
																				l1.75-3.625c0,0,4.25-3.125,8.375,1.125l1,3.625l7.875-1.5c0,0,2-4.25,5.5-3.75c0,0,0.25-8,8.625-3l1,1.25l5.75-1
																				c0,0,4.25,2.625,16,0l35.625-6c0,0,2-4.25,4.875-3.625l13.75-1.875l1.875-3.375c0,0,3-2.625,8.25,0.25l0.75,3.75l5.5-1l3-3.25
																				l2.875-0.25c0,0,1.625-7.125,9.625-3.25L418,4.875L427.875,7c0,0,6.25,2.375,4.875,9.375l-2.375,57.875l19.875,40.625L444,111.75
																				l-12.875-28.125L429.75,83.5L429.125,95c0,0-0.25,8.5-11,8.375l-2.5,2.75l-0.125,1.125l-19,3.375l-0.75-2.5l-3.25,3.5l-3.75,0.75
																				l-4.25-2.25l-72.875,14.5l-3.75,4.125l-3.125,0.875L302.125,128L302,129.875l-12.25,2.5L289,130c0,0-2.75,0.75-3.75,3.5
																				l-3.875,0.625l-3.375-2.5l-80.5,16.75c0,0-2.125,1.5-2.625,3.5l-5,1.375c0,0-1-1.875-2.5-1.75l-0.125,2.125l-13.75,2.5l-0.375-2.375
																				c0,0-1.875,0.5-3.25,3.5l-4.75,0.875l-3.375-2.75L71.5,174.5l-2.25,3.375L63.625,179l-2.375-2.375l-1.125,0.5L60.75,179l-15.625,3.5
																				v-2l-3.375,1.625l0.875,2l160.875-33.5l120.625-24.375l98.125-20.125c0,0,8.375-2.125,12.625,1.625l46.375,22.125l2.416,2.042
																				l6.584,3.917l0.082,5.917l-3.666,21.75c0,0-0.084,4.584-9.584,5.917l-8.5,1.5L464.25,172l-4.25-1.416h-2.085l-4.665,3.583
																				l-15.918,4.583c0,0-4.415,0.833-7.915-1.917c0,0-0.919-1.667-4.335-0.417L381.75,186.5c0,0-0.375,5.375-3.75,4.875
																				c0,0-14.375,4.875-20.25,4.25c0,0-3.063,2.313-7.125-0.25l-4.125,0.875l-0.375,1.813l-14,4.625l-2.313-0.125l-4.25-2.813L320.75,201
																				v1.625l-8.063,6.5l-38.25,9.813l-5.188-0.5l-6.25-4.875l-7.313,2.688l-0.875,3.313c0,0-1.688,2.125-5.188,2.25l-7.313,1.25H239
																				c0,0-4.438,2.375-6.688-0.188l-5.563,1.625l-1,1.625l-24.875,7.375l-2.375-0.625l-3.25-2.625l-2.875-0.25l-55.25,13.75
																				c0,0-0.125,6.25-4.75,6c0,0-17.875,5.625-23.125,4.75l-4.25,1.75l-3.625-1.75l-6.25,1.75l-0.875,2l-21,6.5c0,0-5.5,2.375-10.375-2
																				l-6.25-6.125l-1.375-1.75l-0.625-7.5l-14.5-14.625c0,0-1.5-1-3.25,0l-2.375,0.375C34.5,233.125,26.875,228.959,24.5,224.167z"/>

																				
																				</svg>

																				 
																				 <img src="images/case back.png" class="case_back">

																			</div>

																			</div>
																		';

																	}
																	if($row_hd['ct']=="heavy")
																	{ 	
																		echo '
																			<div class="heavy_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="heavy_container_skinImage">

																			<div class="case_box" >

																			  	<div id="case-price" class="fav_font">
																			  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																			  		<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																			  	</div>
																			   

																			    <img src="case images/Heavy only.png" class="heavy_pic">

																			    <svg  id="heavy_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="2.5 2.167 495 359.5" enable-background="new 2.5 2.167 495 359.5" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 1%; margin-top:-8px; z-index: 1; mix-blend-mode: soft-light;" >

																			    <path  d="M17,199.917c0,0-3-2.25-7.25-2.5L8,180.167l1.5-1.25L4.75,27.667l-1.5-1.25l0.5-17.75c0,0,3.75,3,7.75-1.75
																					L66,8.167c0,0,0.625-1.375,9.125-0.125l0.25-5.375l13.25,0.125c0,0-0.125,7.625,4,5h5.25l0.5,1.25l85.875,0.75l3.5-2.125h11.375
																					l3.75-0.625l4.25,2.75L308.082,12c0,0,3.085-3.917,8.418-0.833l1.166-0.833l-0.084-4.25l11.667-0.167v4.167
																					c0,0,1.25,1.834,2.583,0.917l4.25-0.25l1,1.083l44.25,0.25L381.166,181l-44.916,2.333L336.166,185l2.916,0.416l0.084,1.166
																					l-17.501,1.334v-1.5l-2.083-2L90.083,196.25l0.084,1.916l2.167,1.75l255.25-13.418l37.75-2.416l111.25,21.582l0.29,8.625l-1,1.375
																					l-2,82.75l0.75,0.25l-0.125,17l-18.125,3.75L475,318.542l-166.25,18.375l-10.75,1.75l-0.5-0.75l-193.375,20.25l-2.375,1.375
																					l-22.375,1.25l-6.125-4.875v-1.375l-20.75-18.75l-1.125-0.125l-3.375-3.5l-17.875-16.25l-1.75,0.375l-4.5-4.125l-0.125-17.5
																					l-4.125-90.25l52.875-3.25l-1.375-3.625L17,199.917z"/>

																			
																				</svg>

																				 
																				 <img src="images/case back.png" class="case_back">
																				
																			</div>

																		</div>
																		';
																	}
																	if($row_hd['ct']=="knife")
																	{ 	
																		echo '
																			<div class="knife_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="knife_container_skinImage">

																			<div class="case_box" >

																				  	<div id="case-price" class="fav_font">
																				  		<span style="color: #3add08;margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																				  		<span style="margin-left: -20px;display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																				  	</div>
																				   
																				    <img src="case images/Knife Only.png" class="knife_pic">

																				    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80%" height="67%" viewBox="2.084 1.333 492.584 363.25" enable-background="new 2.084 1.333 492.584 363.25" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 16%; margin-top:6%; z-index: 1; mix-blend-mode: soft-light;  -webkit-filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row_hd['cc'] , '(' , ')').', 0.8)); filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row_hd['cc'] , '(' , ')').', 0.8));" >

																					<path d="M451,160.001l18.5,2.5l18.5-4.5l6-151.5l-341-5l1.5,131.5l31.5,3.667v2.667l-30.333-2.333L10.333,156.334
																					L18,284.001l-15,6.666l0.667,10.334l30.667,5L42,303.667l8,0.666c6,4.666,92.333,23,92.333,23l10-1.666
																					c6.333,5.668,9.333,1.334,9.333,1.334C169,337.667,285,348.333,285,348.333c4.333-0.666,18,9.334,18,9.334l40,6.668l25.666-8.668
																					c3-6.666,18-9,18-9c19-1.332,24-8,24-8h5l2.334-3.332l9.332-0.668l18.334-11H456l19-6.666l3-3.334l0.665-9.332L466,299.667
																					l4.5-134.333l-40.5-3.833v-3.5L451,160.001z M388.5,157.985c-1.962-0.031-3.837-0.486-5.723-0.89
																					c-0.227,0.09-0.482,0.145-0.777,0.14c-6.689-0.09-13.312-1.159-20-1.25c-0.786-0.011-1.328-0.395-1.633-0.918
																					c-5.374-0.448-10.757-0.794-16.116-1.389c-14.604-1.621-29.379-1.842-43.932-3.766c-2.674-0.353-5.344-0.772-8.016-1.179
																					c-6.241,0.019-12.435-0.105-18.67-0.474c-3.743-0.221-7.503-0.5-11.01-1.836c-1.828-0.119-3.656-0.268-5.487-0.464
																					c-7.003-0.754-13.93-1.597-20.978-1.782c-5.787-0.152-11.552-0.34-17.188-1.763c-2.479-0.626-1.427-4.453,1.055-3.826
																					c6.992,1.765,14.146,1.39,21.283,1.793c6.518,0.368,12.978,1.401,19.478,1.972c0.406,0.036,15.487,0.475,21.813,1.154
																					c3.17,0.34,6.323,0.794,9.474,1.261c0.394-0.001,2.017,0.128,2.313,0.34c2.568,0.381,5.138,0.758,7.716,1.073
																					c7.593,0.925,15.242,1.105,22.869,1.617c7.086,0.476,14.092,1.469,21.158,2.099c7.645,0.68,15.302,1.42,22.947,2.03
																					c3.77,0.3,7.547,0.424,11.315,0.719c2.771,0.217,5.287,1.327,8.106,1.372C391.057,154.057,391.061,158.025,388.5,157.985z"/>
																												
																					</svg>

																					 
																					 <img src="images/case back.png" class="case_back">

																			</div>

																		</div>
																		';
																	}
																	if($row_hd['ct']=="glove")
																	{ 	
																		echo '
																			<div class="glove_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="glove_container_skinImage">
																				
																			 <div style="background-color: rgb('.get_string_between($row_hd['cc'] , '(' , ')').') ; opacity:0.6;  mix-blend-mode: soft-light; position: absolute; top:0px;right:0px; left:auto; width: 170px; height: 132px ;z-index:-100; ">
																			 </div>

																			<div class="case_box" >

																				  
																				  	<div id="case-price" class="fav_font" >
																				  		<span style="color: #3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																				  		<span style="margin-left: -20px;display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																				  	</div>

																				    <img src="case images/Gloves Only.png" class="glove_pic">

																				 	<img src="images/case back.png" class="case_back">


																				</div>

																		</div>
																		';
																	}
																echo '
																	<!--container type ends here-->
																
																</div>
																<div class="desc_item_hld">
																	<div class="fav_font">
																		<div class="top_desc_item_hld" style="font-weight:600; margin-bottom:3%;">
																			'.$row_hd['cn'].' Case 	
																		</div>
																		<div  style="font-weight:400; overflow:hidden ;font-size:14px; width:100%; height:auto; color: #9d9d9d;">
																			 Case Deleted 	
																		</div>
																		<div class="bottom_desc_item_hld" style="color:#9d9d9d; font-size:14px; letter-spacing:1px;">
																			
																			Case contains following skins :';

																			$cdt = "SELECT * FROM sell_case_db.".$row_hd['cdt']." ;  ";

																			$cdt_r= $conn_hst->query($cdt);

																			if($cdt_r->num_rows >0)
																			{
																				echo '<ul style="display:flex; flex-wrap:wrap ; width:100%;height:auto;padding-bottom:10px; margin-top:10px;">';
																				 while($cdt_row = $cdt_r->fetch_assoc()) 
												 								{
												 									echo '<li style="text-align:center; padding:3px 3px 3px 3px; margin-right:7px; margin-bottom:7px;background-color:grey;">';
												 									echo '<img style="width:60px; height:auto;" src="'.$cdt_row["case_item_image"].'">';
												 									echo '</li>';
												 								}
																				echo '</ul>';

																			}
																			else
																			{
																				echo '-' ;
																			}


																		echo '</div>	
																	</div>
																</div>
																<div class="time_item_hld">
																	<div class="fav_font">
																		<div class="time_elapse">
																			';
																			$sct=0;
																		
																			$tlft = "SELECT timestamp FROM Csgoviral_MBR.MBR_sell_case WHERE sell_case_id = ".$row_hd['cid'] ." " ;

																			$rs_lft = $conn_hst->query($tlft);

																			if ($rs_lft->num_rows > 0) {
							    
																			    $rw = $rs_lft->fetch_assoc();
																			    $sct= reset($rw) ;
																				
																				date_default_timezone_set('UTC');
																			    
																			    $sd=date_create($sct); //sell case date
 
 																				date_add($sd,date_interval_create_from_date_string("8 days"));//7day after date when trade ban will remove
 
																			    $cd = new DateTime();  //buy case date gmt
																			    


																			    if($cd < $sd) //means the trade ban is still vaid
																			    {


																			    	
																					$timer=date_diff($cd,$sd);

																					
																						echo "<p style='color:#d33937 ; font-size:16px; '>" ;
																			    	
																						echo "Tradeable After " ;
																						echo date_format($sd,"F d , Y ( H:i:s ) ");
																						echo " GMT" ;
																						echo "<br />" ;
																					
																						echo "<p style='font-size:14px; color:#d33937 ; margin-top:10px;'>" ;
																						echo "Time Left : " ;
																						
																						echo $timer->format("%D day %H hours %I minutes %S seconds");

																						echo "</p>" ;
													
																						echo "</p>";

																					
																			    } 
																			  
																			    else
																			    {
																			    	echo "<p style=' text-decoration:underline ; cursor:pointer ; color:green; letter-spacing:2px;  width:40%; margin-left:20%; margin-right:30%;'>" ;
																			    	echo "<a href='intermediate/withdraw.php?withdraw=".str_replace('_','',strrchr($row_hd["cdt"],'_'))."'>Withdraw </a>" ;
																			    	echo "</p>" ;
																			    }
																			
																				
																			} 
																			else { //this means the case opened is not present in MBR Case
																			    echo "";
																			}

																		echo '</div>
																	</div>
																</div>
																
															</div>
															<div class="small-line-light" style="width: 90%; bottom: 0; "></div>
														</div>	';
													}
													else if($row_hd['flag']=="cs")
													{
														echo '
											    		<div class="hld-info-row">

															<div class="hld-top">
																
																<div style="width:20%; float:left; display:inline; padding:1%; margin-top:1%;  margin-right:1%; ">	
														
																<!--case container-->';
																
																if($row_hd['ct']=="allInOne")
																	{ 	
																	 echo '<div class="allinone_container" style="width:180px; height:135px;">	
																		<img src="'.$row_hd['cskin'].'" class="allinone_container_skinImage">
																		<div class="case_box">
																			
																		  	<div id="case-price" class="fav_font">
																		  		<span style="color:#3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																		  		<span style="margin-left: -20px; display:inline ;float:right ;width:80px ; text-align:left ;" class="fav_font">'.$row_hd['cp'].'</span>
																		  	</div>
																		  
																		    <img src="case images/All In One.png" class="allinone_pic">

																		    <svg  id="allInOne_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="90%" height="87%" viewBox="0 7 500 390" enable-background="new 0 7 500 390" xml:space="preserve" style="fill:'.$row_hd['cc'].'; position: absolute; margin-left: 7%; margin-top:0.5px; z-index: 120; mix-blend-mode: soft-light;" >

																			<g id="Layer_2">
																			<path d="M6,218.667c0,0-4.333-14-0.667-15l-2-10c0,0-2-9.667,2.667-13c0,0,54-92,86.333-134l14.667-20c0,0,7.667-13,25.333-11.167
																				l4.167,3.333l31.667-2.167l6.167-4.333c0,0,13-1.833,16.833,3.333c0,0,3.667,6.333,10.667,9L236.5,18.5c0,0,10-4.25,14.75,3.25
																				c0,0,59-14.75,112.5-10c0,0,21.25-14.25,25.5-3l16.5,1l3.25-4l10.75,0.75c0,0,7.75,7.5,10.75,12.25l3.25,0.25l8.75,10.25l5.75,0.5
																				L456,42l-7.75,12.5c0,0,11,27.25-14,16.25l-9.5,10.5c0,0,0,27.5-14.5,15.75l-11.5,12.25c0,0-0.75,23.5-13.5,13.25l-12,13
																				c0,0-0.5,15.75-10.75,12l-10.25,12c0,0-5,17-13.75,8.75l-6.25,13.5c0,0-1.75,24.75-13.25,13.5c0,0-13,1.75-2.5,4.25l174.5,23
																				c0,0,13.5,2,6,15.75l-0.25,14.25l-4,2.25l-2,62.75c0,0-2.25,10.75-17,7.5L454,330c0,0-7.25,6.5-9,5.25l-21.75,11.25l-48-4
																				l-68.5,17.5l-1,9.5c0,0-1,8.75-15.25,9.75l-45,6c0,0-14.25-1.5-18.25,0.5L199,391.5c0,0-3.5,11.5-25.75,5
																				c0,0-113-41.75-138.25-54.25c0,0-13.25-4.25-13.5-14l-5.25-58.5L11.5,268L8,242l-3.5-2.25l-0.25-5.5l-2.5-7L6,218.667z"/>
																			</g>
																			</svg>

																			 
																			 <img src="images/case back.png" class="case_back">
																		</div>

																	</div>';
																	}
																	if($row_hd['ct']=="rifle")
																	{ 	
																		echo '
																			<div class="rifle_maincontainer" style="width:180px; height:135px;">	
																				<img src="'.$row_hd['cskin'].'" class="rifle_container_skinImage">

																				<div class="case_box" >

																					<div id="case-price" class="fav_font" >
																						<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																						<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;" class="fav_font">'.$row_hd['cp'].'</span>
																					</div>

																					   
																					<img src="case images/Rifle Only.png" class="rifle_pic">

																					    <svg  id="rifle_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="1.5 1.5 497.333 302.167" enable-background="new 1.5 1.5 497.333 302.167" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 1%; z-index: 1; mix-blend-mode: soft-light;" >

																						<path d="M496.625,133.876c3.625-7.75,1.375-19.125,1.375-19.125l-22.375-1.75l2.25-27.375l5.625-4.75l1-15.375
																							L473,52.126c-2.625-6.5-12.875-5.25-12.875-5.25l-5.25-6.125l-2.25,0.25c-1.375-5-6.25-1-6.25-1l-3-0.5l-0.5-21.625
																							c-14.125-2.375-17.75,0-17.75,0l-1.75,4.25L423,25.751l1.375,0.125l-1.125,15.875l-2-2.75l-7.375-0.25l-2-2.125h-3.5l-7.375,6.5
																							l-49.5-3.125c-1.75-3.625-8.25-8.5-8.25-8.5l-2.875,2.375l-3-0.125l0.25-21l-16-0.5l-2.875,4l0.125,3.5l1.375,0.125l-0.875,15h-1.25
																							l-2.625-2.25l-11.25-0.5l-2.875,1.5l-60.125-2.75l-4-2.625l-5.625-0.25L231,7.251l-15.375-0.75l-2.75,3.875l-0.25,4.375L214,14.876
																							l0.5,14.25l-1.625,0.375l-1.75-2.375l-7.375-0.625l-3.25-2.375l-7.5,6.875l-42.75-2.625l-7.75-7.625l-2.625,2.25l-1.375-0.875
																							l-1.625-19.5L123,2.001l-3.25,4.25l0.375,3.375l2.125,0.375l0.25,13.75l-1.625,0.625c-0.625-3.25-7.875-3-7.875-3
																							c-2.75-5.25-4.75-0.625-4.75-0.625l-1.75-0.375l-4.625,5.375l-2.375-0.5c-4.875-0.375-6.375,2-6.375,2L81.25,38.376l-1.125,17.875
																							L82,59.001l-1.875,22.875L63.5,81.001l-0.625,16.25l15.625,1.5l-1.25,22.125l-3.125,3.875l-1,18l6.75,9
																							c3.625,6,8.375,5.625,8.375,5.625l8.875,0.75l-0.75,0.875l-6.75,0.5l-0.375,1.75c-8.625-2.625-15-0.625-15-0.625l-5.75,1.75
																							l-6.25,0.25l-21.375,9.75v1.125l-8.125,4l-2.375-0.75l-13.25,6.125H13.25l-11.125,4.75l0.5,4.625L8,197.501
																							c4.625,4.375,6.75,46.5,6.75,46.5c1.25,6.375,7,6.25,7,6.25L401,302.834c8.666,1.5,10.666-3.666,10.666-3.666
																							c5,5.334,12.334,4.166,12.334,4.166c17.834-4.334,6.666-21.499,6.666-21.499L442,269.668c4.5,5,12.332,3.667,12.332,3.667
																							c14.5-6.833,5.293-19.709,5.293-19.709l2.125-37.125l5-4.125l-0.125-5.375l-10.125-5.375c0.375-3-10.875-3.125-10.875-3.125
																							l-0.75-2.125l-5.5-1l-0.375-0.75l8.375,0.625C454,197.001,459,193.876,459,193.876l16.125-14.25l0.75-14l-4.25-5.5l2.75-27.25
																							L496.625,133.876z M187.239,168.745c-0.943-0.384-1.933-0.386-2.928-0.451c-0.063,0.37-0.326,0.699-0.811,0.699
																							c-0.853,0-1.705-0.013-2.554-0.101c-0.177,0.5-0.616,0.877-1.321,0.826c-7.55-0.544-15.066-1.595-22.597-2.137
																							c-6.164-0.443-12.363-1.753-18.528-1.738c-1.285,0.004-1.695-1.346-1.236-2.216c-1.285-0.075-2.601-0.694-3.877-0.383
																							c-0.642,0.157-0.914-0.831-0.271-0.987c1.454-0.355,2.816,0.309,4.261,0.357c0.289,0.009,0.443,0.213,0.479,0.436
																							c0.184-0.088,0.397-0.142,0.646-0.142c6.697-0.017,13.541,1.261,20.208,1.899c6.985,0.668,13.907,1.471,20.917,1.976
																							c0.372,0.026,0.667,0.167,0.893,0.368c0.037-0.002,0.07-0.021,0.107-0.017c0.954,0.125,1.915,0.125,2.875,0.125
																							c0.048,0,0.082,0.021,0.125,0.025c0.068-0.034,0.148-0.056,0.25-0.045c1.229,0.118,2.471,0.045,3.636,0.518
																							C188.115,168.002,187.851,168.993,187.239,168.745z M291.366,179.943c-1.805-0.887-4.007-0.922-6.002-0.928
																							c0.254,1.021-0.276,2.213-1.614,2.11c-10.723-0.828-21.424-1.931-32.131-2.933c-4.657-0.437-9.417-1.35-14.084-1.519
																							c-2.293-0.083-4.974,0.122-6.918-1.289c-0.597-0.433-0.801-1.051-0.747-1.64c-0.237-0.121-0.367-0.352-0.406-0.602
																							c-1.123,0.023-2.276,0.084-3.352-0.275c-0.622-0.208-0.354-1.197,0.272-0.987c1.115,0.373,2.332,0.239,3.489,0.232
																							c0.104,0,0.186,0.03,0.256,0.073c0.042-0.004,0.073-0.023,0.119-0.023c0.177,0,0.313,0.057,0.434,0.131
																							c0.466-0.32,1.075-0.383,1.699,0.07c2.109,1.529,9.254,1.352,11.657,1.598c4.416,0.452,8.837,0.842,13.257,1.251
																							c8.815,0.817,17.624,1.729,26.453,2.412c0.423,0.033,0.766,0.185,1.028,0.409c0.063-0.029,0.137-0.046,0.222-0.046
																							c2.277,0.008,4.798,0.045,6.884,1.069C292.476,179.352,291.957,180.232,291.366,179.943z M396.116,190.857
																							c-2.231-0.654-4.573-0.332-6.869-0.25c0.009,0.959-0.747,1.92-1.915,1.533c-2.818-0.938-5.773-0.826-8.707-0.82
																							c-0.273,0-0.508-0.06-0.706-0.157c-7.078-1.165-14.021-1.103-21.134-1.912c-3.365-0.383-6.767-1.417-10.16-1.431
																							c-2.558-0.008-4.866,0.248-7.293-0.68c-0.734-0.281-1.051-0.92-1.055-1.55c-0.314-0.041-0.61-0.131-0.882-0.36
																							c-0.082-0.068-0.12-0.157-0.136-0.252c-0.521-0.117-0.486-0.977,0.114-0.977h1.375c0.068,0,0.132,0.016,0.188,0.04
																							c0.104-0.017,0.206-0.034,0.313-0.04c0.063-0.003,0.114,0.008,0.166,0.023c0.226-0.036,0.475-0.018,0.751,0.088
																							c2.962,1.134,6.641,0.525,9.808,0.935c3.449,0.445,6.854,1.241,10.338,1.408c6.429,0.308,12.419,0.64,18.748,1.724
																							c3.063-0.011,6.169-0.043,9.106,0.934c0.324,0.107,0.564,0.289,0.739,0.505c2.497-0.058,5.038-0.44,7.477,0.276
																							C397,190.076,396.737,191.041,396.116,190.857z"/>
																						</svg>

																						 
																						 <img src="images/case back.png" class="case_back">
																				</div>

																			</div>
																																					';
																	}
																	if($row_hd['ct']=="smg")
																	{ 	
																		echo '
																			<div class="smg_maincontainer" style="width:180px; height:135px;">	
																				<img src="'.$row_hd['cskin'].'" class="smg_container_skinImage">

																				<div class="case_box" >
																			 
																			  	<div id="case-price" class="fav_font">
																			  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																			  		<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																			  	</div>

																			 
																			    <img src="case images/SMG Only.png" class="smg_pic" style="width:73.5%;margin-left:22%;margin-top:-5%;">

																			    <svg  id="smg_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.167 2.333 496.833 476.833" enable-background="new 3.167 2.333 496.833 476.833" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 9%; margin-top:-8px; z-index: 1; mix-blend-mode: soft-light;" >

																			   <path d="M16.5,348.5L4.25,277c0,0-2-6,11.25-11.5l5.75-3c0,0,13-3.75,19.5-9.5l15.5-2.25l7.25-3.25l0.25-3.75L77,241
																					c0,0,5.667-1,6.667-7.167c0,0,18.167,0.167,16.833-8c0,0,16.167,0,14.5-6.333l21.5-9.667c0,0,15.834-4.5,31.667-2.667
																					c0,0-14.5-6.334-18-21.167l-3.667-1.833l-0.167-6.5l2.667-1.333l-0.833-13l-3.333-1.5l0.833-6.833l5.333-3l-0.667-10.667
																					c0,0-10.834-6.667-0.167-12.667l-1.167-9c0,0-10.167-8-1.167-14.167l-0.5-9.667c0,0-9.833-6.167-1.5-14.167L145,70.5l-7.333-8.667
																					l-0.5-8.333l3-0.5l-0.833-16.5L136,36.167l-0.833-8.667h3.333l-0.667-11.167c0,0,2.833-9.833,14.5-9.667l13.833,0.167L166,3
																					l29.667,0.333L198,8l40.167,1.333l1.667-4.5l8.833,0.833L250,9.5h12.667l1.666-4.5l8.5,0.667l1.834,5l36.999,1.833l0.5-4.167
																					l10.666-1l1.335,5.333l15.334,0.5l0.166-5.667l10.834,0.833L351.166,14l53.168,1.333l2.5-5.167l9.832,0.667H447L449.834,17
																					l27.5,1.167c0,0,24.666,2.833,18.833,28.667l3.833,1.5l-2.332,10.833l-4.667,0.5l-0.334,20.667l3.834,1.333L494.834,92
																					c0,0-25.666,14-6.833,27.667l-1.167,5.667c0,0-17.5,11.333-2.833,24l-1.667,7.5c0,0-16.834,6.5-1.5,20.5l-1,7
																					c0,0-17.667,8.5,0,24.667l-0.5,10l-3.5,0.833l-1.166,16.833l3.166,1.333l-1.833,9.333l-4.833,0.5c0,0-6.167,16.833-27.834,14.333
																					L443,264.333c0,0,22.499,7.666,19.334,15.333l2.5,3.167l-1,16L458.668,304l-3.167,35.833c0,0,2.665,19.5-8.167,25l-3.166,0.667
																					l-1.667,4.166L436.334,375l-1,7.833l-8.167,8l-1,8.167l-9.166,7.5l-0.167,8.666l-10.667,9.334l-1.833,19l-10.5,15.333l-3.167-0.5
																					l-5.833,10c0,0-5.832,14.834-36.166,7.667L27.334,356.166L16.5,348.5z"/>


																				</svg>
																				 <img src="images/case back.png" class="case_back">
																				</div>
																			</div>
																		';
																	}
																	if($row_hd['ct']=="pistol")
																	{ 	
																		echo '
																			<div class="pistol_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="pistol_container_skinImage">

																			<div class="case_box" >
																				  
																				<div id="case-price" class="fav_font">
																					<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																					<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																				</div>



																				<img src="case images/Pistol Only.png" class="pistol_pic">

																				<svg  id="pistol_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.334 4.833 449.667 492.667" enable-background="new 3.334 4.833 449.667 492.667" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 15%; margin-top:-8px; z-index: 1; mix-blend-mode: soft-light;" >

																				<path d="M450.75,382.25l-4.75-1.5l-38.5-87c8.25-16-27.5-17-27.5-17c-1.5-6-5-7.25-5-7.25l-0.5-2.5l5.75,0.5l3,1.5
																					c22.5-6.75,20.75-26.75,20.75-26.75l-2.25-2.75l5-174l3.25-3c2.5-13.5-9.75-24.75-9.75-24.75l-3-14.75l-27.75-0.75l-5.25,5l-0.5,7.5
																					h-2.5v-16.5L362.5,12l-2.5-0.25l0.75-5L358.5,6l-27.75,1l-0.5,6.25l1.5,0.5l-0.25,9l-3.5,1l-0.5,10.75l-188,0.5l-3-1l-1.5-9.5l-2-2
																					l-0.75-10.25L134,10.5l-1.25-2.75c-14-5.75-27.5,1-27.5,1l-0.5,2.25L102,15.75l2.75,3.5l-1.5,15.25l-2.75,0.25l-0.25-7.25l-4.5-4.75
																					L73,23.5h-6.25L63.25,38c-10,12.5-9.5,23-9.5,23l3.75,3.5l3.75,174L58.5,241C58.25,263.5,79,268,79,268l3.125-1.875l6,0.5L83,272.25
																					l-0.375,2.125c-30.25,3-29.375,13.125-29.375,13.125l0.75,4.25L10.75,378c-4-0.25-5.75,4.25-5.75,4.25
																					c-1.75,12.5,5.5,19.25,5.5,19.25l-0.5,5l2,4.25L24.25,412l9.5,46.75c2.5,14.5,19.75,16,19.75,16c5.25,5.25,8.25,0.25,8.25,0.25H113
																					l2,1.75l43.25,17.5c18.5,5,141,1.25,141,1.25l42-18.5l53.25,0.25c5.25,6,7.75-0.25,7.75-0.25c16.5,0.25,21-13.25,21-13.25l9-49.75
																					H442c3.75-0.5,4-8.25,4-8.25C456,392,450.75,382.25,450.75,382.25z M287.433,269.186c0.074,0.362-2.907,3.961-3.07,4.186
																					c-0.749,1.023-1.553,1.74-2.861,1.843c-0.43,0.033-1.135-0.347-1.25-0.347h-93.956c-2.282,0.566-4.824,1.566-6.787,0.359
																					c-1.888-1.16-3.496-5.261-3.56-5.5c-1.778-0.49-1.775-3.322,0.303-3.266c1.169,0.031,2.307,0.266,3.442,0.5h2.558
																					c0.325,0,0.593,0.081,0.818,0.207c0.143-0.014,0.28-0.034,0.432-0.034h96.75c0.12,0,0.223,0.024,0.337,0.033
																					c0.014-0.001,0.023-0.005,0.038-0.005c2.449-0.057,4.879-0.868,7.321-0.332C289.431,267.154,288.861,269.361,287.433,269.186z"/>
																													</svg>

																				 
																				 <img src="images/case back.png" class="case_back">
																				

																			</div>
																		</div>
																		';
																	}
																	if($row_hd['ct']=="sniper")
																	{ 	
																		echo '
																			<div class="sniper_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="sniper_container_skinImage" >

																			<div class="case_box" >

																				 
																			  	<div id="case-price" class="fav_font">
																			  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																			  		<span style="margin-left: -20px;display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																			  	</div>

																			   
																			    <img src="case images/Sniper Only.PNG" class="sniper_pic">

																			    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93%" height="92%" viewBox="2.375 1.625 488 263.875" enable-background="new 2.375 1.625 488 263.875" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 5%; margin-top:-10px; z-index: 1; mix-blend-mode: multiply;" >

																			  <path d="M24.5,224.167l-3.833-31.166l4-3.334c0,0,5-4.334,7.667-4l-3.167-2.833c0,0-7.333,4.166-14-3.167L10.5,173.5
																				l-1.375-16.75L11.25,154l-3.5-49.5c0,0-0.375-6.625-4-9.875l-1.125-15.5c0,0,0.625-8.5,10.125-9.375l10.125-1.375L24,65.125
																				c0,0,9.625-5.75,9.875,4.5l14.5-1.5L50.25,64.5l2.125-0.75c0,0,1.375-7.875,8.375-3.75l1.75,2.125l10-1.75c0,0,2.125,3.375,16,0.5
																				l47.25-7.625c0,0,0.5-3,7.75-3.75l12.25-1.5c0,0,0.75-6.75,7.125-4.625c0,0,4.5,1.125,3.625,5.625l10.625-1.5l2.375-3.625
																				l2.875-0.375L183,40.25c0,0,5.5-3.5,9,1.5l8.125-1.125c0,0,2.25,3.375,16.875,0.25l39.125-6.375c0,0,0.5-4,5.75-4l13.25-2
																				l1.75-3.625c0,0,4.25-3.125,8.375,1.125l1,3.625l7.875-1.5c0,0,2-4.25,5.5-3.75c0,0,0.25-8,8.625-3l1,1.25l5.75-1
																				c0,0,4.25,2.625,16,0l35.625-6c0,0,2-4.25,4.875-3.625l13.75-1.875l1.875-3.375c0,0,3-2.625,8.25,0.25l0.75,3.75l5.5-1l3-3.25
																				l2.875-0.25c0,0,1.625-7.125,9.625-3.25L418,4.875L427.875,7c0,0,6.25,2.375,4.875,9.375l-2.375,57.875l19.875,40.625L444,111.75
																				l-12.875-28.125L429.75,83.5L429.125,95c0,0-0.25,8.5-11,8.375l-2.5,2.75l-0.125,1.125l-19,3.375l-0.75-2.5l-3.25,3.5l-3.75,0.75
																				l-4.25-2.25l-72.875,14.5l-3.75,4.125l-3.125,0.875L302.125,128L302,129.875l-12.25,2.5L289,130c0,0-2.75,0.75-3.75,3.5
																				l-3.875,0.625l-3.375-2.5l-80.5,16.75c0,0-2.125,1.5-2.625,3.5l-5,1.375c0,0-1-1.875-2.5-1.75l-0.125,2.125l-13.75,2.5l-0.375-2.375
																				c0,0-1.875,0.5-3.25,3.5l-4.75,0.875l-3.375-2.75L71.5,174.5l-2.25,3.375L63.625,179l-2.375-2.375l-1.125,0.5L60.75,179l-15.625,3.5
																				v-2l-3.375,1.625l0.875,2l160.875-33.5l120.625-24.375l98.125-20.125c0,0,8.375-2.125,12.625,1.625l46.375,22.125l2.416,2.042
																				l6.584,3.917l0.082,5.917l-3.666,21.75c0,0-0.084,4.584-9.584,5.917l-8.5,1.5L464.25,172l-4.25-1.416h-2.085l-4.665,3.583
																				l-15.918,4.583c0,0-4.415,0.833-7.915-1.917c0,0-0.919-1.667-4.335-0.417L381.75,186.5c0,0-0.375,5.375-3.75,4.875
																				c0,0-14.375,4.875-20.25,4.25c0,0-3.063,2.313-7.125-0.25l-4.125,0.875l-0.375,1.813l-14,4.625l-2.313-0.125l-4.25-2.813L320.75,201
																				v1.625l-8.063,6.5l-38.25,9.813l-5.188-0.5l-6.25-4.875l-7.313,2.688l-0.875,3.313c0,0-1.688,2.125-5.188,2.25l-7.313,1.25H239
																				c0,0-4.438,2.375-6.688-0.188l-5.563,1.625l-1,1.625l-24.875,7.375l-2.375-0.625l-3.25-2.625l-2.875-0.25l-55.25,13.75
																				c0,0-0.125,6.25-4.75,6c0,0-17.875,5.625-23.125,4.75l-4.25,1.75l-3.625-1.75l-6.25,1.75l-0.875,2l-21,6.5c0,0-5.5,2.375-10.375-2
																				l-6.25-6.125l-1.375-1.75l-0.625-7.5l-14.5-14.625c0,0-1.5-1-3.25,0l-2.375,0.375C34.5,233.125,26.875,228.959,24.5,224.167z"/>

																				
																				</svg>

																				 
																				 <img src="images/case back.png" class="case_back">

																			</div>

																			</div>
																		';

																	}
																	if($row_hd['ct']=="heavy")
																	{ 	
																		echo '
																			<div class="heavy_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="heavy_container_skinImage">

																			<div class="case_box" >

																			  	<div id="case-price" class="fav_font">
																			  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
																			  		<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																			  	</div>
																			   

																			    <img src="case images/Heavy only.png" class="heavy_pic">

																			    <svg  id="heavy_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="2.5 2.167 495 359.5" enable-background="new 2.5 2.167 495 359.5" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 1%; margin-top:-8px; z-index: 1; mix-blend-mode: soft-light;" >

																			    <path  d="M17,199.917c0,0-3-2.25-7.25-2.5L8,180.167l1.5-1.25L4.75,27.667l-1.5-1.25l0.5-17.75c0,0,3.75,3,7.75-1.75
																					L66,8.167c0,0,0.625-1.375,9.125-0.125l0.25-5.375l13.25,0.125c0,0-0.125,7.625,4,5h5.25l0.5,1.25l85.875,0.75l3.5-2.125h11.375
																					l3.75-0.625l4.25,2.75L308.082,12c0,0,3.085-3.917,8.418-0.833l1.166-0.833l-0.084-4.25l11.667-0.167v4.167
																					c0,0,1.25,1.834,2.583,0.917l4.25-0.25l1,1.083l44.25,0.25L381.166,181l-44.916,2.333L336.166,185l2.916,0.416l0.084,1.166
																					l-17.501,1.334v-1.5l-2.083-2L90.083,196.25l0.084,1.916l2.167,1.75l255.25-13.418l37.75-2.416l111.25,21.582l0.29,8.625l-1,1.375
																					l-2,82.75l0.75,0.25l-0.125,17l-18.125,3.75L475,318.542l-166.25,18.375l-10.75,1.75l-0.5-0.75l-193.375,20.25l-2.375,1.375
																					l-22.375,1.25l-6.125-4.875v-1.375l-20.75-18.75l-1.125-0.125l-3.375-3.5l-17.875-16.25l-1.75,0.375l-4.5-4.125l-0.125-17.5
																					l-4.125-90.25l52.875-3.25l-1.375-3.625L17,199.917z"/>

																			
																				</svg>

																				 
																				 <img src="images/case back.png" class="case_back">
																				
																			</div>

																		</div>
																		';
																	}
																	if($row_hd['ct']=="knife")
																	{ 	
																		echo '
																			<div class="knife_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="knife_container_skinImage">

																			<div class="case_box" >

																				  	<div id="case-price" class="fav_font">
																				  		<span style="color: #3add08;margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																				  		<span style="margin-left: -20px;display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																				  	</div>
																				   
																				    <img src="case images/Knife Only.png" class="knife_pic">

																				    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80%" height="67%" viewBox="2.084 1.333 492.584 363.25" enable-background="new 2.084 1.333 492.584 363.25" xml:space="preserve" style="fill: '.$row_hd['cc'].'; position: absolute; margin-left: 16%; margin-top:6%; z-index: 1; mix-blend-mode: soft-light;  -webkit-filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row_hd['cc'] , '(' , ')').', 0.8)); filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row_hd['cc'] , '(' , ')').', 0.8));" >

																					<path d="M451,160.001l18.5,2.5l18.5-4.5l6-151.5l-341-5l1.5,131.5l31.5,3.667v2.667l-30.333-2.333L10.333,156.334
																					L18,284.001l-15,6.666l0.667,10.334l30.667,5L42,303.667l8,0.666c6,4.666,92.333,23,92.333,23l10-1.666
																					c6.333,5.668,9.333,1.334,9.333,1.334C169,337.667,285,348.333,285,348.333c4.333-0.666,18,9.334,18,9.334l40,6.668l25.666-8.668
																					c3-6.666,18-9,18-9c19-1.332,24-8,24-8h5l2.334-3.332l9.332-0.668l18.334-11H456l19-6.666l3-3.334l0.665-9.332L466,299.667
																					l4.5-134.333l-40.5-3.833v-3.5L451,160.001z M388.5,157.985c-1.962-0.031-3.837-0.486-5.723-0.89
																					c-0.227,0.09-0.482,0.145-0.777,0.14c-6.689-0.09-13.312-1.159-20-1.25c-0.786-0.011-1.328-0.395-1.633-0.918
																					c-5.374-0.448-10.757-0.794-16.116-1.389c-14.604-1.621-29.379-1.842-43.932-3.766c-2.674-0.353-5.344-0.772-8.016-1.179
																					c-6.241,0.019-12.435-0.105-18.67-0.474c-3.743-0.221-7.503-0.5-11.01-1.836c-1.828-0.119-3.656-0.268-5.487-0.464
																					c-7.003-0.754-13.93-1.597-20.978-1.782c-5.787-0.152-11.552-0.34-17.188-1.763c-2.479-0.626-1.427-4.453,1.055-3.826
																					c6.992,1.765,14.146,1.39,21.283,1.793c6.518,0.368,12.978,1.401,19.478,1.972c0.406,0.036,15.487,0.475,21.813,1.154
																					c3.17,0.34,6.323,0.794,9.474,1.261c0.394-0.001,2.017,0.128,2.313,0.34c2.568,0.381,5.138,0.758,7.716,1.073
																					c7.593,0.925,15.242,1.105,22.869,1.617c7.086,0.476,14.092,1.469,21.158,2.099c7.645,0.68,15.302,1.42,22.947,2.03
																					c3.77,0.3,7.547,0.424,11.315,0.719c2.771,0.217,5.287,1.327,8.106,1.372C391.057,154.057,391.061,158.025,388.5,157.985z"/>
																												
																					</svg>

																					 
																					 <img src="images/case back.png" class="case_back">

																			</div>

																		</div>
																		';
																	}
																	if($row_hd['ct']=="glove")
																	{ 	
																		echo '
																			<div class="glove_maincontainer" style="width:180px; height:135px;">	
																			<img src="'.$row_hd['cskin'].'" class="glove_container_skinImage">
																				
																			 <div style="background-color: rgb('.get_string_between($row_hd['cc'] , '(' , ')').') ; opacity:0.6;  mix-blend-mode: soft-light; position: absolute; top:0px;right:0px; left:auto; width: 170px; height: 132px ;z-index:-100; ">
																			 </div>

																			<div class="case_box" >

																				  
																				  	<div id="case-price" class="fav_font" >
																				  		<span style="color: #3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
																				  		<span style="margin-left: -20px;display: inline; float: right; width: 80px; text-align:left ;">'.$row_hd['cp'].'</span>
																				  	</div>

																				    <img src="case images/Gloves Only.png" class="glove_pic">

																				 	<img src="images/case back.png" class="case_back">


																				</div>

																		</div>
																		';
																	}

																echo '<!--end here-->

																</div>
																<div class="desc_item_hld">
																	<div class="fav_font">
																		<div class="top_desc_item_hld" style="font-weight:600; margin-bottom:3%;">
																			'.$row_hd['cn'].' Case 	
																		</div>
																		<div  style="font-weight:400; overflow:hidden ;font-size:14px; width:100%; height:auto; color:#9d9d9d;">
																			 Case Sold 	
																		</div>
																		<div class="bottom_desc_item_hld" style="color:#9d9d9d; font-size:14px; letter-spacing:1px;">
																			
																			You will get following skins :';

																			$cdt = "SELECT * FROM sell_case_db.".$row_hd['cdt']." ;  ";

																			$cdt_r= $conn_hst->query($cdt);

																			if($cdt_r->num_rows >0)
																			{
																				echo '<ul style="display:flex; flex-wrap:wrap ; width:100%;height:auto;padding-bottom:10px; margin-top:10px;">';

																				 while($cdt_row = $cdt_r->fetch_assoc()) 
												 								{
												 									if(!(strcmp($cdt_row["case_item_image"],$row_hd["csgot"])==0) )
												 									{
												 									echo '<li style="text-align:center; padding:3px 3px 3px 3px; margin-right:7px; margin-bottom:7px;background-color:grey;">';
												 									echo '<img style="width:70px; height:auto;" src="'.$cdt_row["case_item_image"].'">';
												 									echo '</li>';
												 									}
												 								}


																				echo '</ul>';

																			}
																			else
																			{
																				echo '-' ;
																			}


																		echo '</div>	
																	</div>
																</div>
																<div class="time_item_hld">
																	<div class="fav_font">
																		<div class="time_elapse">
																			';
																			$sct=0;
																		
																			$tlft = "SELECT timestamp FROM Csgoviral_MBR.MBR_sell_case WHERE sell_case_id = ".$row_hd['cid'] ." " ;

																			$rs_lft = $conn_hst->query($tlft);

																			if ($rs_lft->num_rows > 0) {
							    
																			    $rw = $rs_lft->fetch_assoc();
																			    $sct= reset($rw) ;
																				
																				date_default_timezone_set('UTC');
																			    
																			    $sd=date_create($sct); //sell case date
 
 																				date_add($sd,date_interval_create_from_date_string("8 days"));//7day after date when trade ban will remove
 
																			    $cd = new DateTime();  //buy case date gmt
																			    


																			    if($cd < $sd) //means the trade ban is still vaid
																			    {


																			    	
																					$timer=date_diff($cd,$sd);

																					
																						echo "<p style='color:#d33937 ; font-size:16px; '>" ;
																			    	
																						echo "Tradeable After " ;
																						echo date_format($sd,"F d , Y ( H:i:s ) ");
																						echo " GMT" ;
																						echo "<br />" ;
																					
																						echo "<p style='font-size:14px; color:#d33937 ; margin-top:10px;'>" ;
																						echo "Time Left : " ;
																						
																						echo $timer->format("%D day %H hours %I minutes %S seconds");

																						echo "</p>" ;
													
																						echo "</p>";

																					
																			    } 
																			  
																			    else
																			    {
																			    	echo "<p style=' text-decoration:underline ; cursor:pointer ; color:green; letter-spacing:2px;  width:40%; margin-left:20%; margin-right:30%;'>" ;
																			    	echo "<a href='intermediate/withdrawCase.php?withdraw=".str_replace('_','',strrchr($row_hd["cdt"],'_'))."&sw=".$row_hd["csgot"]."'>Withdraw </a>" ;
																			    	echo "</p>" ;
																			    }
																			
																				
																			} 
																			else { //this means the case opened is not present in MBR Case
																			    echo "";
																			}

																		echo '</div>
																	</div>
																</div>
																
															</div>
															<div class="small-line-light" style="width: 90%; bottom: 0; "></div>
														</div>	';
													}
													else if($row_hd['flag']=="sw")
													{
														echo '
											    		<div class="hld-info-row">

															<div class="hld-top">
																<div class="img_item_hld">
																	<img src="'.$row_hd['csgot'].'" alt="Item on Hold">
																</div>
																<div class="desc_item_hld">
																	<div class="fav_font">
																		<div class="top_desc_item_hld">
																			';
																			if (stripos(explode('(' ,$row_hd['cskin'])[0], "StatTrak") !== false) 
																						{
																							echo str_replace(',', ' ', explode('(' ,$row_hd['cskin'])[0]) ;
																						}
																						else
																						{
																							echo explode('(' ,$row_hd['cskin'])[0];
																						}
																			echo ' | '.explode('(' ,$row_hd['cskin'])[1].'	
																		</div>
																		<div class="bottom_desc_item_hld">
																			<div class="upper_bottom_desc_item_hld">
																					<div id="desc_item_hld_left" class="fav_font">Finish Style</div>
																					<div id="desc_item_hld_middle" class="fav_font">:</div>
																					<div id="desc_item_hld_right" class="fav_font">';

																						if (stripos(explode('(' ,$row_hd['cskin'])[0], "StatTrak") !== false) 
																						{
																							//PRESENT
																							 $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".  strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "",  substr(explode('(' ,$row_hd['cskin'])[0], 12,-1))))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", explode('(' ,$row_hd['cskin'])[1])))."' ";

																						}
																						else
																						{

																							   $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", explode('(' ,$row_hd['cskin'])[0])))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", explode('(' ,$row_hd['cskin'])[1])))."' ";
																						}

																						//  echo '<script type="text/javascript">alert("'.$finish_sql.'");</script>';

																							$fr = $conn_hst->query($finish_sql);

																							if ($fr->num_rows > 0) {
																							    
																							    $f_row = $fr->fetch_assoc();
																							    echo strtolower(reset($f_row));
																							} 
																							else {
																							    echo "-";
																							}

																					echo '</div>
																			</div>
																			<div class="lower_bottom_desc_item_hld">
																					<div id="desc_item_hld_left" class="fav_font">Exterior</div>
																					<div id="desc_item_hld_middle" class="fav_font">:</div>
																					<div id="desc_item_hld_right" class="fav_font">'.explode('(' ,$row_hd['cskin'])[2].'</div>
																			</div>
																		</div>	
																	</div>
																</div>
																<div class="time_item_hld">
																	<div class="fav_font">
																		<div class="time_elapse">
																			';
																			$sct=0;
																			//echo "Buy Case Time ". $row_hst['buy_time'] ;
																			$tlft = "SELECT timestamp FROM Csgoviral_MBR.MBR_sell_case WHERE sell_case_id = ".$row_hd['cid'] ." " ;

																			$rs_lft = $conn_hst->query($tlft);

																			if ($rs_lft->num_rows > 0) {
							    
																			    $rw = $rs_lft->fetch_assoc();
																			    $sct= reset($rw) ;

																			    date_default_timezone_set('UTC');
																			    
																			    $date=date_create($sct); //sell case date 
 																				
 																				date_add($date,date_interval_create_from_date_string("8 days"));//7day after date

																			    $date1=date_create(explode('(' ,$row_hd['cskin'])[3]);  //buy case date
																			    //chk the diff
																			  //  $diff=date_diff($date , $date1 );
 
																			    if($date1 < $date) //means the trade ban is still vaid
																			    {
																			    	
																						$timer=date_diff($date1,$date);

																					
																						echo "<p style='color:#d33937 ; font-size:16px; '>" ;
																			    	
																						echo "Tradeable After " ;
																						echo date_format($date,"F d , Y ( H:i:s ) ");
																						//echo date_format($date1,"F d , Y ( H:i:s ) ");
																						echo " GMT" ;
																						echo "<br />" ;
																					
																						echo "<p style='font-size:14px; color:#d33937 ; margin-top:10px;'>" ;
																						echo "Time Left : " ;
																						
																						echo $timer->format("%D day %H hours %I minutes %S seconds");

																						echo "</p>" ;
													
																						echo "</p>";

																					

																			    } 
																			  
																			    else
																			    {
																			    	echo "<p style=' text-decoration:underline ; cursor:pointer ; color:green; letter-spacing:2px;  width:40%; margin-left:20%; margin-right:30%;'>" ;
																			    	echo "<a href='intermediate/skinWithdraw.php?num=".$row_hd['cid']."&wpn=".explode('(' ,$row_hd['cskin'])[0]."&skn=".explode('(' ,$row_hd['cskin'])[1]."&exn=".explode('(' ,$row_hd['cskin'])[2]."'>Withdraw</a>" ;
																			    	echo "</p>" ;
																			    }
																			
																				
																			} 
																			else { //this means the case opened is not present in MBR Case
																			    echo "";
																			}

																		echo '</div>
																	</div>
																</div>
																
															</div>
															<div class="small-line-light" style="width: 90%; bottom: 0; "></div>
														</div>	';
													}
											        
											     }

											}
											else
											{
												$b2=1;
											}

											//if 1 && 1 - means both empty then display this 
											if($b2)
											{
												
												echo '<div class="fav_font" style="text-align:center ; margin-top:10%; font-size:16px; letter-spacing:1px; color :#9a9a9a;" >No Skins on Hold</div>' ;
											}
											

											$conn_hst->close();

									?>

								</div>
							</div>
						
											

						</div>

						<div id="history-container"> <!--div for history-->
							
								<!--[History]-->
									<div class="hist-box">

										<div id="hist-container">
											
											<?php

												$db_history = "history_user" ;
												$server = "";
											$username = "";
											$password = "";

												$conn_hst = new mysqli($server, $username, $password, $db_history);
												// Check connection
												if ($conn_hst->connect_error) {
												    die("Connection failed: " . $conn_hst->connect_error);
												} 

												$hst_sql = "SELECT * FROM history_".$_SESSION['steamid']." ORDER BY sno DESC LIMIT 20  ;  " ;
												
												$hst_result = $conn_hst->query($hst_sql);

												if ($hst_result->num_rows > 0) 
												{
												    // output data of each row
												    while($row_hst = $hst_result->fetch_assoc()) 
												    {
												    	if($row_hst['flag']=='c')
												    	{
												    		echo '
												    			<div class="hist-info-row">
																	<div class="hist-top">

																		<div class="hist-date">
																			<div id="hist_date">'; $d = $row_hst['history_timestamp'] ;
																			$x = date_create($d) ; echo date_format($x , "d F , Y") ;
																   			echo '</div>
																			<div id="hist_time"><br>'; echo date_format($x , "h:i a ") ; echo '</div>
																		</div>

																		<div  class="hist-info-det fav_font">
																			<span class="fav_font hist-sld">You created</span>
																			<span id="CaseName" class="hist-caseName">'.$row_hst['case_name'].'</span>
																			<span style="font-size: 20px; color: #9d9d9d;"></span>
  																	        <span style="font-size: 20px; color: #17d365;"></span>
																	        <span id="CasePrice" style="font-size: 20px; color: white;"></span>
																			
					                                                    </div>

					                                                     <div class="hist-sign" id="addorsub"></div>

					                                                     <div class="hist-item-img">
																	            <img src="">
																	     </div>

																	      <div class="hist-item-wpn">
																	            <div style="margin-left: 0.5vw;">
																	                <div class="head" style="margin-bottom: 10px; font-size: 15px; color: white;">
																	                    <span class="fav_font"></span>
																	                    <span class="fav_font"></span>
																	                    <span class="fav_font"></span>
																	                </div>
																	                <div class="info">
																	                    <span class="fav_font hist-extra" ><br></span>
																	                    <span class="fav_font hist-extra" ><br></span>
																	                    <span class="fav_font hist-extra" ><br></span>
																	                </div>
																	            </div>									
																	        </div>

                                                   					 </div>
                                                   					 <div class="small-line-light" style="width: 90%; bottom: 0;">
																	</div>
                                                   				</div> 	' ;
												    	}
												    	else if($row_hst['flag']=='b')
												    	{
												    		echo '
												    			<div class="hist-info-row">
																	<div class="hist-top">

																		<div class="hist-date">
																			<div id="hist_date">'; $d = $row_hst['history_timestamp'] ;
																			$x = date_create($d) ; echo date_format($x , "d F , Y") ;
																			echo '</div>
																			<div id="hist_time"><br>'; echo date_format($x , "h:i a ") ; echo '</div>
																		</div>

																		<div  class="hist-info-det fav_font">
																			<span class="fav_font hist-sld">You bought </span>
																			<span id="CaseName" class="hist-caseName">'.$row_hst['case_name'].'</span>
																			<span style="font-size: 20px; color: #9d9d9d;"> for</span>
																			<span style="font-size: 20px; color: #17d365;">$</span>
																			<span id="CasePrice" style="font-size: 20px; color: white;">'.$row_hst['case_price'].'</span>
					                                                    </div>
                                                    
                                                    					<div class="hist-sign" id="addorsub">+</div>

																		<div class="hist-item-img">
																			<img src="'.$row_hst['skin_get'].'">
																		</div>

																		<div class="hist-item-wpn">
																			<div style="margin-left: 0.5vw;">
																				<div class="head" style="margin-bottom: 10px; font-size: 15px; color: white;">
																					<span class="fav_font">'.$row_hst['weapon_name'].'</span>
																					<span class="fav_font">|</span>
																					<span class="fav_font">'.$row_hst['skin_name'].'</span>
																				</div>
																				<div class="info">
																					<span class="fav_font hist-extra" >Finish Style <br>Exterior </span>
																					<span class="fav_font hist-extra" >: <br>: </span>
																					<span class="fav_font hist-extra">'; 

																					if (stripos($row_hst['weapon_name'], "StatTrak") !== false) 
																					{
																						//PRESENT
																						 $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".  strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "",  substr($row_hst['weapon_name'], 12,-1))))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row_hst['skin_name'])))."' ";

																					}
																					else
																					{

																						   $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row_hst['weapon_name'])))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row_hst['skin_name'])))."' ";
																					}



												  

																					//   echo '<script type="text/javascript">alert("'.$finish_sql.'");</script>';

																						$fr = $conn_hst->query($finish_sql);

																						if ($fr->num_rows > 0) {
																						    
																						    $f_row = $fr->fetch_assoc();
																						    echo strtolower(reset($f_row));
																						} 
																						else {
																						    echo "-";
																						}

																					echo '<br>'.$row_hst['skin_extr'].'</span>
																				</div>
																			</div>									
																		</div>
																	</div>
												
																	<div class="small-line-light" style="width: 90%; bottom: 0;">
																	</div>
																</div> 	' ;
												    	}
												    	else if($row_hst['flag']=='s')
												    	{
												    		echo '
												    			<div class="hist-info-row">
																	<div class="hist-top">

																		<div class="hist-date">
																			<div id="hist_date">'; $d = $row_hst['history_timestamp'] ;
																			$x = date_create($d) ; echo date_format($x , "d F , Y") ;
																			echo '</div>
																			<div id="hist_time"><br>'; echo date_format($x , "h:i a ") ; echo '</div>
																		</div>

																		<div  class="hist-info-det fav_font">
																			<span class="fav_font hist-sld">You Sold</span>
																			<span id="CaseName" class="hist-caseName">'.$row_hst['case_name'].'</span>
																			<span style="font-size: 20px; color: #9d9d9d;"> for</span>
																			<span style="font-size: 20px; color: #17d365;">$</span>
																			<span id="CasePrice" style="font-size: 20px; color: white;">'.$row_hst['case_price'].'</span>
					                                                    </div>
                                                    
                                                    					<div class="hist-sign" id="addorsub">-</div>

																		<div class="hist-item-img">
																			<img src="'.$row_hst['skin_get'].'">
																		</div>

																		<div class="hist-item-wpn">
																			<div style="margin-left: 0.5vw;">
																				<div class="head" style="margin-bottom: 10px; font-size: 15px; color: white;">
																					<span class="fav_font">'.$row_hst['weapon_name'].'</span>
																					<span class="fav_font">|</span>
																					<span class="fav_font">'.$row_hst['skin_name'].'</span>
																				</div>
																				<div class="info">
																					<span class="fav_font hist-extra" >Finish Style <br>Exterior </span>
																					<span class="fav_font hist-extra" >: <br>: </span>
																					<span class="fav_font hist-extra" >Gunsmith<br>'.$row_hst['skin_extr'].'</span>
																				</div>
																			</div>									
																		</div>
																	</div>
												
																	<div class="small-line-light" style="width: 90%; bottom: 0;">
																	</div>
																</div> 	' ;
												    	}
												    	else if($row_hst['flag']=='d')
												    	{
												    		echo '
												    			<div class="hist-info-row">
																	<div class="hist-top">

																		<div class="hist-date">
																			<div id="hist_date">'; $d = $row_hst['history_timestamp'] ;
																			$x = date_create($d) ; echo date_format($x , "d F , Y") ;
																   			echo '</div>
																			<div id="hist_time"><br>'; echo date_format($x , "h:i a ") ; echo '</div>
																		</div>

																		<div  class="hist-info-det fav_font">
																			<span class="fav_font hist-sld">You deleted</span>
																			<span id="CaseName" class="hist-caseName">'.$row_hst['case_name'].'</span>
																			<span style="font-size: 20px; color: #9d9d9d;"></span>
  																	        <span style="font-size: 20px; color: #17d365;"></span>
																	        <span id="CasePrice" style="font-size: 20px; color: white;"></span>
																			
					                                                    </div>

					                                                     <div class="hist-sign" id="addorsub"></div>

					                                                     <div class="hist-item-img">
																	            <img src="">
																	     </div>

																	      <div class="hist-item-wpn">
																	            <div style="margin-left: 0.5vw;">
																	                <div class="head" style="margin-bottom: 10px; font-size: 15px; color: white;">
																	                    <span class="fav_font"></span>
																	                    <span class="fav_font"></span>
																	                    <span class="fav_font"></span>
																	                </div>
																	                <div class="info">
																	                    <span class="fav_font hist-extra" ><br></span>
																	                    <span class="fav_font hist-extra" ><br></span>
																	                    <span class="fav_font hist-extra" ><br></span>
																	                </div>
																	            </div>									
																	        </div>

                                                   					 </div>
                                                   					 <div class="small-line-light" style="width: 90%; bottom: 0;">
																	</div>
                                                   				</div> 	' ;
												    	}
												    }
												}
												  else
												  {
												  		echo '<div class="fav_font" style="text-align:center ; margin-top:10%; font-size:16px; letter-spacing:1px; color :#9a9a9a;" >No, History Found</div>' ;
												  }

												 $conn_hst->close() ;

											?>

											
										</div>

										
								</div>
							
						</div>

					</div>
				</div>

		</div>
	</div>


	


	

	<script type="text/javascript">

		var but1 = document.getElementById('invt-button');
		var but2 = document.getElementById('case-button');

		var but3 = document.getElementById('hld-button');
		var but4 = document.getElementById('history-button');


		var pan1 = document.getElementById('invt-container');
		var pan2 = document.getElementById('case-container');

		var pan3 = document.getElementById('hld-container');
		var pan4 = document.getElementById('history-container');


		function toggInvt(){
			
			but1.style.color = "#0ef2b5"; //highlight
			but2.style.color = "#929090";
			but3.style.color = "#929090";
			but4.style.color = "#929090";

			pan1.style.display = "block";
			pan2.style.display = "none";
			pan3.style.display = "none";
			pan4.style.display = "none";
		}

		function toggInvt1(){
			
			but1.style.color = "#929090";
			but2.style.color = "#0ef2b5";
			but3.style.color = "#929090";
			but4.style.color = "#929090";


			pan2.style.display = "block";
			pan1.style.display = "none";
			pan3.style.display = "none";
			pan4.style.display = "none";

		}

		function toggHldItem()
		{
			but1.style.color = "#929090";
			but3.style.color = "#0ef2b5";
			but2.style.color = "#929090";
			but4.style.color = "#929090";

			pan3.style.display = "block";
			pan2.style.display = "none";
			pan1.style.display = "none";
			pan4.style.display = "none";
		}

		function toggHistory()
		{
			but1.style.color = "#929090";
			but4.style.color = "#0ef2b5";
			but3.style.color = "#929090";
			but2.style.color = "#929090";

			pan4.style.display = "block";
			pan2.style.display = "none";
			pan3.style.display = "none";
			pan1.style.display = "none";
		}
	</script>

	<script>
		$("#tradeURL").on("keyup", function() {
		   $("#save_button").show(); 
		});
	</script>



	<script >
		 $('#save_button').click(function() {

		 	if($("#tradeURL").val())  //if it will be blank , else will be called
		 	{
		 		$.ajax({
				  type: "POST",
				  url: "intermediate/update.php",
				  data: { 
				  		txt1: $("#tradeURL").val() 
				   }
				}).done(function( msg ) {
				  alert( "Trade URL Updated: ");
				  $('#save_button').hide();
				});	
		 	}
		 	else
		 	{
		 		alert("CSGOVIRAL : Trade Url can't be empty ! ") ;
		 	}
			     

    });
	</script>

	

	<script >
		$('.invn-itm-profile').mouseover(function() {
		   deactivate_hover(this.id);
		});
	</script>

	<script type="text/javascript">
		function deactivate_hover(id)
		{
				if(id==sessionStorage.getItem("inventory_item"))
				{
					//alert('selected hovered');
					//code will be here
				}
		}
	</script>

	<script>

		//changing lin grad script 
		 $('.user_profile_cases_list').click(function() {
		 		var id=this.id;

		 		document.getElementById("dI").value = id ;

		 		$.ajax({
					  type: "POST",
					  url: "intermediate/case_display.php",
					  data: { 
					  		tn: id
					   }
					 
					}).done(function( msg ) {
						
						  $('#cic').html(msg);
						});


				//display linear gradient on div

				var div_toBeStyled_id = $(this).find('div:first').attr('class').split(' ')[1];
				//console.log("selecting class--|" , div_toBeStyled_id);
			
				var prev_selected = sessionStorage.getItem("disp_lin_grad") ;
			
				if(div_toBeStyled_id == prev_selected)
				{
					console.log("Same div clicked for lin grad") ;
				}
				else
				{
					prev_selected = prev_selected ;
					console.log(prev_selected) ;
					


					//$(prev_selected).removeClass("lin-grad") ;
					
					//$(prev_selected).css('opacity','0') ;
						document.getElementsByClassName(prev_selected)[0].style.opacity = 0 ;

					sessionStorage.removeItem("disp_lin_grad");
					sessionStorage.setItem("disp_lin_grad",div_toBeStyled_id) ;

					div_toBeStyled_id = div_toBeStyled_id ;
					console.log(div_toBeStyled_id) ;

					//$(div_toBeStyled_id).addClass("lin-grad") ;

					//$(div_toBeStyled_id).css('opacity','1') ;
					document.getElementsByClassName(div_toBeStyled_id)[0].style.opacity =1 ;

				}

    });
	</script>

	<script>
		$("#delCase").click(function()
		{
			var delVar = document.getElementById("dI").value ;

			if(delVar)
			{
			
		 		$.ajax({
				  type: "POST",
				  url: "intermediate/caseDel.php",
				  data: { 
				  		data:delVar 
				   }
				}).done(function( msg ) {
				  
				  	if(msg=="empty")
				  	{
				  		alert("No case to delete");
				  	}
				  	else if(msg=="err")
				  	{
				  		alert("Something wrong happened, Please try later !");
				  	}
				  	else if(msg="succ")
				  	{
				  		alert("Csgoviral : Your case has been deleted ! Go to item on hold section .") ;
				  		location.reload(true);
				  	}
				});	
			}
			else
			{
				alert("Nothing to Delete !");
			}

		});
		
	
	</script>

	<script>
		var modal = document.getElementById('add_money');
		var btn = document.getElementById("add_button");
		var span = document.getElementsByClassName("close")[0];
		btn.onclick = function() {
		    modal.style.display = "block";
		}
		span.onclick = function() {
		    modal.style.display = "none";
		}
		
	</script>

	<script>
		var cashout_modal = document.getElementById('cashout_money');
		var cbtn = document.getElementById("cash_button");
		var cspan = document.getElementsByClassName("close_cashoutdialog")[0];
		cbtn.onclick = function() {
		    cashout_modal.style.display = "block";
		}
		cspan.onclick = function() {
		    cashout_modal.style.display = "none";
		}
		
	</script>




	<script type="text/javascript">
					function googleTranslateElementInit() {
					  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,cs,da,de,el,en,es,fa,fr,hi,hr,id,iw,ja,ko,la,pl,pt,ru,ur,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
					}
	</script>
	
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<script type="text/javascript">



		window.onload = function() 
		{
			console.log("window is refreshed") ;

		
			console.log('setting the default item');

			console.log('Adding clss') ;

			if(!$(document).find(".upcl0").length == 0)
			{
				
				document.getElementById("dI").value = document.getElementsByClassName('upcl0')[0].id ;
			   
			}
			else
			{
				console.log("no case for delete");
			}
						
			//first clear sessionStorage
		   	sessionStorage.clear();

		   	//set the session storage for lin grad  div id 

		   	sessionStorage.setItem("disp_lin_grad", "id_user_profile_case_default0");

		   	if(!$(document).find(".id_user_profile_case_default0").length == 0)
			{
					document.getElementsByClassName("id_user_profile_case_default0")[0].style.opacity =1 ;
			   
			}
			

		   	//now fetch item first of inventory container 
		   	//setting the initial item in inventory container marking it as defualt 
		   	var def = document.getElementById('default0').value ;
		   	var str_array = def.split(',');

		   	//display border of frst inv item
		   	sessionStorage.setItem("inventory_item","inventory_item0");
	
			 document.getElementById('inventory_item0').style.cssText = "border:1px solid #c6c6c6; background: radial-gradient(#8c8c8c, #343235);";

			document.getElementById('item_pic').src=str_array[0];

			//set initial time tradeable or not
			if(str_array[4]==0)
			{
				document.getElementById('tradeable_stat').style.color="#db0202"; 
				document.getElementById('tradeable_stat').innerHTML="Non Tradeable";
			}
			else if(str_array[4]==1)
			{
				document.getElementById('tradeable_stat').style.color="green"; 
				document.getElementById('tradeable_stat').innerHTML="Tradeable";
			}
			
		    //if it is stat trek make order and write special stat trek tm

			if(str_array[1].includes("StatTrak"))
			{
				var res= str_array[1].substring(10,);
				document.getElementById('item_detail_name').innerHTML= res;

				document.getElementById('StatTrak_logo').innerHTML=str_array[1].substring(0,10);
				document.getElementById('item-info-container').style.border="2px solid #ff9300" ;
			}
			else
			{
				document.getElementById('StatTrak_logo').innerHTML="";
				document.getElementById('item_detail_name').innerHTML= str_array[1];
				document.getElementById('item-info-container').style.border="none" ;
			}
			document.getElementById('item_detail_extra_detail').innerHTML= str_array[3];
			document.getElementById('item_detail_exterior').innerHTML= str_array[2];

		}
	</script>

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
	</footer>


</body>
</html>
<?php  } ?>



<?php

 if (isset($_GET['del'])) {
    
    echo '<script type="text/javascript">alert('.$_GET['del'].');</script>';

  }

?>