<?php
require('config.php');

extract($_POST);

$sql = "INSERT into contactus (name, email, message, created_date) VALUES('" . $name . "','" . $email . "','" . $message . "','" . date('Y-m-d') . "')";

$success = $mysqli->query($sql);

if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}

echo "Thank You For Contacting Us ";

$conn->close();
?>

<!--
MySQL Query :
CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

Source :
https://www.itsolutionstuff.com/post/php-mysql-contact-us-form-with-validation-using-bootstrapexample.html
-->