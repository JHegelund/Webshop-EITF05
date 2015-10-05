<?php

	session_start();
	include_once 'config.php';
	// Connect to server and select databse.
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$db = new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=utf8', $username, $password);
	}
	catch(Exception $e)
	{
		die('Error : ' . $e->getMessage());
	}	
	// Define $myusername and $mypassword 
	$myEmail = $_POST['inputEmail'];
	$myPassword = $_POST['inputPassword'];
	$myFirstname = $_POST['inputFirstname'];
	$myLastname = $_POST['inputLastname'];
	$myStreet = $_POST['inputStreet'];
	$myZipcode = $_POST['inputZipcode'];
	$myCity = $_POST['inputCity'];

	// To protect MySQL injection
	$myEmail = stripslashes($myEmail);
	$myPassword = stripslashes($myPassword);
	$myFirstname = stripslashes($myFirstname);
	$myLastname = stripslashes($myLastname);
	$myStreet = stripslashes($myStreet);
	$myZipcode = stripslashes($myZipcode);
	$myCity = stripslashes($myCity);

	$emailPattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
	$passwordPattern = '/^(?=.*\d.*\d)[0-9A-Za-z!@#$%*]{8,}$/';
	$firstnamePattern = '/^[A-Z]{1,}([A-Za-z\'-\'áàâäæãåèéêëîïíìôöòóøõûüùúÿñß ]*)$/';
	$lastnamePattern ='/^[A-Z]{1,}([A-Za-z\'-\'áàâäæãåèéêëîïíìôöòóøõûüùúÿñß ]*)$/';
	$streetPattern = '/^[0-9A-Z]{1,}([0-9A-Za-z\'-\'áàâäæãåèéêëîïíìôöòóøõûüùúÿñß ]*)$/'; 
	$zipcodePattern = '/^[0-9]{5}$/';
	$cityPattern = '/^[A-Z]{1,}([A-Za-z\'-\'áàâäæãåèéêëîïíìôöòóøõûüùúÿñß ]*)$/';

	if (preg_match($emailPattern, $myEmail) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ange giltig e-postadress.</div>";
		exit();
	}
	if (preg_match($passwordPattern, $myPassword) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Lösenordet måste vara minst 8 tecken långt och innehålla bokstäver eller !@#$%* och siffror.</div>";
		exit();
	}
	if (preg_match($firstnamePattern, $myFirstname) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ange giltigt förnamn. Måste börja med stor bokstav.</div>";
		exit();
	}
	if (preg_match($lastnamePattern, $myLastname) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ange giltigt efternamn. Måste börja med stor bokstav.</div>";
		exit();
	}
	if (preg_match($streetPattern, $myStreet) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ange giltig gatuadress. Måste börja med stor bokstav eller siffra.</div>";
		exit();
	}
	if (preg_match($zipcodePattern, $myZipcode) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ange postnummer på formen XXXXX.</div>";
		exit();
	}
	if (preg_match($cityPattern, $myCity) !== 1) {
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ange giltig stad. Måste börja med stor bokstav.</div>";
		exit();
	}

	$hashedPassword = password_hash($myPassword, PASSWORD_DEFAULT);
		
	$sql = "INSERT INTO users VALUES (?, ?, ?, ?, ?, ?, ?)";

	try {
		$stmt = $db->prepare($sql);
		$stmt->execute(array($myEmail, $hashedPassword, $myFirstname, $myLastname, $myStreet, $myZipcode, $myCity));
	} catch (PDOException $e) {
		$error = "*** Internal error: " . $e->getMessage() . "<p>" . $query;
		die($error);
	}

	// True if user was inserted.
	if($stmt){
		echo "<div class=\"alert alert-success\">Kontot har skapats.</div>";
	}
	else {
		//return the error message
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Användaren finns redan.</div>";
	}
?>