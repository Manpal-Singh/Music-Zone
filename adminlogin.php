<?php
$Email= $_POST["Email"];
$Password= $_POST["Password"];
//echo $_POST["Email"];
//echo "<br>";
//echo $_POST["Password"];
//echo "<br>";
if($Email=="manpalsingh51@gmail.com"&&$Password=="manpal")
	echo "<h2>Admin Logged In Successfully...</h2>";
else
	echo "<h2>Invalid Email Or Password...</h2>";
?>