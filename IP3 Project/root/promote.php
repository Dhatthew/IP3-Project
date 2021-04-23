<!DOCTYPE html>

<html>

<head>

<title>Promote Member</title>

<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>

<body>

<ul class="topnav">
  <li><img src="images/caleChargers.jpg" alt="chargers logo" style="width:75px;height:80px;"></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="rules.php">Rules</a></li>
  <li><a href="meetup.php">Meetups</a></li>
  <li><a href="events.php">Events</a></li>
  <li><a href="faq.php">FAQ</a></li>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

</br> </br> </br>
<h1>Admin promotion</h1>

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

$type= $_POST['version'];

$check = "SELECT id, forename, surname FROM logins WHERE type='$type'";
$rows = mysql_query($check) or die(mysql_error());			
$count = mysql_num_rows($rows);

if($count!= 0) {
	
	?>
		<form name="promote" action="update.php" method="post">
		<?php echo '<input name="type" hidden value="'.$type.'">' ?>
		<select name="member" required>
		<option value="" selected disabled>--</option>	<?php

while($info = mysql_fetch_array( $rows))				
	{
		
			echo "<option value=".$info['id'].">".$info['forename']." ".$info['surname']."</option>";
			
	} 
	?> </select>
		<input type ="submit" value ="promote member">
		</form> <?php
	} else {
	echo 'Sorry, there are currently no commitee members availible for promotion';
	}

mysql_close($link);	

?>

</body>

</html>