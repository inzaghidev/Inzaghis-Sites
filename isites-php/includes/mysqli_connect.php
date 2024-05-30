<?php
#script 9.2

// Set the database access information as constants :
DEFINE('DB_USER', '');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', '');
DEFINE('DB_NAME', '');

//Make connection
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error);

//set encoding
mysqli_set_charset($dbc, 'utf8');
?>