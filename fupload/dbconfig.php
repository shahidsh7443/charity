<?php
$servername = "localhost";
$username = "root";
$password = "razorbee123";
$dbname = "upload";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>