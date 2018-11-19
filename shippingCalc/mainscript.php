<?php

$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "shippingcalc";

//create conn
$conn = new mysqli($servername, $username, $password);
//testing conn
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//create DB
$sql = "CREATE DATABASE `shippingcalc`";
if ($conn->query($sql) == TRUE) {
    echo "DB created with success!";
} else {
    echo "Error creating the DB: " . $conn->error;
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
//testing conn
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//create table zoneWeightCost
$sql = "CREATE TABLE `zoneWeightCost` (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
zone INT(10) NOT NULL,
weight FLOAT(3,2) NOT NULL,
cost FLOAT(3,2) NOT NULL
)";
if ($conn->query($sql) == TRUE) {
    echo "<br>Table zoneWeightCost created with success!";
} else {
    echo "<br>Error creating table zoneWeightCost: " .$conn->error;
}

//create table zipZone
$sql = "CREATE TABLE `zipZone` (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
zip INT(10) NOT NULL,
zone INT(10) NOT NULL
)";
if ($conn->query($sql) == TRUE) {
    echo "<br>Table zipZone created with success!";
} else {
    echo "<br>Error creating table zipZone: " .$conn->error;
}

//initial records
$sql = "INSERT INTO zipZone (zip, zone)
VALUES (55555, 4);";
$sql .= "INSERT INTO zipZone (zip, zone)
VALUES (55556, 3);";
$sql .= "INSERT INTO zipZone (zip, zone)
VALUES (55557, 9);";
$sql .= "INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (4, '1.00', '1.25');";
$sql .= "INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (4, '1.50', '2.00');";
$sql .= "INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (4, '2.00', '3.25');";
$sql .= "INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (3, '1.00', '1.75');";
$sql .= "INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (3, '1.50', '2.25');";
$sql .= "INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (9, '1.50', '2.25');";
$sql .= "INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (9, '1.00', '2.00');";

if ($conn->multi_query($sql) === TRUE) {
    echo "<br>Initial records created with success";
} else {
    echo "<br>Error: " .sql . "<br>" . $conn->error;
}

$conn->close();
?>