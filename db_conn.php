<?php

$sname= "localhost";
$dname= "root";
$password = "";

$db_name = "login";

$conn = mysqli_connect($sname, $dname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>