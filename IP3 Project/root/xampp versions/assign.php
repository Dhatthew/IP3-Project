<!DOCTYPE html>

<?php
header("Location: competitions.php");

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

$id = $_POST['event_id'];	
$commiteeid = $_POST['admin_id'];				

$query = "UPDATE events SET commiteeid = '$commiteeid' WHERE id ='$id'";
$data = mysqli_query($link, $query) or die(mysqli_error());		

mysqli_close($link);	

?>

</body>

</html>