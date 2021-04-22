<?php
header("Location: home.php");
	unset($_COOKIE['type']);
    setcookie('type', '', time() - 3600, '/');
	
	unset($_COOKIE['id']);
    setcookie('id', '', time() - 3600, '/'); // empty value and old timestamp
?>