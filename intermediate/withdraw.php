<?php

session_start();

$cdt = "Table_".$_SESSION["steamid"]."_".$_GET['withdraw'] ;  //bcz user can delete his own case only
//$cdt="Table_76561198306639779_2" ;
$tradeUrl = $_SESSION['tu'] ;//"https://steamcommunity.com/tradeoffer/new/?partner=346374051&token=eG0i5scZ";//


//set the initial header
$url = "127.0.0.1:8000/?req=bot&partner=".$_SESSION['steamid']."&mode=withdrawDelCase&DelId=".$_GET['withdraw']."&tradeUrl=".urlencode($tradeUrl).""; 

$database = "csgoviral" ;
$server = "";
$username = "";
$password = "";

$conn = new mysqli($server,$username,$password,$database) ;

$hold = "SELECT * FROM sell_case_db.".$cdt."  " ;
$hold_result = $conn->query($hold);

if ($hold_result->num_rows > 0)
{
	$i=1;
	//output hold rows from db[now only delete]
	 while($row_hst = $hold_result->fetch_assoc()) 
	 {
	 	$url.="&Itm".$i."=".urlencode(str_replace(',' , ' ' ,$row_hst['weapon_name']) )."|".urlencode(str_replace(',' , ' ' ,$row_hst['skin_name']  ) )."(".urlencode(str_replace(',' , ' ' ,$row_hst['exterior'] ) ).")" ;

	 	$i++;
	 }
}

$conn->close();

					
	//echo $url ;


	//call bot 

	$ch = curl_init();

	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_VERBOSE, 0);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
	curl_setopt($ch, CURLOPT_TIMEOUT, 6); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	

	$result=curl_exec($ch);

	curl_close($ch);

//	echo "Res from node js :" .$result."<br />" ;	

	if(strcmp($result , "err")==0)  //it is giving 
	{
		
		echo '<script type="text/javascript">
						alert("Error !") ;
	                    window.location="../index.php";
	                    </script> ';

	}
	



?>

<!DOCTYPE html>
	<html>
	<head>
		<title></title>
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
			width:31%;
			font-weight: 600;
			margin-left: 34.5%;
			margin-right: 34.5%;
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
	<script type="text/javascript">
		var max=120 ;
		var st = setInterval(function(){
			max=max-1;
			document.getElementById("timer").innerHTML=max ;

			

			if(max==0)
			{	clearInterval(st);
				window.location.replace("../profile.php");
			}

		} , 1000) ;
	</script>
	<body>
		
		<div id="statement">

			<div id="logo">
				<img src="../logo.PNG">
			</div>

			<div id="warning">
				<p class="fav_font">
					In order to complete the process Accept the Trade Offer sent to you by our BOT in <br />	
				</p>
			</div>

			<div id="time" class="fav_font">
				<span id="timer">57</span> &nbsp; seconds
			</div>
				
			<div id="cancel_warning" class="fav_font"> Or your skins won't be traded
			</div>

			<div id="confirm" class="fav_font">
				Confirm , If you have accepted the trade
			</div>

			<div class="fav_font" id="or">Or</div>

			<div id="do_confirm" class="fav_font">
				Open My Trade Window
			</div>
		</div>
	</body>
	<script>
				
		$("#do_confirm").click(function(e) {
		    
		    e.preventDefault();

		    window.open('https://steamcommunity.com/my/tradeoffers/', '_blank', 'width=600 , height=800');
		});

		$("#confirm").click(function(e)
			{
				window.location.replace("../profile.php");
			});
	  </script> 
	
	</script>
	</html>	