<?php include "../includes/header.php";?>

<?php

    class User{

        private $username;
        private $email;
        private $userpassword;

        // public __construct(){

            
        // } 

        public function login($username, $userpassword, $conn) {
           
            $query = "SELECT password_hash FROM users WHERE username = :username";
            $stmt= $conn->prepare($query);
        
     
            $stmt->bindParam(':username', $username);
        
    
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $password_hash = $result['password_hash'];
        
          
            if (password_verify($userpassword, $password_hash)) {
           
                session_start();
                $_SESSION['username'] = $username;
                return true;
            } else {
           
                return false;
            }
        }
        //elton bajraliu
        

        public function add_user($username, $email, $userpassword, $conn) {
          
            $password_hash = password_hash($userpassword, PASSWORD_DEFAULT);
        
        
            $query = "INSERT INTO users (username, email, userpassword) VALUES (:username, :email, :userpassword)";
            $stmt = $conn->prepare($query);
        
        
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':userpassword', $password_hash);
        
           
            if ($stmt->execute()) {
                return true;
            } else {
              
                $error_message = $stmt->errorInfo();
                return false;
            }
        }
        //elton bajraliu


        function change_password($username, $current_password, $new_password, $conn) {
            $query = "SELECT password_hash FROM users WHERE username = :username";
            $stmt = $conn->prepare($query);
        
            $stmt->bindParam(':username', $username);
        
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $password_hash = $result['password_hash'];
        
            if (password_verify($current_password, $password_hash)) {
                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT, ['cost' => 10]);
                $update_query = "UPDATE users SET password_hash = :new_password_hash WHERE username = :username";
                $update_stmt = $conn->prepare($update_query);
                $update_stmt->bindParam(':new_password_hash', $new_password_hash);
                $update_stmt->bindParam(':username', $username);
                $update_stmt->execute();
                return true;
            } else {
                return false;
            }
        }

        //crud added by Erind Blinishti

        
    }

?>