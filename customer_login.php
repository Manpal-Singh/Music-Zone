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

$sql = "SELECT email, password FROM customer_signup";
$result = mysqli_query($conn, $sql);

if(isset($_POST['submit']))
{
	$email=$_POST['Email'];
    $password=$_POST['Password'];   
}
if (mysqli_num_rows($result) > 0) 
{    // output data of each row
    while($row = mysqli_fetch_assoc($result))
     {
    	if($row["email"]==$email&&$row["password"]==$password)  // echo "id: " . $row["email"]. " - Name: " . $row["password"]. "<br>";
        {
        	echo "<h1>Customer Logged In Successfully...</h1>";
        	exit;
        }
     }
      echo "<h1>Invalid Email Or Password...</h1>";
 }

mysqli_close($conn);
?> 