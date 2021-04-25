<!DOCTYPE html>

<html>

<head>

<title>Membership Confirmation</title>

<link rel="stylesheet" type="text/css" href="mystylev3.css">

</head>

<body>

<div id="container">

<nav>
        <ul>
            <li><img src="images/caleChargers.jpg" alt="My Image" style="width:75px;height:80px;"></li>
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
			<li class="right"><a href="registration.html">Register</a></li>

    </nav>

</div>

<div class="back-image">
<div class="pad1Other">

<h1>Glasgow Caledonian Esports Society membership conformation</h1>

<div class="contentOther">

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

$forename = $_POST['forename'];					
$surname = $_POST{'surname'};
$age = $_POST{'age'};				
$email = $_POST{'email'};
$password =	$_POST{'password'};
$type = $_POST{'type'};

$check = "SELECT email FROM logins WHERE email='$email'";
$rows = mysqli_query($link, $check) or die(mysqli_error());			
$count = mysqli_num_rows($rows);

if($count== 0) {

$query = "INSERT INTO logins (forename,surname,age,email,password, type) VALUES ('$forename','$surname','$age','$email','$password','$type')";
$data = mysqli_query($link, $query)or die(mysqli_error());			
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

mysqli_close($link);	

?>

</div>
</div>
</br></br></br></br></br></br></br></br></br>
</div>

</body>

</html>