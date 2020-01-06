<?php
$id = $_GET['id'];
$status = $_GET['status'];
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE MyGuests SET status='$status' WHERE id=$id";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

	header ('location: change-status.php');
    echo " records UPDATED successfully";
    }
catch(PDOException $e)
    {
	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 