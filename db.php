<?php

$srv = "localhost";
$db = "dbname";
$usr = "dbuser";
$pass = "dbpass";

$conn = new mysqli($srv, $usr, $pass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// recaptcha v3
$ky = "your site key";
$scrt = "your secret key";

?>
