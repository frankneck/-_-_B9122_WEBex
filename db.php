<?php
$host = "db";
$user = "root";
$pass = "12345";
$dbname = "first";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
