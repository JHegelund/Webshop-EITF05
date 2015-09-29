<?php

session_start();

$productId = $_POST['productId'];

if(!isset($_SESSION['basket'])){
	$_SESSION['basket']=[];
}

array_push($_SESSION['basket'], $productId);

echo "<div class=\"alert alert-success\">$productId tillagd i varukorgen.</div>";

?>