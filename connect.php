<?php
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'jiangzh-db';
	$dbuser = 'jiangzh-db';
	$dbpass = '2sMFPkyJJzCOZJIP';

	$mysqli = new mysqli($dbhost, $dbname, $dbpass, $dbuser);

	if($mysqli->connect_errno)
		echo "Failed to connect to MySQL: (".$mysqli->connect_errno.")". $mysqli->connect_error;
?>
