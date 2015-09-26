<?php

session_start();


include ('header.php');
include ('navbar.php');
$t = isset($_SESSION['user']);

$user = $_SESSION['user'];

if ($t) {
echo "<link href='css/login.css' type='text/css' rel='stylesheet'/><div id=\"message\" class=\" container form-signin\"><div class=\"alert alert-success\">Du är inloggad som $user.</div></div>";
} else {
include('loginscreen.php');
}
?>
