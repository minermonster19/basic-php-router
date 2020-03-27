<?php 
//Start a PHP session if not already started
if(!isset($_SESSION)){ 
    session_start(); 
}

// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'DB_USER';
$DATABASE_PASS = 'DB_PASS';
$DATABASE_NAME = 'DB_NAME';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}