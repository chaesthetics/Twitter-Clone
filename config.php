<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "image_crud";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>