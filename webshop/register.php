<?php
	
	ob_start();
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
	$myusername = $_POST['inputEmail']; 
	$mypassword = $_POST['inputPassword'];
	$myaddress = $_POST['inputAddress']; 
	// To protect MySQL injection
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myaddress = stripslashes($myaddress);
		
	$stmt = $db->query("INSERT INTO users VALUES ('$myusername', '$mypassword', '$myaddress')");
	// rowCount() is counting table row
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($stmt){
		// Register $myusername, $mypassword and print "true"
		echo "<div class=\"alert alert-success\">Kontot har skapats.</div>";
		//echo "true";
		
	}
	else {
		//return the error message
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Användaren finns redan.</div>";
	}
	ob_end_flush();
?>