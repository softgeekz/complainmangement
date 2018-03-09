<?php 
$dbhost = 'localhost';
$dbuser = 'root';

$dbname = 'complain';
$dbpass = '';

// Mysql er sathe conntect kora hoise
$connection = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");

// Connection error check kora hoise
  if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 // Connection er er variable parameter hisabe use kore database select kora hoise 
$select_db = mysqli_select_db($connection, $dbname) or die("Could not open the db '$dbname'");


?>