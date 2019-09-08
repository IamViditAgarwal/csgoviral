

<!DOCTYPE html>
	<html>
	<head>
		<title>Payment Successful</title>
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

		#payment_info
		{
			text-align: left; 
			font-size: 20px; 
			width:40%; 
			margin-left:30%;
			position: relative;
			margin-top: 20px;
			font-weight: 700;
			
		}
		#payment_info span
		{
			font-weight: 500;
			font-size: 19px;
			position: relative;
			top: 0px;
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
			width:12%;	
			font-weight: 600;
			margin-left: 44%;
			margin-right: 44%;
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
			font-weight: 500;
			font-size: 20px;
		}
	
	</style>
	
	<body>
		
		<div id="statement">

			<div id="logo">
				<img src="../images/logo.png">
			</div>



			<div id="warning">

				<span style="margin-right:5px; position:relative; top: 5px;">
					<svg style="fill:green" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					    <path d="M0 0h24v24H0z" fill="none"/>
					    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
					</svg>
				</span>

				
				<p class="fav_font" style="color: green; display: inline; letter-spacing: 1px; ">
					Payment Successful <br />	
				</p>
			</div>

			<div id="or" class="fav_font">
				We have added the funds to your wallet . Enjoy !
			</div>

		
				
			<div id="payment_info" class="fav_font"> 
				
				<br>
				
				Payment Id : <span><?php echo $_GET['paymentId'];?></span>
				<br>
				<br>
				Paid To : <span>CSGOVIRAL</span>
				<br><br>
				Payer Id : <span><?php echo $_GET['PayerID'];?></span>
				<br><br>
				Payment Method : <span><?php echo $_GET['method'];?></span>
				<br><br>
				Amount Paid: <span><?php echo $_GET['amt'];?></span>
				<br><br>
				
				Date : <span><?php echo date("Y-m-d H:i:s");?></span>
				<br><br>
				
			</div>

			
			<div id="or" class="fav_font">
				Check your <strong><?php echo $_GET['email']; ?></strong> for payment receipt 
			</div>


			<br><br>
			

			<div id="do_confirm" class="fav_font">
				Continue
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