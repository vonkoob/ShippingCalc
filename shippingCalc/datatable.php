<?php

include('database.php');

// $servername = "localhost";
// $username = "user";
// $password = "password";
// $dbname = "shippingcalc";

//create conn
$conn = new mysqli($servername, $username, $password, $dbname);

//testing conn

if ($conn->connect_error) {
    echo "Stuff broke yo! <br>";
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM zoneweightcost";
$result = $conn->query($sql);

echo "<table border='1' id='datatable'>
<tr>
<th>Zone</th>
<th>Weight</th>
<th>Cost</th>
</tr>";

if ($result->num_rows > 0) {
    //output of data into each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['zone'] . "</td>";
        echo "<td>" . $row['weight'] . "</td>";
        echo "<td>" . $row['cost'] . "</td>";
        echo "</tr>";
    }
} else {
    echo '<p class="lead">Press the button below if there are no values in the table above.</p>
			<p class="btn btn-sm btn-success" id="dbcreation" role="button">CREATE</p>';
}

echo "</table>";

$conn->close();
?>