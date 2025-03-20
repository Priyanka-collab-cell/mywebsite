<?php
$servername = 'localhost'; // Database host
$dbname = 'mens_clothing'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>