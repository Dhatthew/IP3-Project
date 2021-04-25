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
		<li class="right"><a  href="logout.php">Logout</a></li>
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
$link=mysqli_connect($servername,$username,$password);		
if(! $link)													
	{
	die('Connection Failed'. mysqli_error());
	}
mysqli_select_db($link, $database);

$id = $_POST['member'];		
$type = $_POST['type'];			
$type++;

$query = "UPDATE logins SET type = '$type' WHERE id ='$id'";
$data = mysqli_query($link, $query) or die(mysqli_error());					
if($data)													
	{
	echo "Member promoted";			
	}
	else {
		
		echo "Was not able to promote member";
		
	}


mysqli_close($link);	

?>

</div>
</div>
</br></br></br></br></br></br></br></br></br>
</div>

</body>

</html>