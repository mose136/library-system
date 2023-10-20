<?php
$servername = "localhost"; // Name of your MySQL server
$user = "root"; // MySQL username
$password = ""; // MySQL password (leave empty if not set)
$DATABASE_NAME = "lib"; // Name of the database you created

// Create a database connection
$conn = new mysqli($servername, $user, $password, $DATABASE_NAME);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
