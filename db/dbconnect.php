<?php

$dbname = 'blog';
$dbuser = 'root';
$dbpass = 'adminpass';
$dbhost = '127.0.0.1';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
/* Connection to database */

	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	}

?>
