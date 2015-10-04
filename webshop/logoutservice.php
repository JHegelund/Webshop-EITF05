<?php
session_start();

$token = $_SESSION['token'];
unset($_SESSION['token']);
 //session_write_close();
if ($token && $_POST['token']==$token) {
	unset($_SESSION['user']);
	header('Location: login.php');
} else {
  // Potential CSRF attack.
	echo "<script type='text/javascript'>alert(\"CSRF\");</script>";
	echo '<meta http-equiv="refresh" content="0; URL=login.php">';

}


?>