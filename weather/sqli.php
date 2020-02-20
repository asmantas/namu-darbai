<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "weather";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sku, name, price FROM first WHERE weather_id='$weatherId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "recommended products:<br>";
        echo "sku: " .$row["sku"]. "<br>name: " . $row["name"]. "<br>price: " . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 