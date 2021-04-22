<!DOCTYPE HTML>

<html>

<head>

<title>Home</title>

<link rel="stylesheet" type="text/css" href="mystyle.css">

 
</head>

<style>
#slider {
	background:#green;
	border:5px solid #eaeaea;
	box-shadow:1px 1px 5px rgba(0,0,0,0.7);
	height:320px;
	width:680px;
	margin:20px auto 0;
	overflow:visible;
	position:relative;
}
#mask {
	overflow:hidden;
	height:320px;
}
#slider ul {
	margin:0;
	padding:0;
	position:relative;
}
#slider li {
	width:680px;
	height:320px;
	position:absolute;
	top:-325px;
	list-style:none;
}
#slider li.first {
	-moz-animation:cycle 25s linear infinite;
	-webkit-animation:cycle 25s linear infinite;		
}
#slider li.second {
	-moz-animation:cycletwo 25s linear infinite;
	-webkit-animation:cycletwo 25s linear infinite;		
}
#slider li.third {
	-moz-animation:cyclethree 25s linear infinite;
	-webkit-animation:cyclethree 25s linear infinite;		
}

#slider li.fourth {
	-moz-animation:cyclefour 25s linear infinite;
	-webkit-animation:cyclefour 25s linear infinite;		
}
#slider li.fifth {
	-moz-animation:cyclefive 25s linear infinite;
	-webkit-animation:cyclefive 25s linear infinite;		
}
#slider:hover li, 
#slider:hover .progress-bar {
	-moz-animation-play-state:paused;
	-webkit-animation-play-state:paused;
}
.progress-bar { 
	position:relative;
	top:-5px;
	width:680px; 
	height:10px;
	background:white;
	-moz-animation:fullexpand 25s ease-out infinite;
	-webkit-animation:fullexpand 25s ease-out infinite;
}

/* ANIMATION */
@-moz-keyframes cycle {
	0%  { top:0px; }
	4%  { top:0px; } 
	16% { top:0px; opacity:1; z-index:0; } 
	20% { top:325px; opacity:0; z-index:0; } 
	21% { top:-325px; opacity:0; z-index:-1; }
	92% { top:-325px; opacity:0; z-index:0; }
	96% { top:-325px; opacity:0; }
	100%{ top:0px; opacity:1; }
	
}
@-moz-keyframes cycletwo {
	0%  { top:-325px; opacity:0; }
	16% { top:-325px; opacity:0; }
	20% { top:0px; opacity:1; }
	24% { top:0px; opacity:1; } 
	36% { top:0px; opacity:1; z-index:0; } 
	40% { top:325px; opacity:0; z-index:0; }
	41% { top:-325px; opacity:0; z-index:-1; } 
	100%{ top:-325px; opacity:0; z-index:-1; }
}
@-moz-keyframes cyclethree {
	0%  { top:-325px; opacity:0; }
	36% { top:-325px; opacity:0; }
	40% { top:0px; opacity:1; }
	44% { top:0px; opacity:1; } 
	56% { top:0px; opacity:1; } 
	60% { top:325px; opacity:0; z-index:0; }
	61% { top:-325px; opacity:0; z-index:-1; } 
	100%{ top:-325px; opacity:0; z-index:-1; }
}
@-moz-keyframes cyclefour {
	0%  { top:-325px; opacity:0; }
	56% { top:-325px; opacity:0; }
	60% { top:0px; opacity:1; }
	64% { top:0px; opacity:1; }
	76% { top:0px; opacity:1; z-index:0; }
	80% { top:325px; opacity:0; z-index:0; }
	81% { top:-325px; opacity:0; z-index:-1; }
	100%{ top:-325px; opacity:0; z-index:-1; }
}
@-moz-keyframes cyclefive {
	0%  { top:-325px; opacity:0; }
	76% { top:-325px; opacity:0; }
	80% { top:0px; opacity:1; }
	84% { top:0px; opacity:1; }
	96% { top:0px; opacity:1; z-index:0; }
	100%{ top:325px; opacity:0; z-index:0; }
}

@-webkit-keyframes cycle {
	0%  { top:0px; }
	4%  { top:0px; }
	16% { top:0px; opacity:1; z-index:0; } 
	20% { top:325px; opacity:0; z-index:0; }
	21% { top:-325px; opacity:0; z-index:-1; }
	50% { top:-325px; opacity:0; z-index:-1; }
	92% { top:-325px; opacity:0; z-index:0; }
	96% { top:-325px; opacity:0; }
	100%{ top:0px; opacity:1; }
	
}
@-webkit-keyframes cycletwo {
	0%  { top:-325px; opacity:0; }
	16% { top:-325px; opacity:0; }
	20% { top:0px; opacity:1; }
	24% { top:0px; opacity:1; } 
	36% { top:0px; opacity:1; z-index:0; } 
	40% { top:325px; opacity:0; z-index:0; }
	41% { top:-325px; opacity:0; z-index:-1; }  
	100%{ top:-325px; opacity:0; z-index:-1; }
}
@-webkit-keyframes cyclethree {
	0%  { top:-325px; opacity:0; }
	36% { top:-325px; opacity:0; }
	40% { top:0px; opacity:1; }
	44% { top:0px; opacity:1; } 
	56% { top:0px; opacity:1; z-index:0; } 
	60% { top:325px; opacity:0; z-index:0; } 
	61% { top:-325px; opacity:0; z-index:-1; }
	100%{ top:-325px; opacity:0; z-index:-1; }
}
@-webkit-keyframes cyclefour {
	0%  { top:-325px; opacity:0; }
	56% { top:-325px; opacity:0; }
	60% { top:0px; opacity:1; }
	64% { top:0px; opacity:1; }
	76% { top:0px; opacity:1; z-index:0; }
	80% { top:325px; opacity:0; z-index:0; }
	81% { top:-325px; opacity:0; z-index:-1; }
	100%{ top:-325px; opacity:0; z-index:-1; }
}
@-webkit-keyframes cyclefive {
	0%  { top:-325px; opacity:0; }
	76% { top:-325px; opacity:0; }
	80% { top:0px; opacity:1; }
	84% { top:0px; opacity:1; }
	96% { top:0px; opacity:1; z-index:0; }
	100%{ top:325px; opacity:0; z-index:0; }
}

/* ANIMATION BAR */
@-moz-keyframes fullexpand {
    0%, 20%, 40%, 60%, 80%, 100% { width:0%; opacity:0; }
    4%, 24%, 44%, 64%, 84% { width:0%; opacity:0.3; }
   16%, 36%, 56%, 76%, 96% { width:100%; opacity:0.7; }
   17%, 37%, 57%, 77%, 97% { width:100%; opacity:0.3; }
   18%, 38%, 58%, 78%, 98% { width:100%; opacity:0; }	
}
@-webkit-keyframes fullexpand {
    0%, 20%, 40%, 60%, 80%, 100% { width:0%; opacity:0; }
    4%, 24%, 44%, 64%, 84% { width:0%; opacity:0.3; }
   16%, 36%, 56%, 76%, 96% { width:100%; opacity:0.7; }
   17%, 37%, 57%, 77%, 97% { width:100%; opacity:0.3; }
   18%, 38%, 58%, 78%, 98% { width:100%; opacity:0; }	
}
</style>

<body>
  
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

<h1>Welcome to the GCU Epsorts Society</h1>

 <h2>Upcoming Events</h2>
        <div id="slider">
          <div id="mask">
            <ul>
              <li class="first"> <a href="events.php"> <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi0.wp.com%2Fwww.theeditgcu.com%2Fwp-content%2Fuploads%2F2019%2F03%2FARTICLE-1-WIDE.png%3Ffit%3D1065%252C585%26ssl%3D1&f=1&nofb=1" style="width:680px;height:320px"/> </a></li>
              <li class="second"> <a href="events.php"> <img src="https://scontent-lcy1-1.xx.fbcdn.net/v/t1.6435-9/83179017_608082053098244_7562955448500879360_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=973b4a&_nc_ohc=Qn0Ousv53akAX_sJZt0&_nc_ht=scontent-lcy1-1.xx&oh=3e7e0e11aaa68c007760be2292a6838c&oe=609B1BC1" style="width:680px;height:320px"/> </a></li>
              <li class="third"> <a href="events.php"> <img src="https://scontent-lcy1-1.xx.fbcdn.net/v/t1.6435-9/73504753_530434640862986_3972362131914883072_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=973b4a&_nc_ohc=VxwbCGiffoAAX-1zW55&_nc_ht=scontent-lcy1-1.xx&oh=2c1dbe7512b4686d1e10e864c13ddad7&oe=609AC56C" style="width:680px;height:320px"/> </a></li>
              <li class="fourth"> <a href="events.php"> <img src="https://scontent-lcy1-1.xx.fbcdn.net/v/t1.6435-9/72239713_520029738570143_564107833654640640_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=973b4a&_nc_ohc=Bmy6draCCPYAX-cyZSL&_nc_ht=scontent-lcy1-1.xx&oh=745bf9f4de2fbadf6cecb43d8a513181&oe=60985384" style="width:680px;height:320px"/> </a></li>
              <li class="fifth"> <a href="events.php"> <img src="https://scontent-lcy1-1.xx.fbcdn.net/v/t1.6435-9/70093808_504778103428640_5477832341931950080_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=973b4a&_nc_ohc=GJEMvV6IVeMAX_q_7XU&_nc_ht=scontent-lcy1-1.xx&oh=bb6a8ec6f85455df1b373cf8168304ce&oe=609903DF" style="width:680px;height:320px"/> </a></li>
            </ul>
          </div>
          <div class="progress-bar"></div>
        </div>
		</br>
<?php

		if (isset($_COOKIE['type']) && $_COOKIE['type']== 1) {	
		?><p>As a member of our society we welcome you!</p><?php
		} elseif (isset($_COOKIE['type']) && $_COOKIE['type']== 2) {
			?><p>As one of our Commitee members, you can oversee society activities!</p><?php
		} elseif (isset($_COOKIE['type']) && $_COOKIE['type']== 3) { 
		?> <form action="promote.php" method="post">
			<input hidden name="version" value=2>
		<input type="submit" value="Click here to promote a Commitee member to an admin"></form>
		</br>
		<form action="promote.php" method="post">
			<input hidden name="version" value=1>
		<input type="submit" value="Click here to promote a regular member to a Commitee member"></form>		<?php
		} else {
	?>
    <p>login to access member only properties!
	<?php
}		
?>

</body>

</html>