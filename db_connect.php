<?php

$database = "csgoviral" ;
$server = "";
$username = "";
$password = "";

$connection = new mysqli($server,$username,$password,$database) ;

//check connection 

if($connection->connect_error)
{
	echo '<script type="text/javascript">
                    alert("Error in Connection !");
                    window.location="index.php";
                    </script> ' ;
}

?>