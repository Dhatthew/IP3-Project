<!DOCTYPE HTML>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystylev3.css">
</head>
<title>Contact Us</title> 



		
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
            <li><a class="active" href="contact.php">Contact Us</a></li>
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

</div>

<div class="back-image">

<div class="pad1Other">

<h1 style="text-align:center"> Where to find us?</h1>

<div class="contentTrans">

 <h2 align = "center">Reach out to us through our social media platforms.</h2>
 
 
 <div class="responsive2">
 <div class="gallery2">
    <a href="https://twitter.com/calechargers?lang=en">
      <img src="images/twitterlogo.png" alt="sm1" width="240" height="171">
    </a>
    <div class="desc2">Twitter</div>
  </div>
</div>
 
 <div class="responsive2">
 <div class="gallery2">
    <a href="https://www.facebook.com/CaleEsports/">
      <img src="images/fbLogo.png" alt="sm2" width="171" height="172">
    </a>
    <div class="desc2">Facebook</div>
  </div>
</div>

<div class="responsive2">
 <div class="gallery2">
    <a href="https://www.twitch.tv/caledonianchargers">
      <img src="images/twitchLogo.png" alt="g1p3" width="300" height="170">
    </a>
    <div class="desc2">Twitch</div>
  </div>
</div>
 
 <div class="responsive2">
 <div class="gallery2">
    <a href="https://discord.gg/rbWVNbr">
      <img src="images/discordlogo.png" alt="g1p4" width="179" height="179">
    </a>
    <div class="desc2">Discord</div>
  </div>
</div>
	<!--<div class="back-text">
		<h2 style="font-size:50px">Reach out to us through our social media platforms.</h2>
		
	</div> 
	
<img src="images/twitterlogo.png" alt="twitterlogo" width="220" height="151">
 <img src="images/fbLogo.png" alt="facebooklogo" width="225" height="225">
 <img src="images/twitchLogo.png" alt="twitchlogo" width="240" height="134">
 <img src="images/discordLogo.png" alt="discordlogo" width="179" height="179">
-->
		
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