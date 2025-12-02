<?php
// Production Database Configuration
// Update these values according to your production server
$servername = "localhost"; // Your database server host
$email = "kunj"; // Your database username
$password = "Kunj@localhost#@!"; // Your database password
$dbname = "ecomus"; // Your database name

// Create connection
$conn = new mysqli($servername, $email, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>