<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

</head>
<body>

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
	$login_status;
	if (!isset($_SESSION['username']) || ($_SESSION['username'] == '')) {
		//session not set so user is not logged in
		$login_status = "Could not log in";
	} else{
		//session set so user is logged in
		$username=$_SESSION["username"];//session username of the current user
		$query= mysqli_query($link, "SELECT fname FROM users WHERE username = '$username' ") or die(mysql_error()); //sql to extract name of the user associated with the current session username

		// to display the row of the database as string not as resource id, we must use functions such as mysql_fetch_assoc() or mysql_fetch_row(). They have return type of array
		$row = mysqli_fetch_row($query);
		$fname=$row[0]; // echo $row[0] displays fname.

		mysqli_close($link);
		$login_status = "Logged in succesfully";
	}
?>

<script type="text/javascript">alert('<?php echo"$login_status";?>')</script>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
			 <?php if ($login_status == "Could not log in"):?>
			 	<h1> Unauthorized </h1>
			 	<h2> You are not logged in </h2>
			 	<!--Button pseudoclass according to bootstrap-->
	      		<a href="index.php" class="btn btn-default" role="button">Log in</a>
			 <?php else: ?>
			 	<h1>Hello, <?php echo "$fname";?>!</h1>
				<!--Button pseudoclass according to bootstrap-->
	      		<a href="logout.php" class="btn btn-default" role="button">Log out</a>
	      		<h2 style="letter-spacing: 4px;">This is letters spaced at 4px</h2>
			 <?php endif; ?>
			</div>
		</div>
	</div>
</div>


</body>

</html>