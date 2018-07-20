<?php
	$con = mysqli_connect("localhost","root","");
	
	if(!$con) {
		echo "Database Not Connected";
	}
	$db = mysqli_select_db($con, "gogle");
	
	if(!$db) {
		echo "Database Not Selected";
	}
?>