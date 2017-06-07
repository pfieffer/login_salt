<!DOCTYPE html>
<html>
<head>
	<title>Sign up form</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstap-theme.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<!-- Bootstrap form-->
		    <form action="register.php" method="POST" role='form'>
		      <div class="form-group">
		      	<label for="fname">First Name</label>
		      	<input type="text" class="form-control" name="fname" placeholder="Enter your first name" >
		      </div>
		      <div class="form-group">
		      	<label for="lname">Last Name</label>
		      	<input type="text" class="form-control" name="lname" placeholder="Enter your last name" >
		      </div>
		      <div class="form-group">
		        <label for="email">Email address</label>
		        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
		        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		      </div>
		      <div class="form-group">
		      	<label for="fname">Username</label>
		      	<input type="text" class="form-control" name="username" placeholder="Select a unique username" >
		      </div>
		      <div class="form-group">
		        <label for="password">Password</label>
		        <input type="password" class="form-control" name="password" placeholder="Password">
		        <br>
		        <!--Button-->
		    	<input type="submit" class="btn btn-default" value="Register">.
		      </div>


		    </form>
		    
		</div>
	</div>
</div>
</body>
</html>	


	