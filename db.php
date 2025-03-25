<?php
// Database connection details
$servername = "localhost"; // Typically localhost
$username = "root";        // Your MySQL username (default is 'root' for local development)
$password = "";            // Your MySQL password (default is empty for local development)
$dbname = "music_streaming"; // The name of the database you created in phpMyAdmin

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful message (optional, can be removed later)
echo "Connected successfully";
?>
