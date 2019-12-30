<?php
$name = $_GET['name'];
$lastName = $_GET['lastName'];
$address = $_GET['address'];
echo "<html lang='lt'><head><meta charset='UTF-8'><title>data</title></head><body>";
echo "<b>Name</b>: $name<br>";
echo "<b>Last name</b>: $lastName<br>";
echo "<b>Address</b>: $address<br>";
echo '</body></html>';

//sudas
//$servername = "127.0.0.1";
//$username = "root";
//$password = "";
//$dbname = "myDB";
//
//// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
//// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//
//$sql = "INSERT INTO MyGuests (name, last_name, address)
//VALUES ('$name', '$lastName', '$address')";
//
//if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//
//mysqli_close($conn);
//sudas

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (name, last_name, address)
    VALUES ('$name', '$lastName', '$address')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;