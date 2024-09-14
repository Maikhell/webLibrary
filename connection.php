<?php
$server = "localhost";
$password = "";
$username = "root";
$dbname = "library_db";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully";
