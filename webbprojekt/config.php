<?php

define('DB_SERVER', 'localhost');   	// vart servern ligger
define('DB_USERNAME', 'loginuser');		// namn på din user du skapade
define('DB_PASSWORD', 'bajs123');		// lösenord till den 
define('DB_NAME', 'loginsystem');		// databasen vi skapade 
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}





?>