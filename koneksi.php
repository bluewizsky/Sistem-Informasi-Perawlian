<?php

	$server		="localhost";
	$username	="root";
	$password	="";
	$database	="tubes";
	
	$conn = mysql_connect($server, $username, $password);
	if($conn){
		$pilih = mysql_select_db($database);
	}else{
		echo mysql_error();
	}
?>