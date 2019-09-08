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

?>
<?php

 require('../steamauth/steamauth.php');
 require('../steamauth/userInfo.php');


$database = "csgoviral" ;
$server = "";
$username = "";
$password = "";

$connection = new mysqli($server,$username,$password,$database) ;





?>

<?php

	function get_string_between($string, $start, $end)
	{
	    $string = ' ' . $string;
	    $ini = strpos($string, $start);
	    if ($ini == 0) return '';
	    $ini += strlen($start);
	    $len = strpos($string, $end, $ini) - $ini;
	    return substr($string, $ini, $len);
	}

?>
<?php

	$item_weapon= array(); // array of the weapon name
	$item = array(); // array of the skin name
	$itemImage= array(); //array of the item skin image
	$itemExterior= array();//array of the item exterior
	$itemRarity= array();// array of the rarity
	$odds= array();  // array of the odds of the skin

	$user_amount=0;

	$seller_account =0;

?>

<!DOCTYPE html>
<html>
<head>
	<title>CSGOVIRAL - Case Buy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script type="text/javascript" src="../js/notification.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../images/logo.png" rel="icon" type="image/icon">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/template.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/create case.css">
	<link rel="stylesheet" type="text/css" href="../css/case_buy.css">
	<link rel="stylesheet" type="text/css" href="../css/roller.css">




	<style type="text/css">
		html {
			height: 95%;
		}
		body {
			background-color: #181818;
			background: radial-gradient(#363636, #181818);
			height: 73%;	
			min-height: 1000px ! important ;
		}
		#main {
			height: 115%;
			position: static;
			overflow-y: hidden;
			
		}
		
		#backdrop {
			width: 100%;
			height:97%;
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


		#redirect_link {
			float: right;
			margin-right : 5%;
			text-decoration: none;

		}
	
		.insuff_balance
		{
			background-color: #0f0f0f;
			color: #efefef;
			padding:5px;
			border-radius:5px;
			display: inline;
			position: absolute;
			
			top:0%;
			right: 5%;
			
		}

		.case_similar
		{
			
		    background-color: #0f0f0f;
		    color: #efefef;
		    padding: 5px;
		    border-radius: 5px;
		    position: absolute;
		  
		    top: 16%;
		    right: 5%;
		    
		}


		.foo
		{

			
			background-color: black;  padding-top: 140px;  padding-bottom: 70px; position: absolute; width: 100%; top: 100%; right: 0; bottom: -2%; left: 0; color: white; z-index: 1010; background: linear-gradient(to top, black 40%, transparent);
		}
		@media screen and (max-width: 1440px)
		{
			.foo
			{
				top:107%;
			}
		}


	</style>
</head>
<body style="position: relative; min-width: 1100px; top:0px;">

	<?php
		include("../headers/header_case_open.php") ;
	?>

	<div id="main">
		<img id="backdrop" src="../images/backdrop.png">
	</div>

	<?php

		$case_id = $_GET['id'] ;

		echo '<script> console.log("'.$case_id.'"); </script>' ;

		$servername = "";
		$username = "";
		$password = "";
		$dbname = "sell_case_db";

							
		$conn = new mysqli($servername, $username, $password, $dbname);
							

		$sql = "SELECT * FROM sell_case WHERE sell_case_id = '$case_id' ";


		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
				while ($row=mysqli_fetch_array($result))
				    {				   
		
				    	

						
	?>

	


	
	<div class="bk">
		<span style="display: inline; float: left; color: #989898;" class="fav_font"><a href="../index.php" title="Back to Home Page !" style="position:relative ; top: -7px; color: #989898; text-decoration: none !important;">Home</a></span>
		<span style="display: inline; float:left;">&nbsp; &#8680; &nbsp;</span> 
		<span style="display: inline; float:left; color: #989898;position: relative; top:-4px;" class="fav_font"><?php echo $row['case_name']; ?></span>
	</div>


	
		<?php

			$tlft = "SELECT timestamp FROM Csgoviral_MBR.MBR_sell_case WHERE sell_case_id = $case_id " ;

			$rs_lft = $conn->query($tlft);

			if ($rs_lft->num_rows > 0) 
			{


			    $rw = $rs_lft->fetch_assoc();
			    $sct= reset($rw) ;

			    date_default_timezone_set('UTC');
			    $sell_date= date_create($sct); // date when skins traded to bot of website GMT

			    date_add($sell_date,date_interval_create_from_date_string("7 days"));//7day after date when trade ban will remove

			   
			    $current_date = new DateTime() ;// current date when user sees the case GMT
			  
			    if($current_date < $sell_date ) //means the trade ban is still vaid
			    {


			    	
						echo '<div id="tradeable_chk" class="fav_font">';
						echo "<p style='color:#d33937 ; font-size:16px; '>" ;

						echo "Skins will be Tradeable After " ;
						echo date_format($sell_date,"F d , Y ( H:i:s ) ");
						
						echo " UTC" ;
						echo "<br />" ;

						echo "</p>";

						echo "</div>" ;

					

			    }
			    else
				
			    {
			    	echo '<div id="tradeable_chk_y" class="fav_font"> ';
			    	echo "<p>" ;
			    	echo "Skins are Available for Trade" ;
			    	
			    	echo "</p>" ;
			    	echo '</div>' ;
			    }
			    
																							
			} 
			else 
			{
				echo "";
			}

		?>

	

<input type="hidden" name="" id="hid_cn" value="<?php  echo $row['case_name'] ; ?>">  <!--hidden case name -->
<input type="hidden" name="" id="cpr" value="<?php  echo $row['case_price'] ; ?>"> 
	<div id="case_open_container">
		<div id="upper_container">
			<div id="case_to_open">

				<?php 
					if( strcmp($row['case_type'], "allInOne")==0 )
					{
						echo '
						<div style="display: inline-flex ; height: 180px; width: 240px; position: absolute; right: 80%; -webkit-filter: drop-shadow(0 0 0.8rem black); filter: drop-shadow(0 0 0.8rem black);  ">	
							<img src="'.$row['skinOfCase'].'" style="z-index:135;  margin:1%; height: 95%; position: absolute; top:-10%; right:-4% ; filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white) ; 	-webkit-filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white)  ;">
	 
	 						<div class="case_box" >

								  

								    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
								  	<div id="case-price" class="fav_font">
								  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
								  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
								  	</div>
								    <span class="bym fav_font" >By<br></span>
								    <span class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

								    <img src="../case images/All In One.png" style="position: absolute; width:90%; margin-left: 7%;z-index: 119; margin-top:0%;">

								    <svg  id="allInOne_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="90%" height="87%" viewBox="0 7 500 390" enable-background="new 0 7 500 390" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 7%; margin-top:1px; z-index: 120; mix-blend-mode: soft-light;" >

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

									 
									 <img src="../images/case back.png" class="case_back">
									 <div class="dp-border circle" style="position: absolute; top:70%; right: 0; width: 40px; height: 40px; z-index: 145;">
								                        <div class="dp circle" style="width: 40px; height: 40px;">
								                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
								                        </div>
								                    </div>

							</div>
							
						</div>';
					}
					elseif(strcmp($row['case_type'], "rifle")==0)
					{
						echo '<div style="display: inline-flex ; height: 180px; width: 240px; position: absolute; right: 80%; -webkit-filter: drop-shadow(0 0 0.8rem black); filter: drop-shadow(0 0 0.8rem black);  ">	
							<img src="'.$row['skinOfCase'].'" style="margin:1%; height: 95%; position: relative; top:-10px; left:3.5%; right:0;  z-index:135 ; filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white) ; -webkit-filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white)  ;	">
	 
	 						<div class="case_box" >

								  

								    <div id="case-name" class="fav_font" >';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
								  	<div id="case-price" class="fav_font" >
								  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
								  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
								  	</div>
								    <span class="bym fav_font" >By<br></span>
								    <span class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

								    <img src="../case images/Rifle Only.png" style="position: absolute; width:100%; margin-left: 1%;z-index: -21; margin-top:5%;">

								    <svg  id="rifle_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="1.5 1.5 497.333 302.167" enable-background="new 1.5 1.5 497.333 302.167" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 1%; z-index: 1; mix-blend-mode: soft-light;" >

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
									 <div class="dp-border circle" style="position: absolute; top:70%; right: 0; width: 40px; height: 40px; z-index: 145; ">
								                        <div class="dp circle" style="width: 40px; height: 40px;">
								                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
								                        </div>
								                    </div>

							</div>
							
								</div>';
					}
					elseif(strcmp($row['case_type'], "pistol")==0)
					{
						echo '<div style="display: inline-flex ; height: 180px; width: 240px; position: absolute; right: 80%; -webkit-filter: drop-shadow(0 0 0.8rem black); filter: drop-shadow(0 0 0.8rem black);  ">	
							<img src="'.$row['skinOfCase'].'" style=" margin:1%; height: 95%; position: absolute; top:-20%; right: -2%;  filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white) ; z-index:135;	-webkit-filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white)  ;">
	 
	 						<div class="case_box" >
								    <div id="case-name" class="fav_font" >';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
								  	<div id="case-price" class="fav_font" >
								  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
								  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
								  	</div>
								    <span class="bym fav_font" >By<br></span>
								    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

								    <img src="../case images/Pistol Only.png" style="position: absolute; width:64%; margin-left: 33%;z-index: -21; margin-top:-5%;">

								    <svg  id="pistol_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.334 4.833 449.667 492.667" enable-background="new 3.334 4.833 449.667 492.667" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 15%; margin-top:-12px; z-index: 1 ; mix-blend-mode: soft-light;" >

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

									 
									 <img src="../images/case back.png" class="case_back">
									 <div class="dp-border circle" style="position: absolute; top:70%; right: 0; width: 40px; height: 40px; z-index:145; ">
								                        <div class="dp circle" style="width: 40px; height: 40px;">
								                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
								                        </div>
								                    </div>

							</div>
								</div>';
					}
					elseif(strcmp($row['case_type'], "smg")==0)
					{
						echo '<div style="display: inline-flex ; height: 180px; width: 240px; position: absolute; right: 80%; -webkit-filter: drop-shadow(0 0 0.8rem black); filter: drop-shadow(0 0 0.8rem black);  ">	
							<img src="'.$row['skinOfCase'].'" style=" margin:1%; height: 95%; position: absolute; top:-18%; right: -1%;  z-index:103 ; filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white) ; -webkit-filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white)  ;">
	 
	 						<div class="case_box" >

								  

								    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
								  	<div id="case-price" class="fav_font">
								  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
								  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
								  	</div>
								    <span class="bym fav_font" >By<br></span>
								    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

								    <img src="../case images/SMG Only.png" style="position: absolute; width:74%; margin-left: 23%;z-index: -21; margin-top:-6%;">

								    <svg  id="smg_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.167 2.333 496.833 476.833" enable-background="new 3.167 2.333 496.833 476.833" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 10%; margin-top:-14px; z-index: 1 ; mix-blend-mode: soft-light;" >

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

									 
									 <img src="../images/case back.png" class="case_back">
									 <div class="dp-border circle" style="z-index:145; position: absolute; top:70%; right: 0; width: 40px; height: 40px;">
								                        <div class="dp circle" style="width: 40px; height: 40px;">
								                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
								                        </div>
								                    </div>

							</div>
							
									</div>';
					}
					elseif(strcmp($row['case_type'], "heavy")==0)
					{
						echo '<div style="display: inline-flex ; height: 180px; width: 240px; position: absolute; right: 80%; -webkit-filter: drop-shadow(0 0 0.8rem black); filter: drop-shadow(0 0 0.8rem black);  ">	
							<img src="'.$row['skinOfCase'].'" style=" margin:1%; height: 95%; position: absolute; top:-18%; right: 0%;  z-index:103 ; filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white) ; -webkit-filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white)  ;">
	 
	 						<div class="case_box" >

								  

								    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
								  	<div id="case-price" class="fav_font">
								  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
								  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
								  	</div>
								    <span class="bym fav_font" >By<br></span>
								    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

								    <img src="../case images/Heavy only.png" style="position: absolute; width:98%; margin-left: 2%;z-index: -2; margin-top:-6%;">

								    <svg  id="heavy_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="2.5 2.167 495 359.5" enable-background="new 2.5 2.167 495 359.5" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 1%; margin-top:-12px; z-index: 1 ; mix-blend-mode: soft-light;" >

								    <path  d="M17,199.917c0,0-3-2.25-7.25-2.5L8,180.167l1.5-1.25L4.75,27.667l-1.5-1.25l0.5-17.75c0,0,3.75,3,7.75-1.75
										L66,8.167c0,0,0.625-1.375,9.125-0.125l0.25-5.375l13.25,0.125c0,0-0.125,7.625,4,5h5.25l0.5,1.25l85.875,0.75l3.5-2.125h11.375
										l3.75-0.625l4.25,2.75L308.082,12c0,0,3.085-3.917,8.418-0.833l1.166-0.833l-0.084-4.25l11.667-0.167v4.167
										c0,0,1.25,1.834,2.583,0.917l4.25-0.25l1,1.083l44.25,0.25L381.166,181l-44.916,2.333L336.166,185l2.916,0.416l0.084,1.166
										l-17.501,1.334v-1.5l-2.083-2L90.083,196.25l0.084,1.916l2.167,1.75l255.25-13.418l37.75-2.416l111.25,21.582l0.29,8.625l-1,1.375
										l-2,82.75l0.75,0.25l-0.125,17l-18.125,3.75L475,318.542l-166.25,18.375l-10.75,1.75l-0.5-0.75l-193.375,20.25l-2.375,1.375
										l-22.375,1.25l-6.125-4.875v-1.375l-20.75-18.75l-1.125-0.125l-3.375-3.5l-17.875-16.25l-1.75,0.375l-4.5-4.125l-0.125-17.5
										l-4.125-90.25l52.875-3.25l-1.375-3.625L17,199.917z"/>

									
									</svg>

									 
									 <img src="../images/case back.png" class="case_back">
									 <div class="dp-border circle" style="z-index:145; position: absolute; top:70%; right: 0; width: 40px; height: 40px;">
								                        <div class="dp circle" style="width: 40px; height: 40px;">
								                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
								                        </div>
								                    </div>

							</div>
							
									</div>';
					}
					elseif(strcmp($row['case_type'], "sniper")==0)
					{
						echo '<div style="display: inline-flex ; height: 180px; width: 240px; position: absolute; right: 80%; -webkit-filter: drop-shadow(0 0 0.8rem black); filter: drop-shadow(0 0 0.8rem black);  ">	
							<img src="'.$row['skinOfCase'].'" style=" margin:1%; height: 95%; position: absolute; top:-18%; right: 0%;  z-index:103 ; filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white) ; -webkit-filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white)  ;">
	 
	 						<div class="case_box" >

								  

								    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
								  	<div id="case-price" class="fav_font" >
								  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
								  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
								  	</div>
								    <span class="bym fav_font" >By<br></span>
								    <span class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

								    <img src="../case images/Sniper Only.PNG" style="position: absolute; width:92%; margin-left: 5%;z-index: -2; margin-top:6.5%;">

								    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93%" height="92%" viewBox="2.375 1.625 488 263.875" enable-background="new 2.375 1.625 488 263.875" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 5%; margin-top:-14px; z-index: 1 ; mix-blend-mode: multiply;" >

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
									 <div class="dp-border circle" style="z-index:145; position: absolute; top:70%; right: 0; width: 40px; height: 40px;">
								                        <div class="dp circle" style="width: 40px; height: 40px;">
								                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
								                        </div>
								                    </div>

							</div>
							
								</div>';
					}
					elseif(strcmp($row['case_type'], "knife")==0)
					{
						
						echo '<div style="display: inline-flex ; height: 180px; width: 240px; position: absolute; right: 80%; -webkit-filter: drop-shadow(0 0 0.8rem black); filter: drop-shadow(0 0 0.8rem black);  ">	
							<img src="'.$row['skinOfCase'].'" style=" margin:1%; height: 95%; position: absolute; top:-10%; right: 0%;  z-index:103 ; filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white) ; -webkit-filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white)  ; ">
	 
	 						<div class="case_box" >

								  

								    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
								  	<div id="case-price" class="fav_font" >
								  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
								  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
								  	</div>
								    <span class="bym fav_font" >By<br></span>
								    <span class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

								    <img src="../case images/Knife Only.png" style="position: absolute; width:73%; margin-left: 20%;z-index: -2; margin-top:6%;">

								    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80%" height="67%" viewBox="2.084 1.333 492.584 363.25" enable-background="new 2.084 1.333 492.584 363.25" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 16%; margin-top:6%; z-index: 1 ; mix-blend-mode: soft-light;  -webkit-filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row['case_color'] , '(' , ')').', 0.8)); filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row['case_color'] , '(' , ')').', 0.9));" >

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

									 
									 <img src="../images/case back.png" class="case_back">
									 <div class="dp-border circle" style="z-index:145; position: absolute; top:70%; right: 0; width: 40px; height: 40px;">
								                        <div class="dp circle" style="width: 40px; height: 40px;">
								                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
								                        </div>
								                    </div>

							</div>
							
								</div>';
					}
					elseif(strcmp($row['case_type'], "glove")==0)
					{
						echo '<div style="display: inline-flex ; height: 180px; width: 240px; position: absolute; right: 80%; -webkit-filter: drop-shadow(0 0 0.8rem black); filter: drop-shadow(0 0 0.8rem black);  ">	
							<img src="'.$row['skinOfCase'].'" style="margin:1%; height: 95%; position: absolute; top:18%; right: 9.5%;  z-index:103 ; filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white) ; -webkit-filter: drop-shadow(-3px 3px 1px  white) drop-shadow(3px -3px 0 white)  ; transform: rotate(270deg); ">
								
					
							 						 <div style="background-color: rgb('.get_string_between($row['case_color'] , '(' , ')').') ; opacity:0.6;  mix-blend-mode: soft-light; position: absolute; top:0px;right:0px; left:auto; width: 222px; height: 175px ;z-index:-100; ">
											 </div>
	 						
	 						<div class="case_box" >

								  

								    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
								  	<div id="case-price" class="fav_font" >
								  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
								  		<span style="margin-left: -20px; display: inline; float: right; width: 80px ; text-align:left ;">'.$row['case_price'].'</span>
								  	</div>
								    <span class="bym fav_font">By<br></span>
								    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

								    <img src="../case images/Gloves Only.png" style="position: absolute; width:61%; margin-left: 35%; margin-top:0%; z-index:0 ;mix-blend-mode: overlay; ">

								 	<img src="../images/case back.png" class="case_back">

									 <div class="dp-border circle" style="z-index:145;position: absolute; top:70%; right: 0; width: 40px; height: 40px;">
								                        <div class="dp circle" style="width: 40px; height: 40px;">
								                            <img src="'.$row['avatar'].'" title="Seller Avatar" alt="Image" />
								                        </div>
								     
									</div>
								</div>

										</div>';
					}
				?>

				

			</div>
			<!-- div for open case button-->

			<?php

			if(!isset($_SESSION['steamid']))
			{
				echo '<div class="fav_font" id="enclose">
						<div  id="fontOn" style="cursor:auto;">
							<span class="freezeText">SIGN IN</span>
							<span class="freezeText" id="lit">to</span>
							<span class="freezeText">Open case</span>
						</div>
						<div id="parallelogram"></div>
					 </div>';
			}
			else
			{

				?>
			<div id="case_price_button">
				
				<!-- roulette for our site-->
				<div id="mysite-roulette-container" style="display: none; position: absolute; top:-30%; left:36%;">
					<div class="arrowdown2"></div>
					<div class="wraper">
						  <div class="window">
						  	  <ul class="list">

						  	  	<?php
						  	  		$item_table= $row['case_desc_table'] ;
									$sql1 = "SELECT * FROM ".$item_table." ";


									$result_li = $conn->query($sql1);

									if ($result_li->num_rows > 0)
									{
									
										$id_count=1;

										while ($row_li=mysqli_fetch_array($result_li))
							  			{
							  					echo ' <li id="roller_id'.$id_count.'">
									                        <div class="rouimg-box">

									                            <img src="'.$row_li['case_item_image'].'" alt="Image" title="Case Item Image" id="roller_image'.$id_count.'">
									                        
									                            <div class="bottom-shadow"></div>
									                        
									                            <span style="position: absolute; top:2%; margin-left: 5px; z-index: 0; color:#ab2035; font-size:10px; font-weight:900;" class="fav_font">';
																	if (stripos($row_li['weapon_name'], "StatTrak") !== false) 
																		echo "ST";//echo substr($row_li['weapon_name'], 0,11);
															 		 else
															  			echo '';
													
																echo '</span>
									                        </div>
									                        <div class="rouinfo-box" style="background-color:'.$row_li['rarity'].';">

										                        <input type="hidden" value="'.$row_li['weapon_name'].'" id="roller_itemWeaponName'.$id_count.'">
										                        <input type="hidden" value="'.$row_li['skin_name'].'" id="roller_itemSkinName'.$id_count.'">  ';

									                           echo '
																<div style="width:100%; height:16px; max-height:16px; overflow:hidden ;">

														
																		
																			<div style="color: white; display: inline; float: left; font-weight: 900; width: 60px; max-height: 16px; font-size: 9px; overflow: hidden; " class="fav_font">';
																			if (stripos($row_li['weapon_name'], "StatTrak") !== false) 
																				echo substr($row_li['weapon_name'], 12,-1);
																			  else
																			  	echo $row_li['weapon_name'];
																			echo '</div>
																			<div style="font-weight: 900; color: white; display:inline; float:left ;">|</div>
																			<div class="fav_font" style="color: white; font-weight: 500; font-style: italic; display: inline; float: right; width: 62px; max-height: 16px; font-size: 9px; text-align: left;  overflow: hidden;">'.$row_li['skin_name'].'</div>

																</div>

									                             <div id="roller_item_finishStyle">
																	<div id="roller_item_finishStyle_left" class="fav_font">Finish Style</div>
																	<div id="roller_item_finishStyle_middle" class="fav_font">:</div>
																	<div id="roller_item_finishStyle_right" class="fav_font">';


																	if (stripos($row_li['weapon_name'], "StatTrak") !== false) 
																	{
																		//PRESENT
																		 $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".  strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "",  substr($row_li['weapon_name'], 12,-1))))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row_li['skin_name'])))."' ";

																	}
																	else
																	{

																		   $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row_li['weapon_name'])))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row_li['skin_name'])))."' ";
																	}  

																	//   echo '<script type="text/javascript">alert("'.$finish_sql.'");</script>';

																	$fr = $conn->query($finish_sql);

																	if ($fr->num_rows > 0) {
																	    
																	    $f_row = $fr->fetch_assoc();
																	    $roller_itemFinishStyle = strtolower(reset($f_row));
																	    echo strtolower(reset($f_row));
																	} 
																	else {
																	    echo "-";
																	}

																	echo '<input type="hidden" value="'. $roller_itemFinishStyle.'" id="roller_itemFinishStyle'.$id_count.'"></div>
																 </div>
																
																<div id="roller_item_Exterior">
																	<div id="roller_item_Exterior_left" class="fav_font">
																		<input type="hidden" value="'.$row_li['exterior'].'" id="roller_itemExterior'.$id_count.'">Exterior</div>
																	<div id="roller_item_Exterior_middle" class="fav_font">:</div>
																	<div id="roller_item_Exterior_right" class="fav_font">'.$row_li['exterior'].'</div>
																</div>
																

									                           
									                        </div>
				                					    </li>';

				                				$id_count= $id_count+1;
							  			}
							  		}	

						  	  	?>
				                   
				                </ul>
				             </div>
    				</div>
				</div>

				<div id="myModal" class="modal" style="display: none; z-index:1200; overflow: hidden;">

					  <!-- Modal content -->
					  <div class="modal-content">
					    <div class="modal-header">
						  <div style="text-align: center;"">
						    <span class="fav_font1 you_got">
						        You Got
						    </span>

							</div>
					     </div>
					   
					    <div class="modal-body">
					    		<img id="case_win_image" src="../images/ak47.png" alt="Image" title="Skin Won !" class="skin_won">
					    		<div class="fav_font1 skin_won_name">
					    			<p id="case_win_item_weapon_name">AK-47</p> 
					    			<p id="vertical_line">|</p>
					    			<p id="case_win_item_skin_name">The Empress</p>
					    		</div>
					    		<div id="skin_won_detail">
									<div id="skin_won_detail_upper">
										<div id="skin_won_detail_upper_left" class="fav_font1">Finish Style</div>
										<div id="skin_won_detail_upper_middle" class="fav_font1">:</div>
										<div id="skin_won_detail_upper_right" class="fav_font1"><p id="case_win_item_finishStyle">-</p></div>
									</div>
									<div id="skin_won_detail_lower">
										<div id="skin_won_detail_upper_left" class="fav_font1">Exterior</div>
										<div id="skin_won_detail_upper_middle" class="fav_font1">:</div>
										<div id="skin_won_detail_upper_right" class="fav_font1"><p id="case_win_item_exterior">-</p></div>
									</div>
								</div>

					      
					    </div>
					    <div class="modal-footer" >
						      <div class="continue fav_font1" onclick="gen_trade_offer()" >Continue</div>
						      
						 
					    </div>
					  </div>

				</div>

				<div id="case_similar" class="case_similar fav_font" style=" 
				<?php 
					if(strcmp($row['steamid'] ,$_SESSION['steamid'])==0)
					{
						echo 'display: inline;';  
							global $seller_account ;
							$seller_account = $row['steamid'];
					}
					else
					{
						echo 'display: none;';
						global $seller_account ;
							$seller_account = $row['steamid'];
					}
				?>">
					You Cannot Open Your Case
				</div>

				<div id="insuff_bal" class="insuff_balance fav_font" style="<?php 
					global $user_amount;
 
											
						if($row['case_price'] <= $user_amount )
						{
								echo 'display: none;';
						}

				 ?>">You have Insuffcient Balance</div>

				 <audio id="audio" src="../case_roulette/snd/roulette_start.wav" volume="0.2"></audio>
				  <audio id="audio_final" src="../case_roulette/snd/roulette_stop.wav" volume="0.2"></audio>

				<div id="enclose" class="open_case" style="<?php 
					global $user_amount;
 
											
						if($row['case_price'] > $user_amount || strcmp($row['steamid'] ,$_SESSION['steamid'])==0)
						{
							$_SESSION['cp']=$row['case_price'];
								echo 'opacity: 0.3; pointer-events: none;';

						}
						else
						{
							$_SESSION['cp']=$row['case_price'];

						}


				?>"	>
					<div  id="fontOn">
						<span class="freezeText">Open Case for </span>
						<span class="freezeText" id="lit">$</span>
						<span class="freezeText"><?php echo $row['case_price'];?></span>
					</div>
					<div id="parallelogram"></div>
				</div>
			</div>
			<?php
			}
			?>
		</div>


		<div id="lower_container">
			<div id="line_break">
				<div class="case-contain-line" style="color: #0cecaf;">Case Contains</div>
			</div>
			<div id="cases_showcase">
				
					<!--div for displaying case items-->
					<?php 

						$_SESSION['caseItem_desc_table']= $row['case_desc_table'] ;
						 $item_table= $row['case_desc_table'] ;
						 $sql1 = "SELECT * FROM ".$item_table." ";


						$result1 = $conn->query($sql1);

						if ($result1->num_rows > 0)
						{
							$col_count=0 ;
							echo '<div style="width:100%; height: 460px ; overflow-y:scroll ; padding-top:20px ;">
							<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:150px ;">';

						while ($row1=mysqli_fetch_array($result1))
				  		{	 
				    		array_push($item, $row1['skin_name']);

				    		array_push($odds, $row1['odd']);

				    		array_push($item_weapon, $row1['weapon_name']);
				    		array_push($itemImage, $row1['case_item_image']);

				    		array_push($itemExterior, $row1['exterior']);
				    		array_push($itemRarity, $row1['rarity']);
				    		

				    		echo '
					      		 <li style="text-align:center; align:center; padding:10px ;">
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

												
													<div style="width:fit-content ;padding:0 2px ; overflow-wrap: break-word ; display:inline-flex ;">
														<div id="case_contain_weapon_name" class="fav_font">';
														if (stripos($row1['weapon_name'], "StatTrak") !== false) 
															echo substr($row1['weapon_name'], 10,-1);
														  else
														  	echo $row1['weapon_name'];
														echo '</div>
														<div style="font-weight: 900; color: white; width: 0.9%; padding:0 2px ;">|</div>
														<div class="fav_font" id="case_contain_weapon_skin_name">'.$row1['skin_name'].'</div>
													</div>
												

											</div>
											<div id="case_contain_item_extras">
												<div id="case_contain_item_extras_upper">
													<div id="case_contain_item_extras_upper_left" class="fav_font">Finish Style</div>
													<div id="case_contain_item_extras_upper_middle" class="fav_font">:</div>
													<div id="case_contain_item_extras_upper_right" class="fav_font">';
													


													if (stripos($row1['weapon_name'], "StatTrak") !== false) 
													{
														//PRESENT
														 $finish_sql="SELECT finishStyle FROM finishStyle_csgo.fs WHERE weapon_name = '".  strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "",  substr($row1['weapon_name'], 10,-1))))."' AND skin_name = '".strtoupper(trim(preg_replace("/[^a-zA-Z0-9- ,]/", "", $row1['skin_name'])))."' ";

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

						
					?>
			</div>
		</div>
	</div>


	<?php

			}

			
		}

		else
		{
			echo '<script type="text/javascript">
					console.log("Not available") ;
				</script> ' ;
		}

		//unset before setting

		unset($_SESSION['weapon_name_array']);

		unset($_SESSION['skin_name_array']);

		unset($_SESSION['odds_array']);

		unset($_SESSION['item_image_array']);

		unset($_SESSION['item_exterior_array']);

		unset($_SESSION['item_rarity_array']);
		//now set

		$_SESSION['weapon_name_array']=$item_weapon ;

		$_SESSION['skin_name_array']=$item ;

		$_SESSION['odds_array']=$odds ;

		$_SESSION['item_image_array']=$itemImage ;

		$_SESSION['item_exterior_array']=$itemExterior ;

		$_SESSION['item_rarity_array']=$itemRarity ;


		

		

	?>

	<script type="text/javascript">
		var id="<?php  echo $_SESSION['steamid']; ?>";
		var price_case= "<?php echo $_SESSION['cp'];?>";
		var session_name=id;
		var ua="<?php echo $user_amount ;?>";
		var sell_case_id = "<?php echo $case_id ;?>"
	</script>


	

	<script type="text/javascript">
			var case_seller= "<?php global $seller_account; echo $seller_account; ?>";

	</script>
	
	
<!--include footer here later on-->
	<footer class="foo">
		<svg width="50px" height="50px" style="margin-left: 30px;">
			<image xlink:href="../logoheader.svg" width="50" height="50"/>
		</svg>
		<article>
			<span class="Hfont">CSGOVIRAL.COM © 2018 <a href="terms and service" target="_blank"> Terms of Service</a></span>
			<p class="Bfont"><br>You can open various cases on our website CS:GO at best prices.</p>
			<p class="Bfont"><br>All trades work in the automatic mode via Steam bots.</p>
		</article>
		<article style="position: relative; left:40%;">
			<span class="support">Support : csgoviral9@gmail.com </span>
			
		</article>
		
		<img id="chat_icon" src="../images/chat_icon.PNG" style="margin-left: 30px;">
	</footer>
	

	
	
</body>


<script type="text/javascript">


		var n;
		var trsid;
         $(document).ready(function () {
          
            for (i = 0 ; i < 36 ; i++)  // as w have 5 items already in ul , so i run it 35 times to get toal 40 items 
            { 
            	$.ajax({

            		  type: "POST",
            		 
					  url: "../intermediate/item_select.php"
					  
					}).done(function( resp ){
						//resp is the randomly selected item
						//add tha following li in list class
						
						 $(".list li:eq("+resp+")").clone().appendTo(".list");

					});
            }

            $('.open_case').click(function () {

            	var audio = document.getElementById("audio"); 
       			audio.play();

            	$.ajax({  
				    type: 'POST',  
				    url: '../intermediate/case_sold.php', 
				    data: 
				    { 
				    	casePrice : price_case, 
				    	sn:session_name , 
				    	ua:ua, 
				    	caseSeller:case_seller ,
				    	sci:sell_case_id
				    },
				    success: function(response) {
				        trsid = response ;

				        document.getElementById('wallet_balance').innerHTML= ua-price_case;
				    }
				});

            	document.getElementById('enclose').style.display="none";


            	document.getElementById('mysite-roulette-container').style.display="inline";

                $('.window').css({
                    right: "0"
                })

                $('.list li').css({
                    border: '2px solid transparent'
                })

                function selfRandom(min, max) {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }

                var x = selfRandom(11, 36);

                var y = Math.floor(Math.random()*60) - 60;

                
                
                
                 n = $('.list li:eq('+x+')').attr('id');
               
                
                $('.window').animate({
                	
                    	right: ((x*132)+(x*4-12)-119) -100 + y
                  
                    	
                }, 8000, 'swing');

               
            });
        });

        
</script>

<script type="text/javascript">
	function gen_trade_offer()
	{
		document.getElementById('myModal').style.display="none";
		window.location="index.php" ;
	}
</script>

<script>
	  $('.open_case').click(function () {
	  	setTimeout(function(){
                	

                document.getElementById('audio_final').play();

                
		    	document.getElementById('case_win_image').src=document.getElementById('roller_image'+n[n.length -1]).src;

		    	document.getElementById('case_win_item_weapon_name').innerHTML=document.getElementById('roller_itemWeaponName'+n[n.length -1]).value.replace(",", "  ").replace(",","  ");
		    	document.getElementById('case_win_item_skin_name').innerHTML=document.getElementById('roller_itemSkinName'+n[n.length -1]).value;
		    	document.getElementById('case_win_item_exterior').innerHTML=document.getElementById('roller_itemExterior'+n[n.length -1]).value;

		    	document.getElementById('case_win_item_finishStyle').innerHTML=document.getElementById('roller_itemFinishStyle'+n[n.length -1]).value;


		        document.getElementById('myModal').style.display="block";//show();  

		        $.ajax({  
				    type: 'POST',  
				    url: '../intermediate/case_open_updating.php', 
				    data: 
				    { 
				    	trsid:trsid, 
				    	csid: "<?php echo $case_id;?>" ,
				    	skin_won : document.getElementById('case_win_image').src ,
				    	skin_name : document.getElementById('case_win_item_skin_name').innerHTML ,
				    	skin_etrr :document.getElementById('case_win_item_exterior').innerHTML,
				    	wpn :document.getElementById('case_win_item_weapon_name').innerHTML,
				    	sellerid : case_seller, //seller id
				    	cnm : document.getElementById('hid_cn').value  ,
				    	cpr : document.getElementById('cpr').value
				    	 		
				    },
				    success: function(response) {
				        //trsid = response ;
				        //document.getElementById('wallet_balance').innerHTML= ua-price_case;
				    }
				});

				//update thT the seller case has been bought means sold

				$.ajax({  
				    type: 'POST',  
				    url: '../intermediate/case_open_sellerupdating.php', 
				    data: 
				    { 
				    	sellerid:case_seller, 
				    	csid: "<?php echo $case_id;?>" 
				    	
				    },
				    success: function(response) {
				        //trsid = response ;
				        //document.getElementById('wallet_balance').innerHTML= ua-price_case;
				    }
				});


	    		}, 8100);
	  });
	 
</script>

<script type="text/javascript" src="../js/translate.js"></script>	
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



</html>
<?php

$conn->close();
}

?>


	