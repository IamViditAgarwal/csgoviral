<?php

	session_start();
	$url = $_POST['txt1'] ;

	$servername = "";
	$username = "";
	$password = "";
	$dbname = "csgoviral";
	
								// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql = "UPDATE trade_url SET  trade_url_val ='$url' WHERE steamid= '".$_SESSION['steamid']."' ";	

	if ($conn->query($sql) === TRUE) {
   			echo '';
	} 
	else {
    	echo "Error updating record: " . $conn->error;
	}

	//set the session variable for same 
	$_SESSION['tu'] = $url ;

$conn->close();
				

?>