<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		
	{  echo '<html><head><title>CSGOVIRAL</title><meta name="viewport" content="width=device-width, initial-scale=1"></head><body style="background-color: #f7f7f7; font-family: sans-serif; ">
			<div style="width:56%; height:auto; margin-right: 22%; margin-left: 22%; margin-top:35%;">
				<img src="images/unreachable.png" style="width:50px; height:50px; float: left;"> <br> <br> <br>
				<p style="float: left;">
					<h3 style="color: #716f6f;">This site can\'t be accessible on Mobile Devices .</h3> <br>
					<p style="color:#969696">Try connecting website from Desktop <br> <br>
					ERR_NOT_SUPPORTED_DEVICE</p>
				</p>
			</div>
		</body></html>
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

	 <meta name="description" content="Csgoviral is the website where you can open CS:GO cases to both win great skins and make money !">
    <meta name="keywords" content="csgoviral csgoviral.com case opening game site luck skins items cs go csgo roulette rare weapon make money odds skin trading create own case  cashout real money no rigging">

    <meta property="og:title" content="Csgoviral.com - By the Player, for the Player">
    <meta property="og:description" content="Csgoviral.com - Sell cases using your own skins and buy cases to win amazing skins. Cashout the amount into bank account and have fun !">



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="images/logo.png" rel="icon" type="image/icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="js/closeToast.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/template.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/create case.css">
	<link rel="stylesheet" type="text/css" href="css/modal_only.css">

	<script type="text/javascript" src="js/notification.js"></script>
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
			width: 100vw;
			height: auto;
			opacity: 0.1;
			

		}
		@font-face {
		    font-family: HandelGotDBol;
		    src: url(font/HANDGOTL.TTF);
		}
		@font-face {
		    font-family: HandelGotDBol2;
		    src: url(font/HandelGotDBol.ttf);
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
		   
		    position: fixed; /* Stay in place */
		    z-index: 2011; /* Sit on top */
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

		

		#redirect_link {
			float: right;
			position: absolute;
			/*z-index: 2000 ;*/
			top:0%;
			right: 3%;

			
			text-decoration: none;

		}

	


			

		

	</style>
</head>
<body style="position: relative;  min-width: 1100px; top:0px;">


	
	<header>
		<a href="javascript:void(0)" style="cursor: pointer; text-decoration: none ;">
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
									//make  an entry into onlilneUserCountDb

									$_SESSION['last_acted_on'] = time();

									$person_a_name = $steamprofile['personaname'];
									$avatar = $steamprofile['avatarfull'];
									$steamid = $steamprofile['steamid']; 

									$profile_url = $steamprofile['profileurl'] ;
									$real_name = $steamprofile['realname'] ;


									//make a random name for the credit table
									$credit_table = "Credit_".$steamid ;


									$online = $connection->query("SELECT * FROM online_users.onlineUserCOunt WHERE uniqid = '$steamid' ");

									if($online->num_rows==1)
									{
										$onlineIns = $connection->query("UPDATE online_users.onlineUserCOunt set loginTime = '".date("Y-m-d H:i:s")."' WHERE uniqid ='$steamid' ");
									}
									else if($online->num_rows==0)
									{
										$onlineIns = $connection->query("INSERT INTO online_users.onlineUserCOunt (uniqid , loginTime) VALUES ('$steamid' , '".date("Y-m-d H:i:s")."') ");
									}

									$query = $connection->query("SELECT * FROM user_data WHERE steamid ='$steamid' ");

									if($query->num_rows==0)
									{ 
										// new user . First time login in site


										//create history table long

										$mbr_history ="MBR_history_".$steamid ;
										$cur_history = "history_".$steamid ;

										$create_mbr_history = "CREATE TABLE IF NOT EXISTS history_user.".$mbr_history." ( sno INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY , flag VARCHAR(2) NOT NULL , content VARCHAR(500) NOT NULL ,  case_name  VARCHAR(16) NOT NULL , case_price VARCHAR(5) NOT NULL ,  skin_get VARCHAR(400) NOT NULL , weapon_name  VARCHAR(40) NOT NULL , skin_name VARCHAR(30) NOT NULL , skin_extr VARCHAR(20) NOT NULL , history_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL ) " ;

										$connection->query($create_mbr_history);

										//create history table short 

										$create_cur_history = "CREATE TABLE IF NOT EXISTS history_user.".$cur_history." (sno INT(50) NOT NULL AUTO_INCREMENT PRIMARY KEY , flag VARCHAR(2) NOT NULL , content VARCHAR(500) NOT NULL ,  case_name  VARCHAR(16) NOT NULL , case_price VARCHAR(5) NOT NULL ,  skin_get VARCHAR(400) NOT NULL , weapon_name  VARCHAR(40) NOT NULL , skin_name VARCHAR(30) NOT NULL , skin_extr VARCHAR(20) NOT NULL , history_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL  )" ;

										$connection->query($create_cur_history);


										//initialise the user case table , as empty table
										$user_case_table = "User_Case_Table_".$steamid ;

										$create_user_profile_tbl= "CREATE TABLE IF NOT EXISTS user_profile_case_db.".$user_case_table." (sell_case_id INT(50) NOT NULL PRIMARY KEY, case_name VARCHAR(16) NOT NULL, case_type VARCHAR(12) NOT NULL, case_color VARCHAR(20) NOT NULL, case_price VARCHAR(5) NOT NULL, skinOfCase VARCHAR(400) NOT NULL, case_desc_table VARCHAR(50) NOT NULL, case_stat VARCHAR(10) NOT NULL  )" ; 

										$connection->query($create_user_profile_tbl);


										//initialise the user case open and case sold table . They will be same just the difference of perspective

										$user_case_open_table = "User_Case_Open_Table_".$steamid ;

										$create_user_case_open_tbl= "CREATE TABLE IF NOT EXISTS userCaseOpenDb.".$user_case_open_table." (case_open_txid VARCHAR(200) NOT NULL , sell_case_id INT(50) NOT NULL , weapon_name VARCHAR(40) NOT NULL , skin_won VARCHAR(400) NOT NULL, skin_name VARCHAR(30) NOT NULL , skin_extr VARCHAR(20) NOT NULL , buy_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL)" ; 

										$connection->query($create_user_case_open_tbl);

										//

										$insert =$connection->query("INSERT INTO user_data (steamid,personaname,profile_url,real_name,avatar,cases_table,credit_money_table) VALUES ('$steamid','$person_a_name','$profile_url','$real_	name','$avatar', '$user_case_table','$credit_table' )");

										//now create a default item hold table for every user 

										$holdItem = "holdItem_user_".$steamid ;

										if($connection->query("CREATE TABLE IF NOT EXISTS holdItem.".$holdItem." (sno INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, flag VARCHAR(3) NOT NULL , cn VARCHAR(16) NOT NULL, ct VARCHAR(12) NOT NULL, cid INT(50) NOT NULL , cc VARCHAR(20) NOT NULL , cp VARCHAR(5) NOT NULL  , cskin VARCHAR(400) NOT NULL  , cdt VARCHAR(50) NOT NULL , csgot VARCHAR(400) NOT NULL  )")===TRUE)
										{

										}
										else
										{
											echo '<script type="text/javascript">
									                    alert("Error Occured !".$connection->error);
									                    </script> ' ;
										}

										//now create the credit table in credit database

										$credit_table_sql= "CREATE TABLE IF NOT EXISTS credit_system.".$credit_table." (localtx_id VARCHAR(1000) NOT NULL , buyer VARCHAR(20) NOT NULL , seller VARCHAR(20) NOT NULL, credit_for_case_id VARCHAR(100) NOT NULL , amount FLOAT(10,4) NOT NULL , f_amt VARCHAR(10) NOT NULL  , credit_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL  )" ; 

										if ($connection->query($credit_table_sql) === TRUE) 
										{  
											//insert a default 0 tx which denoted the user account balance 
												$ins_tx =$connection->query("INSERT INTO credit_system.".$credit_table." (localtx_id, buyer, seller, credit_for_case_id ,amount , f_amt ) VALUES ('0', '$steamid', '-', '-' ,  '0' ,'-' )");											
										}
										else
										{
											echo '<script type="text/javascript">
									                    alert("Error Occured !".$connection->error);
									                    </script> ' ;
										}



									}
									else 
									{
										//we need to check that is something has been modified or not 

										//first get the data asin row fetch from $query

										//$res = mysqli_fetch_row($query) ;

										$res = $query->fetch_assoc();
										
										if( ( strcmp($person_a_name , $res['personaname'] )!=0 ) || ( strcmp($real_name , $res['real_name']) !=0) || ( strcmp($avatar , $res['avatar'])!=0) )
										{
											$mod_query_sql = "UPDATE csgoviral.user_data SET personaname='$person_a_name' , profile_url='$profile_url' , real_name='$real_name', avatar='$avatar' WHERE steamid= $steamid ;"  ;

											if ($connection->query($mod_query_sql) === TRUE) {
												  //working
											} 
											else {
											   //not working
											}

											
										}
										
									}

									$_SESSION['personaname'] = $person_a_name ;
									$_SESSION['profile_url'] = $profile_url ;
									$_SESSION['real_name'] = $real_name ;
									$_SESSION['avatar'] = $avatar ;
									$_SESSION['steamid'] = $steamid ;
									$_SESSION['case_table'] = $case_table ;
									$_SESSION['credit_table'] = $credit_table ;


	    							
								     echo '<a id="link_profile" href="profile"  style="text-decoration :none  ;" title ="Go to profile page !" ><div style="position: absolute; top: 1px; left: 1px;  z-index: 1001; margin-left:-8px;   margin-top:-5px;">
								                
								                    <div class="dp-border circle">
								                        <div class="dp circle">
								                            <img src="'.$steamprofile['avatarfull'].'" title="" alt="" />
								                        </div>
								                    </div></a>  ';


								     echo   " <div style='color: white; float: left; font-size: 18px; font-weight: 400; letter-spacing: 1px;
								       margin-top: -55px; margin-left: 65px; width:fit-content; max-width:160px; max-height:25px; overflow:hidden;' class='fav_font'>
								       	<a id='link_profile' href='profile'  style='text-decoration :none  ;' class='fav_font'>".$steamprofile['personaname']."</a>
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
							           
							          echo "</div></div>";

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

			<?php
			   //chek for the trade url present or not , if not ask for it
			
				if(isset($_SESSION['steamid']))
				{	        
				    $tradeUrl = $connection->query("SELECT trade_url_val FROM trade_url WHERE steamid ='".$_SESSION['steamid']."' ");


				    if($tradeUrl->num_rows==0)
				    { //  tradde url not present in the database

						echo '<div id="myModal" class="modal" style="display: block;">

							  <!-- Modal content -->
							  <div class="modal-content">
							    <div class="modal-header">
								  <div style="text-align: center; font-size: 35px; color : white;">
								    <span class="fav_font">
								        CSGOVIRAL
								    </span>

									</div>
							     </div>
							      <div class="small-line" style="width: 90%; margin-bottom:10px;"></div>
							    <div class="modal-body">
							      <h3 style="color:white; font-size:20px; margin-bottom:20px; margin-left:7%; margin-top:10px;" class="fav_font">Enter your Trade Url</h3>

							      <h4 style="margin-bottom:15px;"><a href="'.$_SESSION['profile_url'] .'tradeoffers/privacy" target="_blank" class="fav_font" style="margin-left:7%; font-weight:600 ;"> Where can I find my Trade Url ?  </a> </h4>
		
							      <p style="font-weight:400; margin-left:7%; font-size:15px;  margin-top: 5px; margin-bottom:10px;" class="fav_font">* Don\'t use any URL shortner for tradeUrl . Enter complete tradeUrl , else trade will not be send to you ! </p>


							      <form id="tradeUrlForm" action="trade/trade.php" method="post">

							      <input type="text" name="tradeURL" required style="height:2.5vh; padding: 0.7vh; font-size:1.5vw;  border: 2px 
							       solid rgba(0,0,0,0);width :86%; margin-left:7%;  margin-bottom:18px;" class="fav_font">

							       ';

							        //show only the qty is greater than 0 and <=10
							       	$promocodequery = $connection->query("SELECT qty from promoCodes.code ");
							       	if($promocodequery->num_rows ==1)
							       	{
							       			$prc_row = $promocodequery->fetch_assoc();
							    			if(!(reset($prc_row)<=0))
							    			{
							    				echo '
						    						  <h4 class="fav_font" style="margin-top:10px; margin-bottom:10px; font-weight:400 ; font-size:15px ; margin-left:7%;">Have a Promo Code ?</h4>

						    						  <input type="text" name="promoCode" style="height:2.5vh; padding: 0.7vh; font-size:1.5vw;  border: 2px solid rgba(0,0,0,0);width :17%; margin-left:7%;  margin-bottom:25px;" class="fav_font">							
							    					';

							    			}

							    
							  		}

							      
							    echo '</div>
							    <div class="modal-footer" >
							      <button name="continue" class="fav_font" style="cursor:pointer; padding-top: 10px; padding-bottom: 10px; padding-right: 25px; padding-left: 25px; background-color:#3b3513; border-radius: 3px;  border: 3px solid #d2b315;  font-size: 1vw; margin: 0 auto ; left:0; right :0;  cursor:pointer;">Continue</button>
							      </form>
								 
							    </div>
							  </div>

						</div>
						<script type="text/javascript">
							document.getElementById("link_profile").style.pointerEvents="none" ;
															
						</script>
						' ;
					}
					else
					{
					
						while($tradeUrl_r = $tradeUrl->fetch_assoc()) {
				        	
				        	$_SESSION["tu"] = $tradeUrl_r["trade_url_val"];
				   		 }
					}
				}
				 $connection->close();


				 $pcStat = $_GET['pcStat'];

				 if($pcStat==1)
				 {
				 		echo '
				 				<div id="myModal" class="modal promoCodeStatus" style="display: block;">

							  <!-- Modal content -->
							  <div class="modal-content" style="width:50%;">
							    <div class="modal-header">
								  <div style="text-align: center; font-size: 35px; color : white;">
								    <span class="fav_font">
								        CSGOVIRAL
								    </span>

									</div>
							     </div>
							      <div class="small-line" style="width: 90%; margin-bottom:10px;"></div>
							    <div class="modal-body">
							      
							     
							      <p style="font-weight:400; margin-left:7%;  text-align:center ; font-size:20px;  margin-top: 10px; margin-bottom:20px;" class="fav_font">Success ! Promo Code is applied . Check Your wallet balance . </p>


							      </div>
							    <div class="modal-footer" >
							      <button id="exit"  class="fav_font" style="cursor:pointer; padding-top: 10px; padding-bottom: 10px; padding-right: 25px; padding-left: 25px; background-color:#3b3513; border-radius: 3px;  border: 3px solid #d2b315;  font-size: 1vw; margin: 0 auto ; left:0; right :0;  cursor:pointer;">Exit</button>
							  
								 
							    </div>
							  </div>

						</div>
						
				 			';
				 }
				 elseif ($pcStat==2)
				 {
				 		echo '
				 				<div id="myModal" class="modal promoCodeStatus" style="display: block;">

							  <!-- Modal content -->
							  <div class="modal-content" style="width:50%;">
							    <div class="modal-header">
								  <div style="text-align: center; font-size: 35px; color : white;">
								    <span class="fav_font">
								        CSGOVIRAL
								    </span>

									</div>
							     </div>
							      <div class="small-line" style="width: 90%; margin-bottom:10px;"></div>
							    <div class="modal-body">
							      
							     
							      <p style="font-weight:400; margin-left:7%;  text-align:center ; font-size:20px;  margin-top: 10px; margin-bottom:20px;" class="fav_font">Failed ! Wrong Promo Code applied . </p>


							      </div>
							    <div class="modal-footer" >
							      <button id="exit"  class="fav_font" style="cursor:pointer; padding-top: 10px; padding-bottom: 10px; padding-right: 25px; padding-left: 25px; background-color:#3b3513; border-radius: 3px;  border: 3px solid #d2b315;  font-size: 1vw; margin: 0 auto ; left:0; right :0;  cursor:pointer;">Exit</button>
							  
								 
							    </div>
							  </div>

						</div>
						
				 			';
				 }
			?>


	

			<!-- Language translation-->
			

			<div class="fav_font" id="google_translate_element">
				<!--<i class="material-icons" style="padding-top: 3px;font-size:18px;font-weight:400;color:white">language</i>
				-->
				<img src="images/ic_language_white_24dp_1x.png">
				<!--<div id="google_translate_element"></div>-->
			</div>
			<a  class="fav_font what"  href="whatiscsgoviral" target="_blank">
			
				What Is CSGOVIRAL ?

			</a>

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


				<!--this is the layout of the buyer of week and seller of week div
				place this in title div of header tag-->


				<div id="person_of_week_after">
					
					<div id="buyer_of_week_div">
						<div id="buyer_week_title_image">
							<img src="images/buyer.png" alt="image" class="buyer_title_img">
						</div>
						<div id="buyer_of_week_person_profile_image">	
							<div class="dp_class">
								 <div class="dp-border1 circle" style="z-index: 130;">
										<div class="dp circle">
											<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/62/624d82d3d1cfa94fe7e036f5a7463a2fea962cd2_full.jpg" title="Best Buyer Avatar" alt="Image" />
										</div>
								</div>
							</div>
						</div>

						<div id="buyer_of_week_person_detail">
							<div class="bwpd">
								<spam style="font-weight: bolder; font-size: 16px; color :#eed66a; width: 100%; max-height: 55px; height:55px; overflow-y: hidden;" class="fav_font">D:-@g0nK!ng</spam>
								<br />
								<span style="font-weight: bolder; font-size: 16px;color :#f3f3f3;" class="fav_font">13</span>
								<br />
								<span class="fav_font" style="color :#f3f3f3; font-size: 13px;">CASES OPENED</span>
							</div>
						</div>

						<div id="buyer_of_week_skin_won">
							<div style="margin-top:3px;">
								<span id="buyer_won" class="fav_font">WON!</span>
							</div>
							<img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszJemkV08u_mpSOhcjnI7TDglRd4cJ5ntbN9J7yjRrj80Y9Y2GicdXBew84NQuGrAK4l-3nhpG_6smaznFlsyd343_czhPmn1gSOaDw15cN/512fx384f" title="Skin Won : AK-47 | Frontside Misty" alt="image" class="skin_won_class">
						</div>
					</div>

					<div id="v_line">
						<div id="line">
						</div>
					</div>

					<div id="seller_of_week_div">
						<div id="seller_week_title_image">
							<img src="images/seller.png" alt="image" class="seller_title_img">
						</div>

						<div id="seller_of_week_person_profile_image">	
							<div class="dp_class">
								 <div class="dp-border1 circle" style="background-color:#f3f3f3;z-index: 130;">
										<div class="dp circle">
											<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/53/5309397cb683f111600e65e51cb137e53512b705_full.jpg" title="Best Buyer Avatar" alt="Image" />
										</div>
								</div>
							</div>
						</div>
						<div id="seller_of_week_person_detail">
							<div class="bwpd">
								<spam style="font-weight: bolder; font-size: 17px; color :#f3f3f3;" class="fav_font">Ceaser</spam>
								<br />
								<span style="font-weight: bolder; font-size: 17px;color :#f3f3f3;" class="fav_font">11</span>
								<br />
								<span class="fav_font" style="color :#f3f3f3; font-size: 13px;">CASES SOLD</span>
							</div>
						</div>
						<div id="seller_of_week_skin_won">
							<div style="margin-top:3px;">
								<span id="seller_won" class="fav_font">WON!</span>
							</div>
							<img src="https://steamcdn-a.akamaihd.net/apps/730/icons/econ/default_generated/weapon_ump45_cu_ump45_primalsaber_light_large.67bef91a43734d654516f65c4288711b257d2049.png" title="Skin Won : UMP-45 | Primal Saber" alt="image" class="skin_won_class">
						</div>
					</div>
				</div>
					
				<div id="person_of_week"></div>

			</div>



		</div>

		<div id="stats_left">

			<table  cellpadding="5" cellspacing="10" align="center">
				<tr>
					<td align="center" id="case_open_stats">
						<?php 

							$servername = "";
							$username = "";
							$password = "";
							$dbname = "Csgoviral_MBR";

							
							$conn = new mysqli($servername, $username, $password, $dbname);
							

							$sql = "SELECT DISTINCT(COUNT(*) ) FROM MBR_skin_out";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    
							    $row = $result->fetch_assoc();
							     if(reset($row)==0)
							     	echo "No" ;
							     else
							     	echo reset($row) ;
							} else {
							    echo "NO";
							}
							$conn->close();

						?>
					</td>
					<td align="center" id="case_available_stat">
						<?php 

							$servername = "";
							$username = "";
							$password = "";
							$dbname = "sell_case_db";

							
							$conn = new mysqli($servername, $username, $password, $dbname);
							

							$sql = "SELECT DISTINCT(COUNT(*) ) FROM sell_case";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    
							    $row = $result->fetch_assoc();
							    echo reset($row);
							} else {
							    echo "0";
							}
							$conn->close();

						?>
					</td>
				</tr>
				<tr>
					<td align="center" id="case_open_text">CASES OPENED</td>
					<td align="center" id="case_available_text">CASES AVAILABLE</td>
				</tr>
			</table>	

		</div>

		<div id="stats_right">
			<table  cellpadding="5" cellspacing="10" align="center">
				<tr>
					<td align="center" id="players_stats">
						<?php 

							$servername = "";
							$username = "";
							$password = "";
							$dbname = "csgoviral";

							
							$conn = new mysqli($servername, $username, $password, $dbname);
							

							$sql = "SELECT DISTINCT(COUNT(*) ) FROM user_data";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    
							    $row = $result->fetch_assoc();
							    echo reset($row);
							} else {
							    echo "0";
							}
							$conn->close();

						?>
						
					</td>
					<td align="center" id="online_stat">
						<?php

							$servername = "";
							$username = "";
							$password = "";
							$dbname = "online_users";

							
							$conn = new mysqli($servername, $username, $password, $dbname);
							

							$sql = "SELECT DISTINCT(COUNT(*) ) FROM onlineUserCOunt";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    
							    $row = $result->fetch_assoc();
							    echo reset($row);
							} else {
							    echo "0";
							}
							$conn->close();

						?>
					</td>
				</tr>
				<tr>
					<td align="center" id="players_text">PLAYERS</td>
					<td align="center" id="online_text">ONLINE</td>
				</tr>
			</table>		
		</div>


		<?php
		
			if(isset($_SESSION['steamid']))
			{
				echo '
					<div style=" z-index:3000 ; position:fixed; top: 50%; right:0%; width: auto; height: auto; display: flex;">
						<a href="javascript:void(0)" style="height: fit-content;" onclick="return expand_notif();">
							<div id="icon" style="background-color: #0debb0; width: 30px; height: 30px; border-radius: 5px 0 0 5px;">
								<i class="fa fa-bell" style="font-size:18px; padding: 6px; color: #303030;"></i>
							</div>
						</a>
						<div id="notif-bar">
							<div style="width: 100%; height: 30px; background-color: #17362e; color: #0debb0; font-family: HandelGotDBol;">
								<div style="padding: 5px;">Notifications</div>

								
								<div style="width: 205px; padding-left: 5px; padding-top: 6px; padding-bottom:6px; height:260px; overflow-x:hidden; overflow-y:scroll;">

								
									<div id="notif-box">
										<div id="notif-content">Welcome to CSGOVIRAL !</div>
										<a href="#" style="text-decoration: none;"><div style=" width: 15px; min-height: 25px; padding-top: 5px;">X</div></a>
									</div>';


									$nf_server = "";
									$nf_name = "";
									$nf_password = "";
									$nf_db = "notification" ;

									$nf_con = new mysqli($nf_server , $nf_name , $nf_password, $nf_db);
									$nf_sql = " SELECT message FROM notify WHERE userid ='-' or userid='".$_SESSION['steamid']."' ORDER BY notification_id DESC; " ;
									$nf_result = $nf_con->query($nf_sql) ;
									if($nf_result->num_rows >0)
									{
										while($nf_row = mysqli_fetch_array($nf_result))
										{
											echo '
												<div id="notif-box">
													<div id="notif-content">'.$nf_row['message'].'</div>
													<a href="" class="close-div" style="text-decoration: none;"><div style=" width: 15px; min-height: 25px; padding-top: 5px;">X</div></a>
												</div>
											';
										}
									}

									$nf_con->close();
									
								echo '</div>
								
							</div>

						</div>
					</div>
				';
			}

		?>

		<script>
			$('.close-div').on('click', function(event){
			    $(this).closest("#notif-box").remove();
			    event.preventDefault();
			});
		</script>


	




						
	</header>

	<div id="toast_container" class="toast-top-right">

		<div class="warning toast-info" aria-live="polite" style="display: block;">

			<div class="toast-close-button">×</div>

			<svg  class="toast-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
			    <path d="M0 0h24v24H0z" fill="none"/>
			    <path fill="white" d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
			</svg>
			
			<div class="toast-message fav_font">
			* Beware of scams *&nbsp;<strong>Csgoviral</strong> staff will NOT add you on Steam and will NEVER ask you for your items back personally.</div>
		</div>

	

		<div class="message toast-info" aria-live="polite" style="display: block;">

			<div class="toast-close-button">×</div>

			<svg class="toast-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
				<path d="M0 0h24v24H0z" fill="none"/>
				<path fill="white" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
			</svg>
			
			<div class="toast-message fav_font" style="font-size: 25px;">
			No deposits during withdraw !</div>
		</div>

		<div class="new_feature toast-info" aria-live="polite" style="display: block;">

			<div class="toast-close-button">×</div>

			<svg class="toast-icons" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
			    <path fill="white" d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 9h-2V5h2v6zm0 4h-2v-2h2v2z"/>
			    <path d="M0 0h24v24H0z" fill="none"/>
			</svg>

			
			<div class="toast-message fav_font" style="font-size: 18px;">
			<strong>Cashout feature is now available by Paypal / Paytm !</div>
		</div>

	</div>

	

	<div id="main">
		<img id="backdrop" src="images/backdrop.png">
	</div>


	<?php

	if( (!isset($_SESSION['disable_giveaway']) ) && isset($_SESSION['steamid']) )
	{
		?>
		<div class="giveaway_div" id="giveaway_div">

	        
	        <div class="giveaway_div_content">

	        	<span class="close">&times;</span>

	          <div class="giveaway_div_header">

	          		

		            <div style="text-align: center; position: relative; top: 5px; display: inline; ">

			              <span class="fav_font1 you_got">
			                  GIVEAWAY SKIN
			              </span>

		              </div>
	           </div>
	         
	          <div class="giveaway_div_body">
	                  <img id="case_win_image" src="https://steamcdn-a.akamaihd.net/apps/730/icons/econ/default_generated/weapon_knife_m9_bayonet_am_zebra_light_large.53f9641b2b66b6587f779e5f222cc98a48489a1e.png" alt="Image" title="Skin Won in Giveaway!" class="skin_won">
	                  <div class="fav_font1 skin_won_name">
	                      <p id="case_win_item_weapon_name">M9 Bayonet</p> 
	                      <p id="vertical_line">|</p>
	                      <p id="case_win_item_skin_name">Slaughter</p>
	                  </div>
	                  <div id="skin_won_detail">
	                      <div id="skin_won_detail_upper">
	                          <div id="skin_won_detail_upper_left" class="fav_font1">Finish Style</div>
	                          <div id="skin_won_detail_upper_middle" class="fav_font1">:</div>
	                          <div id="skin_won_detail_upper_right" class="fav_font1"><p id="case_win_item_finishStyle">Anodized Multicolored</p></div>
	                      </div>
	                      <div id="skin_won_detail_lower">
	                          <div id="skin_won_detail_upper_left" class="fav_font1">Exterior</div>
	                          <div id="skin_won_detail_upper_middle" class="fav_font1">:</div>
	                          <div id="skin_won_detail_upper_right" class="fav_font1"><p id="case_win_item_exterior">Factory New</p></div>
	                      </div>
	                  </div>

	            
	          </div>
	          <div class="giveaway_div_footer" >

	          		<div class="winner">

	          			<h2 class="fav_font1">Winner</h2>
	          			
	                    <img src="images/winner.jpeg" title="Giveaway SKin Winner">
	                       
	          			
	          		</div>
	                
	          </div>

	          <div class="continue fav_font1" id="continue">Continue</div>


	        </div>

	  </div>

	  <?php
	  	}
	  	?>

	<button>
		<a href="case"><div id="ccbutton" >Create Your Own Case</div></a>
	</button>


	<?php
	include("cases menu.php") ;
	?>

	
	
	<div id="cases_container">
		<div id="container_allInOne">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='allInOne' LIMIT 12; " ;
				$result = $con->query($sql) ;
				$is_zero=0;

				if ($result->num_rows > 0) 
				{
					echo '<div  style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    				
    				while ($row=mysqli_fetch_array($result))
				    {	

				    		 echo ' 
						        
						            <li style="text-align:center; align:center; padding:20px ;">
						            	<a href="case_buy/'.$row['sell_case_id'].'">
							            	<div class="allinone_container">	
												<img src="'.$row['skinOfCase'].'" class="allinone_container_skinImage">
		 
						 						<div class="case_box" >

													  

													    <div id="case-name" class="fav_font" >';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
													  	<div id="case-price" class="fav_font">
													  		<span style="color:#3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
													  		<span style="margin-left: -20px; display:inline ;float:right ;width:80px ; text-align:left ;" class="fav_font">'.$row['case_price'].'</span>
													  	</div>
													    <span class="bym fav_font" >By<br></span>
													    <span class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

													    <img src="case images/All In One.png" class="allinone_pic">

													    <svg  id="allInOne_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="90%" height="87%" viewBox="0 7 500 390" enable-background="new 0 7 500 390" xml:space="preserve" style="fill:'.$row['case_color'].'; position: absolute; margin-left: 7%; margin-top:1px; z-index: 120; mix-blend-mode: soft-light;" >

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
														 <div class="dp-border circle allinone_dp_container" >
										                        <div class="dp circle allinone_dp">
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
    					$is_zero=1;
				}

				$con->close();

			?>

			<a class="fav_font" style="<?php if($is_zero==1) echo "display: none;";?>" id="redirect_link" href="more/more-allInOne">more..</a>
		</div>
		<div id="container_rifle" style="display: none;">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='rifle' LIMIT 12; " ;
				$result = $con->query($sql) ;
				$is_zero=0;

				if ($result->num_rows > 0) 
				{

					$col_count=0 ;
					echo '<div  style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">
					';
    				
    				while ($row=mysqli_fetch_array($result))
				    {	
				    		 echo '
						         <li style="text-align:center; align:center; padding:20px ;">
						            	<a href="case_buy/'.$row['sell_case_id'].'">
							            	<div class="rifle_maincontainer">	
												<img src="'.$row['skinOfCase'].'" class="rifle_container_skinImage">
						 
						 						<div class="case_box" >

													  

													    <div id="case-name" class="fav_font" >';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
													  	<div id="case-price" class="fav_font" >
													  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
													  		<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;" class="fav_font">'.$row['case_price'].'</span>
													  	</div>
													    <span class="bym fav_font" >By<br></span>
													    <span class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

													    <img src="case images/Rifle Only.png" class="rifle_pic">

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

														 
														 <img src="images/case back.png" class="case_back">
														 <div class="dp-border circle rifle_dp_container">
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
    					$is_zero=1;
				}

				$con->close();

			?>
			<a class="fav_font" style="<?php if($is_zero==1) echo "display: none;";?>" id="redirect_link" href="more/more-rifle">more..</a>
		</div>
		<div id="container_pistol" style="display: none;">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='pistol' LIMIT 12; " ;
				$result = $con->query($sql) ;
				$is_zero=0;

				if ($result->num_rows > 0) 
				{

				
					echo '<div style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    				
    				while ($row=mysqli_fetch_array($result))
				    {	

				    	
				    		 echo '
						        <li style="text-align:center; align:center; padding:20px ;">
						            	<a href="case_buy/'.$row['sell_case_id'].'">
							            	<div class="pistol_maincontainer">	
												<img src="'.$row['skinOfCase'].'" class="pistol_container_skinImage">
						 
						 						<div class="case_box" >
													    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
													  	<div id="case-price" class="fav_font">
													  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
													  		<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;">'.$row['case_price'].'</span>
													  	</div>
													    <span class="bym fav_font" >By<br></span>
													    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

													    <img src="case images/Pistol Only.png" class="pistol_pic">

													    <svg  id="pistol_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.334 4.833 449.667 492.667" enable-background="new 3.334 4.833 449.667 492.667" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 15%; margin-top:-12px; z-index: 1; mix-blend-mode: soft-light;" >

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
														 <div class="dp-border circle pistol_dp_container" >
													                        <div class="dp circle pistol_dp" >
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
    					$is_zero=1;
				}

				$con->close();

			?>
			<a id="redirect_link" style="<?php if($is_zero==1) echo "display: none;";?>" class="fav_font" href="more/more-pistol">more..</a>
		</div>
		<div id="container_smg" style="display: none;">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='smg' LIMIT 12; " ;
				$result = $con->query($sql) ;
				$is_zero=0;

				if ($result->num_rows > 0) 
				{

					
					echo '<div style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    				
    				while ($row=mysqli_fetch_array($result))
				    {	

				    	
				    		 echo '
						        <li style="text-align:center; align:center; padding:20px ;">
						            <a href="case_buy/'.$row['sell_case_id'].'">
						            	<div class="smg_maincontainer">	
											<img src="'.$row['skinOfCase'].'" class="smg_container_skinImage">
	 
					 						<div class="case_box" >

												  

												    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
												  	<div id="case-price" class="fav_font">
												  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
												  		<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;">'.$row['case_price'].'</span>
												  	</div>
												    <span class="bym fav_font" >By<br></span>
												    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

												    <img src="case images/SMG Only.png" class="smg_pic">

												    <svg  id="smg_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="3.167 2.333 496.833 476.833" enable-background="new 3.167 2.333 496.833 476.833" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 10%; margin-top:-14px; z-index: 1; mix-blend-mode: soft-light;" >

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
													 <div class="dp-border circle smg_dp_container" >
												                        <div class="dp circle smg_dp" >
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
    					$is_zero=1;
				}

				$con->close();

			?>
			<a class="fav_font" style="<?php if($is_zero==1) echo "display: none;";?>" id="redirect_link" href="more/more-smg">more..</a>
		</div>
		<div id="container_heavy" style="display: none;">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='heavy' LIMIT 12; " ;
				$result = $con->query($sql) ;
				$is_zero=0;

				if ($result->num_rows > 0) 
				{

					
					echo '<div style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    				
    				while ($row=mysqli_fetch_array($result))
				    {	

				    	
				    		 echo '
						        <li style="text-align:center; align:center; padding:20px ;">
						            <a href="case_buy/'.$row['sell_case_id'].'">
						            	<div class="heavy_maincontainer">	
											<img src="'.$row['skinOfCase'].'" class="heavy_container_skinImage">
	 
					 						<div class="case_box" >

												  

												    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
												  	<div id="case-price" class="fav_font">
												  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
												  		<span style="margin-left: -20px; display: inline; float: right; width: 80px; text-align:left ;">'.$row['case_price'].'</span>
												  	</div>
												    <span class="bym fav_font" >By<br></span>
												    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

												    <img src="case images/Heavy only.png" class="heavy_pic">

												    <svg  id="heavy_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="87%" viewBox="2.5 2.167 495 359.5" enable-background="new 2.5 2.167 495 359.5" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 1%; margin-top:-12px; z-index: 1; mix-blend-mode: soft-light;" >

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
													 <div class="dp-border circle heavy_dp_container" >
												                        <div class="dp circle heavy_dp" >
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
    					$is_zero=1;
				}

				$con->close();

			?>
			<a id="redirect_link" style="<?php if($is_zero==1) echo "display: none;";?>" class="fav_font" href="more/more-heavy">more..</a>
		</div>
		<div id="container_sniper" style="display: none;">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='sniper' LIMIT 12; " ;
				$result = $con->query($sql) ;
				$is_zero=0;

				if ($result->num_rows > 0) 
				{

					
					echo '<div style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    				
    				while ($row=mysqli_fetch_array($result))
				    {	

				    	
				    		 echo '
						        	<li style="text-align:center; align:center; padding:20px ;">
						            <a href="case_buy/'.$row['sell_case_id'].'">
						            	<div class="sniper_maincontainer">	
											<img src="'.$row['skinOfCase'].'" class="sniper_container_skinImage" >
					 
					 						<div class="case_box" >

												  

												    <div id="case-name" class="fav_font" >';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
												  	<div id="case-price" class="fav_font">
												  		<span style="color: #3add08; margin-right:8px; display: inline; float: left; width: 10px;">$</span>
												  		<span style="margin-left: -20px;display: inline; float: right; width: 80px; text-align:left ;">'.$row['case_price'].'</span>
												  	</div>
												    <span class="bym fav_font" >By<br></span>
												    <span class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

												    <img src="case images/Sniper Only.PNG" class="sniper_pic">

												    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93%" height="92%" viewBox="2.375 1.625 488 263.875" enable-background="new 2.375 1.625 488 263.875" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 5%; margin-top:-14px; z-index: 1; mix-blend-mode: multiply;" >

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
													 <div class="dp-border circle sniper_dp_container">
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
    					$is_zero=1;
				}

				$con->close();

			?>
			<a id="redirect_link" style="<?php if($is_zero==1) echo "display: none;";?>" class="fav_font" href="more/more-sniper">more..</a>
		</div>
		<div id="container_knife" style="display: none;">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				function get_string_between($string, $start, $end){
				    $string = ' ' . $string;
				    $ini = strpos($string, $start);
				    if ($ini == 0) return '';
				    $ini += strlen($start);
				    $len = strpos($string, $end, $ini) - $ini;
				    return substr($string, $ini, $len);
				}

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='knife' LIMIT 12; " ;
				$result = $con->query($sql) ;
				$is_zero=0;

				if ($result->num_rows > 0) 
				{

					
					echo '<div style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    				
    				while ($row=mysqli_fetch_array($result))
				    {	

				  
				    		 echo '
						        	<li style="text-align:center; align:center; padding:20px ;">
						            	<a href="case_buy/'.$row['sell_case_id'].'">
						            		<div class="knife_maincontainer">	
												<img src="'.$row['skinOfCase'].'" class="knife_container_skinImage">
						 
						 						<div class="case_box" >

													    <div id="case-name" class="fav_font">';

													    if(strlen($row['case_name'])>10 )
													    	echo substr($row['case_name'],0, 10).'..' ;
													    else
													    	echo $row['case_name'] ; 

													    echo '</div>
													  	<div id="case-price" class="fav_font">
													  		<span style="color: #3add08;margin-right:8px;display: inline; float: left; width: 10px;">$</span>
													  		<span style="margin-left: -20px;display: inline; float: right; width: 80px; text-align:left ;">'.$row['case_price'].'</span>
													  	</div>
													    <span class="bym fav_font" >By<br></span>
													    <span class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

													    <img src="case images/Knife Only.png" class="knife_pic">

													    <svg  id="all_case_color" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80%" height="67%" viewBox="2.084 1.333 492.584 363.25" enable-background="new 2.084 1.333 492.584 363.25" xml:space="preserve" style="fill: '.$row['case_color'].'; position: absolute; margin-left: 16%; margin-top:6%; z-index: 1; mix-blend-mode: soft-light;  -webkit-filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row['case_color'] , '(' , ')').', 0.8)); filter: drop-shadow(-5px -1px 15px rgba('.get_string_between($row['case_color'] , '(' , ')').', 0.9));" >

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
														 <div class="dp-border circle knife_dp_container" >
													                        <div class="dp circle knife_dp">
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
    					$is_zero=1;
				}

				$con->close();

			?>
			<a class="fav_font" style="<?php if($is_zero==1) echo "display: none;";?>" id="redirect_link" href="more/more-knife">more..</a>
		</div>
		<div id="container_glove" style="display: none;">
			<?php

				$servername = "";
				$username = "";
				$password = "";
				$database = "sell_case_db" ;

				$con = new mysqli($servername ,$username,$password,$database);
				$sql = " SELECT * FROM sell_case WHERE case_type='glove' LIMIT 12; " ;
				$result = $con->query($sql) ;
				$is_zero=0;

				if ($result->num_rows > 0) 
				{
					echo '<div style="width:100%; height:auto;">
					<ul style="display:flex ; flex-wrap: wrap ; width:100% ; height:auto ; padding-bottom:5% ;">';
    				
    				while ($row=mysqli_fetch_array($result))
				    {	
				    		 echo '
						        <li style="text-align:center; align:center; padding:20px ;">
						            <a href="case_buy/'.$row['sell_case_id'].'">
						            	<div class="glove_maincontainer">	
											<img src="'.$row['skinOfCase'].'" class="glove_container_skinImage">
												
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
												  		<span style="color: #3add08; margin-right:8px;display: inline; float: left; width: 10px;">$</span>
												  		<span style="margin-left: -20px;display: inline; float: right; width: 80px; text-align:left ;">'.$row['case_price'].'</span>
												  	</div>
												    <span class="bym fav_font">By<br></span>
												    <span  class="byme fav_font">';
													    
													    if(strlen($row['person_name'])>15 )
													    	echo substr($row['person_name'],0, 15).'..' ;
													    else
													    	echo $row['person_name'] ;
													    
													    echo '</span>

												    <img src="case images/Gloves Only.png" class="glove_pic">

												 	<img src="images/case back.png" class="case_back">

													 <div class="dp-border circle glove_dp_container" >
												                        <div class="dp circle glove_dp" >
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
    					$is_zero=1;
				}

				$con->close();

			?>
			<a class="fav_font" style="<?php if($is_zero==1) echo "display: none;";?>" id="redirect_link" href="more/more-glove">more..</a>
		</div>
	</div>

	
	
	<!--include footer here later on-->
	
	
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/translate.js"></script>	
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


	<script>

		var modal = document.getElementById('giveaway_div');


		window.onclick = function(event) {
	    if (event.target == modal) {
	         document.getElementById('giveaway_div').style.display='none';
		   //make a ajax call

		   $.ajax({
				  type: "POST",
				  url: "intermediate/donotshow.php"
				});
	    }
		}

		var span = document.getElementsByClassName("close")[0];
		span.onclick = function() {
		   document.getElementById('giveaway_div').style.display='none';
		   //make a ajax call

		   $.ajax({
				  type: "POST",
				  url: "intermediate/donotshow.php"
				});
		}


		$("#continue").click(function(){
		    document.getElementById('giveaway_div').style.display='none';
		   //make a ajax call

		   $.ajax({
				  type: "POST",
				  url: "intermediate/donotshow.php"
				});
		});
	
	</script>

	<script>
			$("#exit").click(function(){
		    document.getElementsByClassName('promoCodeStatus')[0].style.display='none';
		    window.location.replace("https://csgoviral.com");
		   	
		});
	</script>

	<footer style="background-color: black; min-height: 50px; padding-top: 100px;  padding-bottom: 20px; position: absolute; width: 100%; top: 93%; right: 0; bottom: -10%; left: 0; color: white; z-index: 1010; background: linear-gradient(rgba(0,0,0,0) 5%, black 55%);">
		<svg width="50px" height="50px" style="margin-left: 30px;">
			<image xlink:href="logoheader.svg" width="50" height="50"/>
		</svg>
		<article>
			<span class="Hfont">CSGOVIRAL.COM © 2018 <a href="terms and service" target="_blank"> Terms of Service</a></span>
			<p class="Bfont"><br>You can open various cases on our website CS:GO at best prices.</p>
			<p class="Bfont"><br>All trades work in the automatic mode via Steam bots.</p>
		</article>

		<article style="position: relative; left:40%;">
			<span class="support">Support : csgoviral9@gmail.com </span>
			
		</article>



		<img id="chat_icon" src="images/chat_icon.PNG" style="margin-left: 30px;">
	</footer>

</body>
	
	<?php

		unset($is_zero) ;

	}
	?>
