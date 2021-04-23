<!DOCTYPE html>

<html>

<head>

<title>Promotion Confirmation</title>

<link rel="stylesheet" type="text/css" href="mystylev3.css">

</head>

<body>

<div class="back-image">
<div id="container">
<nav>
<ul>
		<li><img src="images/caleChargers.jpg" alt="chargers logo" style="width:75px;height:80px;"></li>
		<li><a href="home.php">Home</a></li>
		<li><a href="rules.php">Rules</a></li>
		<li><a href="#">Events</a>
            <ul>
                <li><a href="competitions.php">Competitions</a></li>
                <li><a href="meetups.php">Meetups</a></li>
                
            </ul>        
            </li>
		<li><a href="roster.php">Roster</a></li>
		<li><a href="merch.php">Merch</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		<li><a href="about.php">About</a></li>
		<li class="right"><a  href="logout.html">Log In</a></li>
</ul>
</nav>
</div>

<div class="pad1Other">

<h1 align="center">Promotion Confirmation</h1>

<div align="center" class="contentOther">

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

</div>
</div>
</br></br></br></br></br></br></br></br></br>
</div>

</body>

</html>