
<?php
	include_once('connection.php'); //For connecting the database
	//no password decryption for crypt() function
	function encryption(){
		$salt=('nepal');
		$hashed_password = crypt ( '$password','$salt');
		return $hashed_password;
	}

session_start();
	$usern = $_POST['username']; //using post method's username to set variable
	$_SESSION["username"]=$usern; //declaring session variable and putting usern declared above
	echo $_SESSION["username"];
	$input_password = $_POST['password'];
	$hashed_password=encryption($input_password);

	//fetch previous password
		$query = mysql_query("SELECT password FROM users WHERE username='$usern' ")or die(mysql_error());
		$row = mysql_fetch_row($query);
		$previous_password = $row[0];
			 

	
	if ($hashed_password==$previous_password) {
		header("Location: user_dashboard.php");
		die();
	}else{
		echo "Wrong username and/or password";
	}

		


//log functionality not working as of now
		//mysql_query("insert into admin_log (username,login_date,admin_id)values('$username',NOW(),".$row['user_id'].")")or die(mysql_error());
		// }else{ 
		//echo 'false';
		//}	
				
?>

		