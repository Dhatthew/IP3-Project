<!DOCTYPE html>

<?php
header("Location: events.php");

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

$id = $_POST['event_id'];	
$commiteeid = $_POST['admin_id'];				

$query = "UPDATE events SET commiteeid = '$commiteeid' WHERE id ='$id'";
$data = mysql_query($query)or die(mysql_error());			

mysql_close($link);	

?>

</body>

</html>