<!DOCTYPE HTML>

<html>

<head>

<title>Rules</title>


<link rel="stylesheet" type="text/css" href="mystylev3.css">



</head>

<body>

<div class="back-image">

<div id="container">
    <nav>
        <ul>
            <li><img src="images/caleChargers.jpg" alt="My Image" style="width:75px;height:80px;"></li>
			<li><a href="home.php">Home</a></li>
			<li><a class="active" href="rules.php">Rules</a></li>
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
<h1 style="text-align:center">Society Rules</h1>
<div class="contentOther">

<p> Should you wish to  join our society, as a hobby with friends or to respresent our society on a competitive level,
you are expected to adhere to the following rules:</p>

<p>1. No political or geopolitical discussion. </p>
<p>2. No spamming or flooding the society Discord server. </p>
<p>3. Keep content posted to the Discord server to the relevant channels. </p>
<div class="right"> If you think there should be a channel added for specific content, use #suggestions and let us know.</div></br>
<p>4. Be respectful towards others. </p>
<div class="right">We have a zero-tolerance policy on racism, sexism, sectarianism and bigotry in voice channels and text channels. GCU is a welcoming and friendly
environment with students from many different backgrounds and as such, all members should aim to promote inclusivity and diversity while being a
part of the society. </div></br>
<p>5. No incitement of violence, bullying or harassment. </p>
<div class="right">Keep conversations civil. This includes channels in the discord and private messages between members.</div></br>
<p>6. No NSFW content.</p>
<div class="right">This includes nicknames, statuses and profile pictures.</div> </br>
<p>7. No advertising/promotions without permission.</p>
<div class="right">There are some good-faith exceptions such as invites to relevant personal gatherings or relevant afterparties, game invites, GCU + NUEL/NSE related
streams etc.</br>
If you wish to promote something in the #promotions channel, please contact a Committee member.</div>

</div>
</div>
</div>

</body>

</html>