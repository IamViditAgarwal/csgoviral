

<!DOCTYPE html>
	<html>
	<head>
		<title>Payment Cancelled</title>
	</head>
	<link rel="stylesheet" type="text/css" href="../css/template.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style type="text/css">
		@font-face
		{
			font-family: HandelGotDBol;
	 		src: url(../font/HANDGOTL.TTF);
		}
		body
		{
			
			background-color: #202020;
		}
		#statement
		{
			width:80%;
			height: 80%;
			margin-left: 10%;
			margin-right:10%;
			margin-top:5%;
			margin-bottom: 10%;
		
			text-align: center;
		}

		#logo
		{
			position: relative;
		}

		#logo img 
		{
			width:10%;
			height: auto;
		}

		#warning
		{
			font-size: 22px;
			font-weight: 600 ;
			margin-top: 40px;
		

		}

		#time{
			position: relative;
			font-size: 27px;
			margin-top: 20px;
			width:20%;
			margin-left: 40%;
			margin-right: 40%;
			text-align: center;
			height: auto;
		
			font-weight: 900;


		}

		#cancel_warning
		{
			position: relative;
			margin-top: 20px;
			font-weight: 900;
			font-size: 20px;
		}

		#confirm 
		{
			font-size: 20px;
			margin-top: 70px;
			border:2px solid #0ef229;
			color:#0ef229;
			background-color: black;
			width:31%;
			font-weight: 600;
			margin-left: 34.5%;
			margin-right: 34.5%;
			padding-bottom: 10px;
			padding-top: 10px;
			cursor: pointer;
		}	
		#confirm:hover
		{
			color:#0fa00a;
		}
		#do_confirm
		{
			font-size: 20px;
			margin-top: 30px;
			border:2px solid #f29f0e;
			color:#f29f0e;
			background-color: black;
			width:21%;	
			font-weight: 600;
			margin-left: 39.5%;
			margin-right: 39.5%;
			padding-bottom: 10px;
			padding-top: 10px;
			cursor: pointer;
		}

		#do_confirm:hover
		{
			color:#a16a0a;
		}
		#or
		{
			margin-top: 30px;
			font-weight: 600;
			font-size: 20px;
		}
	
	</style>
	
	<body>
		
		<div id="statement">

			<div id="logo">
				<img src="../logo.PNG">
			</div>



			<div id="warning">

				<span style="margin-right:5px; position:relative; top: 5px;">
					<svg style="fill:#c52624;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					    <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/>
					    <path d="M0 0h24v24H0z" fill="none"/>
					</svg>
				</span>
				<p class="fav_font" style="color: #c52624; display: inline; ">
					Your Payment could not be processed <?php  if($_GET['stat']) echo "and was invalid" ; else echo ""; ?> <br />	
				</p>
			</div>

			<!--<div id="time" class="fav_font">
				<span id="timer">57</span> &nbsp; seconds
			</div>-->
				
			<div id="cancel_warning" style="text-align: left; font-size: 16px; font-weight: 500; width:40%; margin-left:30%;" class="fav_font"> 
				<strong>Following can be reasons :</strong>
				<br>
				<br>
				Insufficient Balance in Paypal Wallet/ Credit / Debit Card .
				<br>
				Your Credit / Debit Card is expired or out of date.
				<br>
				Your Credit / Debit Card doesn't support International Payments .
				<br>
				Your entered wrong Information in the payment gateway.
				<br>
			</div>

			<!--<div id="confirm" class="fav_font">
				Confirm , If you have accepted the trade
			</div>-->

			<br><br>
			<div id="or" class="fav_font">
				Please try again after some time !
			</div>

			<div id="do_confirm" class="fav_font">
				Go back to site
			</div>
		</div>
	</body>
	<script>
				
		
		$("#do_confirm").click(function(e)
			{
				window.location.replace("../profile.php");
			});
	  </script> 
	
	</script>
	</html>	