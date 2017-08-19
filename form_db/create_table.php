<?php
$servername = "localhost";
$username = "root";
$password = "9913";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE list (
UserId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
FirstName VARCHAR(30) NOT NULL,
LastName VARCHAR(30) NOT NULL,
DateOfBirth DATE,
Gender VARCHAR(6) not NULL,
MobileNo BIGINT not NULL,
Email VARCHAR(50),
password VARCHAR(20),
Registration_Date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table LIST created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>