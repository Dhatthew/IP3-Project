<!DOCTYPE html>

<html>

<head>

<title>Promotion Confirmation</title>

<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>

<body>

<ul class="topnav">
  <li><img src="images/caleChargers.jpg" alt="chargers logo" style="width:55px;height:55px;"></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="rules.php">Rules</a></li>
  <li><a href="meetup.php">Meetups</a></li>
  <li><a href="events.php">Events</a></li>
  <li><a href="faq.php">FAQ</a></li>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="registration.html">Register</a></li>
</ul>

</br> </br> </br>

<h1>Promotion Confirmation</h1>

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

$id = $_POST['member'];		
$type = $_POST['type'];			
$type++;

$query = "UPDATE logins SET type = '$type' WHERE id ='$id'";
$data = mysql_query($query)or die(mysql_error());			
if($data)													
	{
	echo "Member promoted";			
	}
	else {
		
		echo "Was not able to promote member";
		
	}


mysql_close($link);	

?>

</body>

</html>