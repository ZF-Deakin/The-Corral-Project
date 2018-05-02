<?php

	require_once "constant.php";
	
	$con = new MySQLi(DB_HOST,DB_USER,DB_PASSWORD);
	
	if(!$con){
		echo "Database connection failed";
	}else {
		echo "Database connected successfully!!!";
	}



?>