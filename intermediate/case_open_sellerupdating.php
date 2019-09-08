<?php

//	session_start();
//	$myid= $_SESSION['steamid'] ;
	$sid= $_POST['sellerid']; //seller id
	$csid= $_POST['csid'] ;


	$sn = ""; //host name
	$un = ""; //db name
	$pwd = ""; //pass


	$dbname = "user_profile_case_db";

	// Create connection
	$conn = new mysqli($sn, $un, $pwd, $dbname);

	//apply the locking mechanism 
	//we need to get the unique transaction id 

	$sup_query = $conn->query("UPDATE  User_Case_Table_".$sid." SET case_stat='sold' WHERE sell_case_id= $csid ") ;

	$conn->close();
?>