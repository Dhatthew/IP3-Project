<!DOCTYPE HTML>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystylev3.css">

<title>About Us</title> 

</head>

		
<body>
 
<div class="back-image">
 
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
            <li><a class="active" href="about.php">About</a></li>
			
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



<div class="pad1Other">

<h1 style="text-align:center"> Who are The Caledonian Chargers?</h1>

<div class="contentOther">

 <h2 align = "center">Background</h2>
 
 <p>We were first created in 2016 by a small group of GCU student's that 
 had a love for gamin, and used this passion to create a community driven 
 place for similar people to connect. It started small but grows each year 
 with more new eager members ready to represent their University with their 
 gaming skills. Our Vice President, Callum Greenshields, says "It(The Caledonian Chargers) 
 was created for the people to feel valued as part of a larger team".</p>
 
 <p>Our first gaming team was for Counter-Strike: Global Offensive (CSGO) which consisted of 
 a roster of 6 people. From here we branched into other games such as Overwatch, Valorant, Rainbow Six: Siege and a few 
 more.
  
 <div class="containerI">
	<img src="images/CC2.jpg" alt="calechargpic2" class="imageTeam"width="800" height="500">
	<div class="middle">
		<div class="text">Caledonian Charger's Overwatch Team</div>
	</div>
 </div>
 
 

		
			<h2 class="h2box" style="text-align:center"><strong> What do we do?</strong></h2> 

<p>Our main focus is competing agaist other universities from all over the world in various different games. 
At home in the UK we compete in what is known as the National University Esports League(NUEL) which is an Esports competition that 
brings the best of the best from diffirent universities to battle out on their favourite games to see who will rise the champion. 
Besides from the competetive nature, we also have small tournements within our University among the members of the teams. These games allow for 
everyone to have fun and play the games they love. However, things tend to still get just as competetive.</p>



<p>Our proudest achievements are:

<ul class="styling">
	<li> Society of the Year 2018/2019 (GCU)</li>
	<li> Best Jersey of the Year (#OCAUEAC19)</li>
	<li> Best Society Logo (#OCAUEAC19)</li>
	<li> Best Twitch of the Year (#OCAUEAC19)</li>
	<li> Most Improved Society (#OCAUEAC19)</li>
	<li> Even Player of the Year with our #1 Overwatch player Cameron (Cameron#2149)</li>
	<li> 2nd OW Campus Clash (NUEL 2019)</li>
	<li> 2nd OW (King of the North VI) </li>
</ul></p>



<p></p>


		
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