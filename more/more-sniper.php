<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		
	{  echo '<body style="background-color: #f7f7f7; font-family: sans-serif; ">
			<div style="width:56%; height:auto; margin-right: 22%; margin-left: 22%; margin-top:35%;">
				<img src="../images/unreachable.png" style="width:50px; height:50px; float: left;"> <br> <br> <br>
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

 require('../steamauth/steamauth.php');
 require('../steamauth/userInfo.php');
 require("../db_connect.php") ;



?>

<!DOCTYPE html>
<html>
<head>
	<title>CSGOVIRAL-More Cases</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../images/logo.png" rel="icon" type="image/icon">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/template.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/create case.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/notification.js"></script>
	<!--css fot div styles-->

	
	<link rel="stylesheet" type="text/css" href="../css/div_style_sniper.css">
	

	<!--[/end css linking]-->
	<style type="text/css">
		html {
			height: 73%;
		}
		body {
			background-color: #181818;
			height: 73%;
			min-height: 1000px ! important ; 
			background: radial-gradient(#363636, #181818);
		}
		#main {
			height: 108%;
			position: static;
			overflow-y: hidden;
			
		}
		
		#backdrop {
			width: 100%;
			height: auto;
			opacity: 0.1;
			

		}
		@font-face {
		    font-family: HandelGotDBol;
		    src: url(../font/HANDGOTL.TTF);
		}
		@font-face {
		    font-family: HandelGotDBol2;
		    src: url(../font/HandelGotDBol.ttf);
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


		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: -1; /* Sit on top */
		    padding-top: 250px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		    position: relative;
		    background-color: rgba(0,0,0,0.97);
		    margin: auto;
		    padding: 0;
		    border: 1px solid #888;
		    width: 80%;
		    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		    -webkit-animation-name: animatetop;
		    -webkit-animation-duration: 0.4s;
		    animation-name: animatetop;
		    animation-duration: 0.4s;
		   

		}

		/* Add Animation */
		@-webkit-keyframes animatetop {
		    from {top:-300px; opacity:0} 
		    to {top:0; opacity:1}
		}

		@keyframes animatetop {
		    from {top:-300px; opacity:0}
		    to {top:0; opacity:1}
		}

		.modal-header {
		    padding: 2px 16px;
		    margin-top: 8px;
		    margin-bottom :20px;
		  
		}

		.modal-body {padding: 2px 16px;}

		.modal-footer {
		    padding: 2px 16px;
		    margin-bottom: 10px;
		    text-align: center;
		    /*background-color: #5cb85c;*/
		   
		}
		

		input[type=text] {
		    background-color: rgba(255,255,255,0.5);
		   
		}
		

		input[type=text]:focus {
		    background-color: rgba(13,235,176,0.2);
		    border: 2px solid #0debb0;
		    color: #0debb0;
		}

		#filter{
			color :white;
			font-family: HandelGotDBol ;
			font-size: 20px;
			position: absolute;
			margin-top: -39%;
			margin-left: 74%;
		}

			.gng_bk
		{
			color :white ; font-style: italic; position:absolute; top:27%; left:6%; width:auto;
		}

		@media only screen and (min-device-width: 720px) and (max-device-width: 1280px) {
   
	
			.gng_bk
			{
				color :white ; font-style: italic; position:absolute;top: 36%; left:6%; width:auto;
			}

		}

	</style>
</head>
<body style="position: relative;  min-width: 1100px; top:0px;">
	<?php

	include("../headers/header_more.php");
	?>

	<div id="main">
		<img id="backdrop" src="../images/backdrop.png">
	</div>


	 <div class="gng_bk">
			<a href="../" alt="Back to Home Page !"><span style="display: inline; float: left; " class="fav_font">Home</span></a>
			<span style="display: inline; float:left;">&nbsp; &#8680; &nbsp;</span> 
			<span style="display: inline; float:left;" class="fav_font">Sniper Cases</span>
		</div>

	
	
	<div id="cases_all" style="margin-top:50px;">
		<div id="container_sniper">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='sniper' ; " ;
				$result = $con->query($sql) ;

				if ($result->num_rows > 0) 
				{
					echo '<div style="width:100%; height:auto; ">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    					while ($row=mysqli_fetch_array($result))
				    {	

				    	
				    		 echo '
						       	  <li style="text-align:center; align:center; padding:20px ;">
						            <a href="../case_buy/case_open.php?id='.$row['sell_case_id'].'">
						            	<div class="sniper_maincontainer">	
											<img src="'.$row['skinOfCase'].'" class="sniper_container_skinImage"">
	 
					 						<div class="case_box" >

												    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
												  	<div id="case-price" class="fav_font" >
												  		<span style="color: #3add08; margin-right:8px;  display: inline; float: left; width: 10px;">$</span>
												  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
												  	</div>
												    <span class="bym fav_font" >By<br></span>
												    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

												    <img src="../case images/Sniper Only.PNG" class="sniper_pic">

												    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93%" height="92%" viewBox="2.375 1.625 488 263.875" enable-background="new 2.375 1.625 488 263.875" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 5%; margin-top:-14px; z-index: 1; opacity:0.3;" >

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

													 
													 <img src="../images/case back.png" class="case_back">
													 <div class="dp-border circle sniper_dp_container" >
												                        <div class="dp circle sniper_dp" >
												                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
												                        </div>
												      </div>

											</div>
							
										</div>
									</a>
						            </li>';

				    		
				    }

				    echo '</ul></div>';
				}
				else {
    					echo "<div class='fav_font no_case '>No Case Found</div>";
				}

				$con->close();

			?>

			
		</div>
		
	</div>

	
	
	<!--include footer here later on-->
	<footer style="background-color: black; min-height: 50px; padding-top: 100px;  padding-bottom: 20px; position: absolute; width: 100%; top: 93%; right: 0; bottom: -10%; left: 0; color: white; z-index: 1010; background: linear-gradient(rgba(0,0,0,0) 5%, black 55%);">
		<svg width="50px" height="50px" style="margin-left: 30px;">
			<image xlink:href="../logoheader.svg" width="50" height="50"/>
		</svg>
		<article>
			<span class="Hfont">CSGOVIRAL.COM © 2018 <a href="../terms and service.php" target="_blank"> Terms of Service</a></span>
			<p class="Bfont"><br>You can open various cases on our website CS:GO at best prices.</p>
			<p class="Bfont"><br>All trades work in the automatic mode via Steam bots.</p>
		</article>
		<img id="chat_icon" src="../images/chat_icon.PNG" style="margin-left: 30px;">
	</footer>
	
		<script type="text/javascript" src="../	js/translate.js"></script>	
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>





</body>
</html>
<?php   } ?>	