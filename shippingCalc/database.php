<?php
$servername = "localhost";
$username = "Trainer";
$password = "pikachu";
$dbname = "shippingcalc";

$conn = new mysqli($servername, $username, $password, $dbname);
//testing conn
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>