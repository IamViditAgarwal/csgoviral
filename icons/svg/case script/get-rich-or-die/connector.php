<?php
$db_host	  = 'host'; // Your host
$db_user	  = 'user'; // Db user
$db_pass      = 'password'; // Db password
$db_database  = 'database'; // Db name

$bd = mysql_connect ($db_host,$db_user,$db_pass) or die(mysql_error());
mysql_select_db ($db_database,$bd)  or die(mysql_error());
mysql_query("set names utf8"); 
?>
