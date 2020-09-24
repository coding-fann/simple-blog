<?php

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = 'adminpass';
$dbname = 'blog';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");
/* Connection to database */

	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	}

?>
