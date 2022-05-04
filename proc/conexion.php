<?php
/* Database connection start */
$servername = "172.24.16.78";
$username = "Wilson";
$password = "asdASD123";
$dbname = "bd_actividades";
$connection = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
printf("Connect failed: %sn", mysqli_connect_error());
exit();
}