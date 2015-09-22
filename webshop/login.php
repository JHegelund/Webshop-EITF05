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

	//echo "läget1";

	$result = $db->query("SELECT passwd FROM users WHERE username = '$myusername'");

	if ($result->num_rows > 0) {
		echo "läget2";
    	while($row = $result->fetch_assoc()) {
        $passwd = $row["passwd"];
    	}
    }

	//echo $passwd;
		
	if(password_verify($mypassword, $passwd)){
		// Register $myusername, $mypassword and print "true"
		echo "<div class=\"alert alert-success\">Du är inloggad.</div>";
		
	}
	else {
		//return the error message
		//echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Fel användarnamn eller lösenord.</div>";
	}
?>