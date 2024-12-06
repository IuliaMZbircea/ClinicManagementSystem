<?php
$host = 'localhost';
$username = 'root';
$password = 'root'; // Default MAMP password
$dbname = 'clinic_db';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
