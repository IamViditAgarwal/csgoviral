 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$database ="users_steam" ;

// Create connection

$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
	echo "Connection failed" ;
    die("Connection failed: " . $conn->connect_error);
}

?> 