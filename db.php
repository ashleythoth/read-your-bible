<?php

$srv = "localhost";
$db = "readyourbible";
$usr = "readyourbible";
$pass = "@hKU!I_)iyJ2)MdJ";

$conn = new mysqli($srv, $usr, $pass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// recaptcha v3
$scrt = "6LeP1XgnAAAAAC87sIVo8flAf3AyzyWEogBKfhR3";
$ky = "6LeP1XgnAAAAALyYPJqUW_WnoOhNjEOZwlwzKF9G";

?>
