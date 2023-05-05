<?php

// Set database credentials
// $servername = "localhost"; // replace with your actual IP address
// $username = "root";
// $password = "";
// $dbname = "hotel-management";

// // Create a PDO connection
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // Set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     // header("Location: /hotel-management/index.php");
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

// Close the connection
// $conn = null;

    class Model{

        private $servername = "localhost"; 
        private $username = "root";
        private $password = "";
        private $dbname = "hotel-management";
        private $conn;

        public function __construct(){

            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
    }

?>
