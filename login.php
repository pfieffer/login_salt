
<?php
	//For connecting the database
	$link = mysqli_connect("localhost","root","", "practise");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	

session_start();
	$usern = $_POST['username']; //using post method's username to set variable
	$_SESSION["username"]=$usern; //declaring session variable and putting usern declared above
	echo $_SESSION["username"];

	$input_password = $_POST['password'];
	$salt = ('nepal');
	$hashed_password= crypt($input_password, $salt); //no password decryption for crypt() function

	//fetch previous password
		$query = mysqli_query($link, "SELECT password FROM users WHERE username='$usern' ")or die(mysql_error());
		$row = mysqli_fetch_row($query);
		$previous_password = $row[0];
			 

	
	if ($hashed_password==$previous_password) {
		header("Location: user_dashboard.php");
		die();
	}else{
		echo "Wrong username and/or password";
	}

		
	mysqli_close($link);
				
?>

		