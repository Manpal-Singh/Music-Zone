<?php
$servername="localhost";
$username="root";
$password="";
$database="musiczone";

$conn= mysqli_connect($servername,$username,$password,$database);
if($conn)
{
	echo "Connnected Successfully...";
}
else
{
		die("Connection denied");
}

?>