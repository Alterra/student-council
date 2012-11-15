<?php
	// Connect to the database 
	
	$host = '';
	$user = '';
	$pass = '';
	$db = '';
	
	mysql_pconnect($host,$user,$pass) or die (mysql_error());
	mysql_select_db($db) or die(mysql_error());	
?>