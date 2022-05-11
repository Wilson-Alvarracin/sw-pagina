<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_actividades";
$connection = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
printf("Connect failed: %sn", mysqli_connect_error());
exit();
}