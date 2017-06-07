<!DOCTYPE html>
<html>
<head>
	<?php
	include_once('connection.php'); //For connecting the database

	session_start();
		$username=$_SESSION["username"];//session id of the current user
		$query= mysql_query("SELECT fname FROM users WHERE username = '$username' ") or die(mysql_error()); //sql to extract name of the user associated with the current session id

		// to display the row of the database as string not as resource id, we must use functions such as mysql_fetch_assoc() or mysql_fetch_row(). They have return type of array
		$row = mysql_fetch_row($query);
		$fname=$row[0]; // echo $row[0] displays fname.
	?>
	<title>Welcome <?php echo $fname;?></title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

</head>

<body>
<script type="text/javascript">alert('Signed in succesfully')</script>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
			  <h1>Hello, <?php echo "$fname";?>!</h1>
			<!--Button pseudoclass according to bootstrap-->
      		<a href="logout.php" class="btn btn-default" role="button">Log out</a>

      		<h2 style="letter-spacing: 4px;">This is letters spaced at 4px</h2>

			</div>
		</div>
	</div>
</div>


</body>
</html>