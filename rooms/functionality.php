<?php include "../includes/header.php";?>

<?php

    class Booking{

        private $booking_name;
        private $booking_date;
        private $booking_room_type;
        private $booking_person;

        // public __construct(){


        function print_latest_bookings($conn) {
                $query = "SELECT bookings.title, rooms.type, bookings.num_persons, bookings.date, clients.name 
                          FROM bookings 
                          INNER JOIN rooms ON bookings.room_id = rooms.id 
                          INNER JOIN clients ON bookings.client_id = clients.id 
                          ORDER BY bookings.created_at DESC LIMIT 5";
                $stmt = $conn->prepare($query);
            
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
                echo "<table>";
                echo "<thead><tr><th>Title</th><th>Type</th><th>Number of Persons</th><th>Date</th><th>Name</th></tr></thead>";
                echo "<tbody>";
                foreach ($results as $result) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($result['title']) . "</td>";
                    echo "<td>" . htmlspecialchars($result['type']) . "</td>";
                    echo "<td>" . htmlspecialchars($result['num_persons']) . "</td>";
                    echo "<td>" . htmlspecialchars($result['date']) . "</td>";
                    echo "<td>" . htmlspecialchars($result['name']) . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }
            
            // crud added by Erind BLinishti

            function print_latest_clients($conn) {
                // Prepare the SQL query string to retrieve the 5 latest records from the clients table
                $query = "SELECT * FROM clients ORDER BY created_at DESC LIMIT 5";
                $stmt = $conn->prepare($query);
            
                // Execute the prepared statement and retrieve the results
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
                // Print out the results
                foreach ($results as $result) {
                    echo "Client ID: " . $result['id'] . "\n";
                    echo "Client Name: " . $result['name'] . "\n";
                    echo "Created At: " . $result['created_at'] . "\n";
                    echo "\n";
                }
            }

             // crud added by Erind BLinishti

             
            

            
        // } 

       

        
    }

?>