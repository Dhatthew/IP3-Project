<!DOCTYPE html>

<html>

<head>

<title>Promote Member</title>

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

<h1 align="center">Admin promotion</h1>

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

</div>
</div>
</br></br></br></br></br></br></br></br></br>
</div>

</body>

</html>