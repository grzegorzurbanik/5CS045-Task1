<?php
$mysqli = new mysqli("localhost","2453796","n0g2ww","db2453796");
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}
?>