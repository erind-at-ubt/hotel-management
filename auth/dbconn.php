<?php

// Set database credentials
$servername = "localhost"; // replace with your actual IP address
$username = "root";
$password = "";
$dbname = "hotel-management";

// Create a PDO connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    header("Location: /hotel-management/index.php");
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close the connectionnnn
$conn = null;

?>
