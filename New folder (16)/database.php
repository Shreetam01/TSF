<?php
$servername = "localhost:3306";
$username = "root";
$password = "Shreetam@123";
$dbname = "banking_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>