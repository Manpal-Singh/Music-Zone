<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "musiczone";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) 
    die("Connection failed: " . mysqli_connect_error());

if(isset($_POST['submit']))
{
	$firstname=$_POST['Fname'];
    $lastname=$_POST['Lname'];
    $email=$_POST['Email'];
	$password=$_POST['Password'];

	$sql="insert into customer_signup(firstname,lastname,email,password)values
	        ('$firstname','$lastname','$email','$password')";

   if (mysqli_query($conn, $sql)) 
     echo "<h1>Sign Up successfully</h1>";
   else
      echo "Error in Sign Up";
}
mysqli_close($conn);
?> 

