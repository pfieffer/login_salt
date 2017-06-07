<!--For connecting the database-->
<?php
	include_once('connection.php'); //For connecting the database
	//password hashing
	function encryption(){
		$salt=('nepal');
		$hashed_password = crypt ( '$password','$salt');
		return $hashed_password;
	}	

	session_start();
		$username=$_POST['username'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$hashed_password=encryption('$password');
		
		
	$query= "INSERT INTO users (id, fname, lname, email, username, password) VALUES ('','$fname','$lname','$email','$username','$hashed_password')";

	if(mysql_query($query) == TRUE)
	{
		 echo "Successful";
	}
	else
	{
		echo "Error: " . $query . "<br>" . mysql_error();
	}
	
?>
