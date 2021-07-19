<?php

	$servername = "sql211.epizy.com";
	$username = "epiz_29142147";
	$password = "hnOowisc32";
	$dbname = "epiz_29142147_NationalBank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>