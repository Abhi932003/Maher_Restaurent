<?php
$servername = "localhost";
$username = "root";
$password = ""; // The password for the 'root' user, if any.
$dbname = "maher";

// Attempt to connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
