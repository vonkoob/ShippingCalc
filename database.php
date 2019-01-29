<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "shippingcalc";

$conn = new mysqli($servername, $username, $password, $dbname);
//testing conn
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>