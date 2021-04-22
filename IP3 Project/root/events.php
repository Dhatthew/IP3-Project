<!DOCTYPE HTML>

<html>

<head>

<title>Events</title>

<link rel="stylesheet" type="text/css" href="mystyle.css">

<script>

function hide() {
  var z1 = document.getElementById("fundraisers")
  var z2 = document.getElementById("giveaways")

  z1.style.display = "none";
  z2.style.display = "none";
  
}

function showFundraisers() {
  var y1 = document.getElementById("fundraisers");
  var y2 = document.getElementById("giveaways");

  y1.style.display = "block";
  y2.style.display = "none";
  
}

function showGiveaways() {
  var x1 = document.getElementById("fundraisers");
  var x2 = document.getElementById("giveaways");

  x1.style.display = "none";
  x2.style.display = "block";
  
}

</script>

</head>

<body onload="hide()">

<ul class="topnav">
		<li><img src="images/caleChargers.jpg" alt="chargers logo" style="width:55px;height:55px;"></li>
		<li><a href="home.php">Home</a></li>
		<li><a href="rules.php">Rules</a></li>
		<li><a href="meetup.php">Meetups</a></li>
		<li><a href="events.php">Events</a></li>
		<li><a href="faq.php">FAQ</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		
<?php
	if(isset($_COOKIE['type'])){
		?>
		<li><a href="logout.php">Logout</a></li>
		<?php
} else {
	?>
    <li><a href="login.html">Login</a></li>
	<li><a href="registration.html">Register</a></li>
	<?php
}		
?>
</ul>

</br> </br> </br>

<img src="images/fundraising.png" alt="fundraising" style="width:200px;height:200px;" onclick="showFundraisers()">
<img src="images/giveaway.jpg" alt="give away" style="width:200px;height:200px;" onclick="showGiveaways()">

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
?>

<div id="fundraisers">

<?php

$query = "SELECT * FROM events WHERE type='fundraiser'";	
$rows = mysql_query($query) or die(mysql_error());			
$count = mysql_num_rows($rows);

if($count!=0)												
	{

while($info = mysql_fetch_array( $rows))				
	{
     echo 'Name:' .$info['name']. '</br>';
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

<div id="giveaways">

<?php

$query = "SELECT * FROM events WHERE type='giveaway'";	
$rows = mysql_query($query) or die(mysql_error());			
$count = mysql_num_rows($rows);

if($count!=0)												
	{

while($info = mysql_fetch_array( $rows))				
	{
     echo 'Name:' .$info['name']. '</br>';
	 echo $info['description'];
	 
	 if(isset($_COOKIE['type']) && $_COOKIE['type'] >= 2){
	 ?> <form method="post" action="assign.php"> <?php
	 echo '<input hidden name="admin_id" value="'.$_COOKIE['id'].'">'; 
	 echo '<input hidden name="event_id" value="'.$info['id'].'">';
	 ?> <input type="submit" value="click here to lead this event"> </form> <?php
	 }
	 
	} 
	} else {
		echo 'no giveaways found';
	}	

?>

</div>

</body>

</html>