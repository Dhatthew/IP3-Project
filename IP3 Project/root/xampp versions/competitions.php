<!DOCTYPE HTML>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystylev3.css">
</head>
<title>Competitions</title> 



		
<body>
 
<div class="back-image">
 
<div id="container">
    <nav>
        <ul>
            <li><img src="images/caleChargers.jpg" alt="My Image" style="width:75px;height:80px;"></li>
			<li><a href="home.php">Home</a></li>
			<li><a href="rules.php">Rules</a></li>
            <li><a class="active" href="#">Events</a>
            <ul>
                <li><a class="active" href="competitions.php">Competitions</a></li>
                <li><a href="meetups.php">Meetups</a></li>
                
            </ul>        
            </li>
            <li><a href="roster.php">Roster</a></li>
			<li><a href="merch.php">Merch</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
			<?php
	if(isset($_COOKIE['type'])){
		?>
		
		<li class="right"><a href="logout.php">Logout</a></li>
		
		<?php
} else {
	?>
	
    <li class="right"><a href="login.html">Login</a></li>
	<li class="right"><a href="registration.html">Register</a></li>
	<?php
}		
?>	
    </nav>
 <!--
 <?php
	if(isset($_COOKIE['type'])){
		?>
		<ul>
		<li><a href="logout.php">Logout</a></li>
		</ul>
		<?php
} else {
	?>
	<ul>
    <li><a href="login.html">Login</a></li>
	<li><a href="registration.html">Register</a></li>
	<?php
}		
?>
-->
</div>



<div class="pad1Other">
<div class="contentOther">

<h1 style="text-align:center"> Competitions</h1>
<br>
<p>
<div class="containerI">
	<img src="images/nuel.png" alt="nuelpic" class="imageNUEL"width="700" height="170">
	<div class="middle">
		<div class="text">National Universities Esports League</div>
	</div>
 </div>
</p>

 <h2 align = "center">NUEL Spring 2021: Rainbow Six Siege</h2>
 
 <p>
	<h3>Round 1</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs Based in Bath</li>
	<li> Caledonian Chargers (B) vs Trent Warfare</li>
	
</ul></p>

<p>
	<h3>Round 2</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs Cardiff Crusaders</li>
	<li> Caledonian Chargers (B) vs Reading Whitenights</li>
	
</ul></p>

<p>
	<h3>Round 3</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs Warwick Geese</li>
	<li> Caledonian Chargers (B) vs York VKs</li>
	
</ul></p>

<h2 align = "center">NUEL Winter 2020: Overwatch</h2>

<p>
	<h3>Round 1</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs Durham Defenders</li>
	<li> Caledonian Chargers (B) vs Cardiff Killers</li>
	
</ul></p>

<p>
	<h3>Round 2</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs Belfast Berserkers</li>
	<li> Caledonian Chargers (B) vs LJMU-Aeris</li>
	
</ul></p>

<p>
	<h3>Round 3</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs Edinburgh Napier (B)</li>
	<li> Caledonian Chargers (B) vs Made in Bristol</li>
	
</ul></p>

<p>
	<h3>Round 4</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs Vanix Esports</li>
	<li> Caledonian Chargers (B) vs Dog Legs</li>
	
</ul></p>

<h2 align = "center">NUEL Spring 2020: Rocket League</h2>

<p>
	<h3>Round 1</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs LJMU-Aeris</li>
	<li> Caledonian Chargers (B) vs Cardiff Killers</li>
	<li> Caledonian Chargers (C) vs Trent Warfare</li>
</ul></p>

<p>
	<h3>Round 2</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs Warwick Warfare</li>
	<li> Caledonian Chargers (B) vs Durham Defenders</li>
	
</ul></p>

<p>
	<h3>Round 3</h3>
<ul class="styling">
	<li> Caledonian Chargers (A) vs Made in Bristol)</li>
	<li> Caledonian Chargers (B) vs Vanix Esports</li>
	
</ul></p>
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


$query = "SELECT * FROM events WHERE type='competition'";	
$rows = mysqli_query($link, $query) or die(mysqli_error());			
$count = mysqli_num_rows($rows);

if($count!=0)												
	{

while($info = mysqli_fetch_array( $rows))				
	{
     echo '<h2>' .$info['name']. '</h2>';
	 echo $info['description'];
	 
	 if(isset($_COOKIE['type']) && $_COOKIE['type'] >= 2){
	 ?> <form method="post" action="assign.php"> <?php
	 echo '<input hidden name="admin_id" value="'.$_COOKIE['id'].'">'; 
	 echo '<input hidden name="event_id" value="'.$info['id'].'">';
	 ?> <input type="submit" value="click here to lead this event"> </form> <?php
	 }
	 
	} 
	} else {
		echo 'no fundraisers found';
	}

?>

</div>
</div>
</div>
</body>
</html>