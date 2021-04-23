<!DOCTYPE HTML>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystylev3.css">
</head>
<title>Merch</title> 



		
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
 
			<li><a class="active" href="merch.php">Merch</a></li>
            
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

<h1 style="text-align:center"> Merch</h1>
 
 
 <div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m1.png">
      <img src="images/m1.png" alt="m1" width="425" height="402">
    </a>
    <div class="desc">Long Sleeve Hoodie-£40</div>
  </div>
</div>
 
 <div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m2.png">
      <img src="images/m2.png" alt="m2" width="425" height="402">
    </a>
    <div class="desc">Short Sleeve Jersey-£30</div>
  </div>
</div>

<div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m3.png">
      <img src="images/m3.png" alt="m3" width="425" height="402">
    </a>
    <div class="desc">Face Mask-£7.50</div>
  </div>
</div>
 
 <div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m4.png">
      <img src="images/m4.png" alt="m4" width="425" height="402">
    </a>
    <div class="desc">Mouse Pad-£14.99</div>
  </div>
</div>

<div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m5.png">
      <img src="images/m5.png" alt="m5" width="425" height="402">
    </a>
    <div class="desc">Flag-£19.99</div>
  </div>
</div>
 
 <div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m6.png">
      <img src="images/m6.png" alt="m6" width="425" height="402">
    </a>
    <div class="desc">Bespoke Sleeves-£19.99</div>
  </div>
</div>

<div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m7.png">
      <img src="images/m7.png" alt="m7" width="425" height="402">
    </a>
    <div class="desc">Unisex T-Shirt-£14.99</div>
  </div>
</div>
 
 <div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m8.png">
      <img src="images/m8.png" alt="m8" width="425" height="402">
    </a>
    <div class="desc">Cotton Gymsac-£9.99</div>
  </div>
</div>

<div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m9.png">
      <img src="images/m9.png" alt="m9" width="425" height="402">
    </a>
    <div class="desc">Beanie-£9.99</div>
  </div>
</div>
 
 <div class="responsive">
 <div class="gallery">
    <a target="_blank" href="images/m10.png">
      <img src="images/m10.png" alt="m10" width="425" height="402">
    </a>
    <div class="desc">Baseball Jersey-£24.99</div>
  </div>
</div>

<div class="clearfix"></div>

<h1>For purchases, please e-mail the product, size and quantity to 'calechargersshop@gcu.com'</h1>
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