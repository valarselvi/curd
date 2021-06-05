
<?php

const DBHOST = 'localhost';
	const DBUSER = 'root';
	const DBPASS = 'root';
	const DBNAME = 'crud_db';
    const DBPORT = '3030';

	$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME,DBPORT);

	if ($conn->connect_error) {
	  die('Could not connect to the database!' . $conn->connect_error);
	}

?>