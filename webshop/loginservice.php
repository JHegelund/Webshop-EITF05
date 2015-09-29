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
	$myusername = $_POST['inputEmail']; 
	$mypassword = $_POST['inputPassword'];
	// To protect MySQL injection
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);

	$sql = "SELECT passwd from users where username= ?";

	try {
			$stmt = $db->prepare($sql);
			$stmt->execute(array($myusername));
			$result = $stmt->fetchAll();
		} catch (PDOException $e) {
			$error = "*** Internal error: " . $e->getMessage() . "<p>" . $query;
			die($error);
		}

		foreach($result as $result){
			$passwd = $result[0];
		}
		
	if(password_verify($mypassword, $passwd)){
		$_SESSION['user'] = $myusername;
		header('Location: login.php');
		echo "<div class=\"alert alert-success\">Du är inloggad.</div>";
	}
	else {
		//return the error message
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Fel användarnamn eller lösenord.</div>";
	}
?>