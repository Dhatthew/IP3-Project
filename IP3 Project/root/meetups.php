<!DOCTYPE HTML>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystylev3.css">
</head>
<title>Meetups</title> 



		
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
                <li><a href="competitions.php">Competitions</a></li>
                <li><a  class="active" href="meetups.php">Meetups</a></li>  
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
<h1 style="text-align:center"> Meetups</h1>
<br>
<p>
<div class="containerI">
	<img src="images/campus.jpg" alt="campuspic" class="imageCampus"width="640" height="270">
	<div class="middle">
		<div class="text">GCU Campus</div>
	</div>
 </div>
</p>

 <h2 align = "center">Meetups are currently unavailable due to the social distancing guidlines issued by the government regarding COVID-19. We will keep in 
 touch and let you know when they are green lighted. Thanks for your support, the team at the Caledonian Chargers. </h2>
 
 <h2>Past meetups are displayed below.</h2>
 <p>
	
<ul class="styling">
	<li> Sir Alex Ferguson Building, GCU Campus 22/2/20</li>
	<li> Students' Association Building, GCU Campus 16/1/20 </li>
	<li> Students' Association Building, GCU Campus 19/11/19</li>
	<li> Students' Association Building, GCU Campus 2/10/19</li>
	<li> Hamish Wood Conference Suite, GCU Campus 25/8/19</li>
	<li> Hamish Wood Conference Suite, GCU Campus 20/4/19</li>
	
</ul></p>



		
<?php
	if(isset($_COOKIE['type'])){ 
		
		if (isset($_COOKIE['type']) && $_COOKIE['type']== 1) {	
		?><p>As a member of our society we welcome you!</p><?php
		} elseif (isset($_COOKIE['type']) && $_COOKIE['type']== 2) {
			?><p>As one of our Commitee members, you can oversee society activities!</p><?php
		} else { ?><p>As an Admin you can oversee this website!</p><?php }
		
} else {
	?>
    <p>login to access member only properties!</p>
	<?php
}		
?>
</div>
</div>
</div>
</body>
</html>