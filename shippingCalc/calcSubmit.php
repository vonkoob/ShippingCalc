<?php

include('database.php');

if ( isset($_POST['zipVal']) ) {
}

$zipVar = $_POST['zipVal'];
$zoneVar = "";

$sql = "SELECT zone, zip FROM zipzone WHERE zip = $zipVar";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		//echo "<br> Zone: ". $row["zone"]. " - Zip: ". $row["zip"]. "<br/>";
		$zoneVar = $row["zone"]; //Saving matching zone into a variable
		}
	} else {
		//echo "0 results";
	}	

	
if ( isset($_POST['weightVal']) ) {
//echo $_POST['weightVal'] . "<br/>";
}

$weightVar = $_POST['weightVal'];

$sql = "SELECT zone, weight, cost FROM zoneWeightCost WHERE zone = $zoneVar AND weight = $weightVar";
$results = $conn->query($sql);

$costVar = "";

if ($results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		//echo "<br> Zone: ". $row["zone"]. " - Weight: ". $row["weight"]. " - Cost: " . $row["cost"]. "<br/>";
		$costVar = $row["cost"];
		echo "Shipping this package would cost : $" . $costVar . "<br/>";
		}
	} else {
		echo "We're sorry, but this package is unacceptable.";
	}	
$conn->close();
?>