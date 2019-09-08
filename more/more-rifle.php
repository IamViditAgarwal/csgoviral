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

	
	<link rel="stylesheet" type="text/css" href="../css/div_style_rifle.css">
	

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
<?php  include("../headers/header_more.php"); ?>

	<div id="main">
		<img id="backdrop" src="../images/backdrop.png">
	</div>


 <div class="gng_bk">
			<a href="../" alt="Back to Home Page !"><span style="display: inline; float: left; " class="fav_font">Home</span></a>
			<span style="display: inline; float:left;">&nbsp; &#8680; &nbsp;</span> 
			<span style="display: inline; float:left;" class="fav_font">Rifle Cases</span>
		</div>

	
	
	<div id="cases_all" style="margin-top:50px;">
		<div id="container_rifle">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='rifle' ; " ;
				$result = $con->query($sql) ;

				if ($result->num_rows > 0) 
				{

					
					echo '<div  style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    				
    				while ($row=mysqli_fetch_array($result))
				    {	

				    	
				    		 echo '
						         <li style="text-align:center; align:center; padding:20px ;">
						            <a href="../case_buy/case_open.php?id='.$row['sell_case_id'].'">
						            	<div class="rifle_maincontainer">	
											<img src="'.$row['skinOfCase'].'" class="rifle_container_skinImage">
	 
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

												    <img src="../case images/Rifle Only.png" class="rifle_pic">

												    <svg  id="rifle_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="1.5 1.5 497.333 302.167" enable-background="new 1.5 1.5 497.333 302.167" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 1%; z-index: 1; opacity:0.3;" >

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

													 
													 <img src="../images/case back.png" class="case_back">
													 <div class="dp-border circle rifle_dp_container" >
												                        <div class="dp circle rifle_dp" >
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
	<?php  } ?>