<?php
#script 9.2

// Set the database access information as constants :
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'inzaghisites');

//Make connection
//$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error);
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//set encoding
mysqli_set_charset($dbc, 'utf8');
?>

<!-- https://mailtrap.io/blog/php-email-contact-form -->
<!-- https://www.itsolutionstuff.com/post/php-mysql-contact-us-form-with-validation-using-bootstrapexample.html -->