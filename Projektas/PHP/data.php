<?php
$name = $_GET['name'];
$lastName = $_GET['lastName'];
$address = $_GET['address'];

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
    header ('location: ../HTML/thank-you.html');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;