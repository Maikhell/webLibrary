<?php
$server = "localhost";
$password = "";
$usernamee = "";
$dbname = "";

$conn = mysqli_connect($server, $password, $username,);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
echo "Connected Successfully";
