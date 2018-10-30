<!--For connecting the database-->
<?php
	//For connecting the database
	$link = mysqli_connect("localhost","root","", "practise");
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}


	//session_start();
		$username=$_POST['username'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$salt=('nepal');
		$hashed_password = crypt ( $password, $salt); //password hashing
		
		
	$query= "INSERT INTO users (id, fname, lname, email, username, password) VALUES ('','$fname','$lname','$email','$username','$hashed_password')";

	if(mysqli_query($link, $query) == TRUE)
	{
		 echo "Successful";
	}
	else
	{
		echo "Error: " . $query . "<br>" . mysql_error();
	}

	mysqli_close($link);
	
?>
