<!DOCTYPE html>

<html>

<head>

<title>Membership Confirmation</title>

<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>

<body>

<ul class="topnav">
  <li><img src="images/caleChargers.jpg" alt="chargers logo" style="width:55px;height:55px;"></li>
  <li><a href="rules.php">Rules</a></li>
  <li><a href="meetup.php">Meetups</a></li>
  <li><a href="events.php">Events</a></li>
  <li><a href="faq.php">FAQ</a></li>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="registration.html">Register</a></li>
</ul>


<h1>Glasgow Caledonian Esports Society membership conformation</h1>

<?php

$servername="localhost"; 									
$username="root";        									
$password="usbw";            									
$database="test";  									
$link=mysql_connect($servername,$username,$password);		
if(! $link)													
	{
	die('Connection Failed'.mysql_error());
	}
mysql_select_db($database,$link);	

$forename = $_POST['forename'];					
$surname = $_POST{'surname'};
$age = $_POST{'age'};				
$email = $_POST{'email'};
$password =	$_POST{'password'};
$type = $_POST{'type'};

$check = "SELECT email FROM logins WHERE email='$email'";
$rows = mysql_query($check) or die(mysql_error());			
$count = mysql_num_rows($rows);

if($count== 0) {

$query = "INSERT INTO logins (forename,surname,age,email,password, type) VALUES ('$forename','$surname','$age','$email','$password','$type')";
$data = mysql_query($query)or die(mysql_error());			
if($data)													
	{
	echo "Your registration has been successful";			
	}
	else {
		
		echo "Your registration was unsuccessful";
		
	}
	
}
else {
	echo "Email address already registered in system. Please log in or try again";
}

mysql_close($link);	

?>

</body>

</html>