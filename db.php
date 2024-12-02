<?php
// Database configuration
$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "myfirstdatabase"; 

// Create a connection using MySQLi
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
