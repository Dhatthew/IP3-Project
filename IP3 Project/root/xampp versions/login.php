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
header("Location: home.php");
$servername="localhost"; 									
$username="root";        									
$password="usbw";            									
$database="test";  									
$link=mysqli_connect($servername,$username,$password);		
if(! $link)													
	{
	die('Connection Failed'. mysqli_error());
	}
mysqli_select_db($link, $database);	



$email = $_POST['email'];									
$password = $_POST['password'];	
		
$check = "SELECT * FROM logins WHERE email='$email'";
$rows = mysqli_query($link, $check) or die(mysqli_error());			
$count = mysqli_num_rows($rows);


if($count!=0)												
	{

while($info = mysqli_fetch_array($rows))				
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
	
	
mysqli_close($link);		

									

	?>

</html>