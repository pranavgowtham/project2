﻿<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 

<?php
$servername = "localhost";
$Rollnumber = "Rollnumber";
$password = "password";

// Create connection
$conn = new mysqli($servername, $Rollnumber, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
</body>
</html>