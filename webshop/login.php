<?php

session_start();


include ('header.php');
include ('navbar.php');
$t = isset($_SESSION['user']);

if ($t) {
echo "<div class=\"alert alert-success\">Du är inloggad.</div>";
} else {
include('loginscreen.php');
}
?>
