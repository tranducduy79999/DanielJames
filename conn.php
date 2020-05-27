<?php
	$conn = new mysqli("localhost", "root", "", "quanlycv");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>