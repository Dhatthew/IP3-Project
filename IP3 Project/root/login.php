<html>

<head>

<script>
	function wrongpass()
{
alert("Incorrect Password!");
}
</script>

</head>

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


$email = $_POST['email'];									
$password = $_POST['password'];	
		
$query = "SELECT * FROM logins WHERE Email='$email'";	
$rows = mysql_query($query) or die(mysql_error());			
$count = mysql_num_rows($rows);	


if($count!=0)												
	{

while($info = mysql_fetch_array( $rows))				
	{
	if ($password == $info['password'])					
		{ 
	  	echo '<br/>';
		
		$cookie_name = "type";
		$cookie_value = $info['type'];
		setcookie($cookie_name, $cookie_value, time() + (86400) , "/");
		
		$cookie_name = "id";
		$cookie_value = $info['id'];
		setcookie($cookie_name, $cookie_value, time() + (86400) , "/");
		} else {
		echo '<script>wrongpass()</script>';
		}
	} 
	} else {
	echo 'Sorry, email address is unregistered.';
	echo'<br/>';
	echo '<a href="registration.html">Click here to register</a>';
	echo '<br/>';
	echo '<a href="login.html"> Click here to return to Login Page</a>';
	}
	
	
mysql_close($link);		

									

	?>

</html>