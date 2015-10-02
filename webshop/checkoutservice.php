<?php
	
	//ob_start();
	session_start();
	include_once 'config.php';
	
	// Define credit card variables
	$myCardType = $_POST['inputCardType'];
	$myCardNbr = $_POST['inputCardNbr'];
	$myCardName = $_POST['inputCardName'];
	$myExpMonth = $_POST['inputExpMonth'];
	$myExpYear = $_POST['inputExpYear'];
	$myCvc = $_POST['inputCvc'];

	// To protect MySQL injection
	$myCardNbr = stripslashes($myCardNbr);
	$myCardName = stripslashes($myCardName);
	$myCvc = stripslashes($myCvc);

	// RegEx patterns
	$cardNbrPattern = '/^[0-9]{16}$/';
	$cardNamePattern = '/^[A-Z]{1,}([A-Za-z\'-\'áàâäæãåèéêëîïíìôöòóøõûüùúÿñß ]*)$/';
	$cvcPattern = '/^[0-9]{3}$/';

	if (preg_match($cardNbrPattern, $myCardNbr) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ange kortnummer bestående av 16 siffror utan blanksteg.</div>";
		exit();
	}
	if (preg_match($cardNamePattern, $myCardName) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ange giltigt namn. Namnet måste börja med stor bokstav.</div>";
		exit();
	}
	if (preg_match($cvcPattern, $myCvc) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ange CVC-kod bestående av 3 siffror.</div>";
		exit();
	}

	echo '<meta http-equiv="refresh" content="0; URL=receipt.php">';

	$_SESSION['receipt']=[];
	foreach ($_SESSION['basket'] as $item) {
   		array_push($_SESSION['receipt'], $item);
	}

	unset($_SESSION['basket']);
?>