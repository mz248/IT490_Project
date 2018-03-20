<?php
$servername = "localhost";
$username = "root";
$password = "Master@1234";
$dbname = "mihad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (
user_first VARCHAR(20),
user_last VARCHAR(20), 
user_email VARCHAR(20), 
user_uid VARCHAR(20), 
user_pwd VARCHAR(20)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
