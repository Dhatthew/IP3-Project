<!DOCTYPE HTML>

<html>

<head>

<title>Events</title>

<link rel="stylesheet" type="text/css" href="mystylev3.css">

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

<div id="container">
<nav>
<ul>
		<li><img src="images/caleChargers.jpg" alt="chargers logo" style="width:75px;height:80px;"></li>
		<li><a href="home.php">Home</a></li>
		<li><a href="rules.php">Rules</a></li>
		<li><a class="active" href="events.php">Events</a></li>
		<li><a href="roster.php">Roster</a></li>
		<li><a href="contact.php">Contact Us</a></li>
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
</ul>
</nav>
</div>

<div class="back-image">
<div class="pad1Other">

<div align="center" class="contentTrans">
<img src="images/fundraising.png" alt="fundraising" style="width:200px;height:200px;" onclick="showFundraisers()">
<img src="images/giveaway.jpg" alt="give away" style="width:200px;height:200px;" onclick="showGiveaways()">
</div>

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

<div id="fundraisers" class="contentOther">

<?php

$query = "SELECT * FROM events WHERE type='fundraiser'";	
$rows = mysql_query($query) or die(mysql_error());			
$count = mysql_num_rows($rows);

if($count!=0)												
	{

while($info = mysql_fetch_array( $rows))				
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

<div id="giveaways" class="contentOther">

<?php

$query = "SELECT * FROM events WHERE type='giveaway'";	
$rows = mysql_query($query) or die(mysql_error());			
$count = mysql_num_rows($rows);

if($count!=0)												
	{

while($info = mysql_fetch_array( $rows))				
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
		echo 'no giveaways found';
	}	

?>

</div>

</body>

</html>