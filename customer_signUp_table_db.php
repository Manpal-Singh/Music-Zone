<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "musiczone";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table
$sql = "CREATE TABLE customer_signup (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(20) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql))
    echo "Table customer_signup created successfully";
else 
    echo "Error creating table: " . mysqli_error($conn);

mysqli_close($conn);
?> 