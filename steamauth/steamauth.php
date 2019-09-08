<?php
ob_start();
session_start();

function logoutbutton() {

	echo "<form action='' method='get'>
	<button class='logout' name='logout' type='submit'><i  class='fa fa-sign-out fa-2x icon-a' aria-hidden='true'></i></button></form>"; //logout button
}

function loginbutton($buttonstyle = "square") {
	$button['rectangle'] = "01";
	$button['square'] = "02";
	$button = "<a href='?login'><img style='height:100px; width:100px;' src='/CsgoViral/steamauth/steam_logo.svg')";//steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_".$button[$buttonstyle].".png'></a>";
	
	echo $button;
}

if (isset($_GET['login'])){
	require 'openid.php';
	try {
		require 'SteamConfig.php';
		$openid = new LightOpenID($steamauth['domainname']);
		
		if(!$openid->mode) {
			$openid->identity = 'https://steamcommunity.com/openid';
			header('Location: ' . $openid->authUrl());
		} elseif ($openid->mode == 'cancel') {
			echo 'User has canceled authentication!';
		} else {
			if($openid->validate()) { 
				$id = $openid->identity;
				$ptn = "/^https:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
				preg_match($ptn, $id, $matches);
				
				$_SESSION['steamid'] = $matches[1];
				if (!headers_sent()) {
					header('Location: '.$steamauth['loginpage']);
					exit;
				} else {
					?>
					<script type="text/javascript">
						window.location.href="<?=$steamauth['loginpage']?>";
					</script>
					<noscript>
						<meta http-equiv="refresh" content="0;url=<?=$steamauth['loginpage']?>" />
					</noscript>
					<?php
					exit;
				}
			} else {
				echo "User is not logged in.\n";
			}
		}
	} catch(ErrorException $e) {
		echo $e->getMessage();
	}
}

if (isset($_GET['logout'])){
	require 'SteamConfig.php';

	$servername = "";
	$username = "";
	$password = "";
	$dbname = "online_users";

	
	$conn = new mysqli($servername, $username, $password, $dbname);
	

	$sql = "DELETE FROM onlineUserCOunt WHERE uniqid = '".$_SESSION['steamid']."' ";
	

	if ($conn->query($sql) === TRUE) {
	    
	    
	} else {
	   
	}
	$conn->close();

	unset($_COOKIE['disable_giveaway']);
	setcookie("disable_giveaway", "", time() - 86400 ,'/');

	session_unset();
	session_destroy();
	
	header('Location: '.$steamauth['logoutpage']);
	exit;
}

if (isset($_GET['update'])){
	unset($_SESSION['steam_uptodate']);
	require 'userInfo.php';
	header('Location: '.$_SERVER['PHP_SELF']);
	exit;
}

// Version 3.2

?>