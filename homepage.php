<!DOCTYPE html>
<html>
 <head>
   <title>HOME PAGE</title>
  </head>
<link rel="stylesheet" type="text/css" href="homepage.css">     
<body>

<div id="header">
<h1>MUSIC ZONE</h1>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
   <li><a href="#about">Address</a></li>
</ul>

</div>



<div id="navleft">
<form action="audiosong.php" method="POST">
<input type="submit" name ="Audio Song" value="Audio Song"><br>
</form>

<form action="videosong.php" method="POST">
<input type="submit" name ="video Song" value="Video Song"><br>
</form>

<form action="wallpaper.php" method="POST">
<input type="submit" name ="WallPaper" value="WallPaper"><br>
</form>
</div>


<div id="navright">
<form action="customersignup.php" method="POST" style ="float:center;">
<h2>Customer Sign Up:</h2>
     First Name:<input type="text" name="Fname"><br>
     Last Name :<input type="text" name="Lname"><br>
     Email Id : <input type="Email" name="Email"><br>
     Password : <input type="Password" name="Password"><br>	 
                <input type="submit" name="submit" value="Sign Up">
</form>

</div>


<div id="section">
<form action="adminlogin.php" method="POST" style ="float:right;">

<h2>Admin Login:</h2>
     Email   :<input type="Email" name="Email">
     Password:<input type="Password" name="Password">	 
              <input type="submit" name="Log In" value="Log In">
</form>

<form action="customer_login.php" method="POST" style="float:right;">
<h2>Customer Login:</h2>
     Email Id: <input type="email" name="Email">
     Password:<input type="password" name="Password">
              <input type="submit" name="submit" value="Login">
</form>


</div>

<div id="footer">
Copyright © manumedia.com
</div>


<?php
//echo "home";
?>

</body>
</html>
