<!--from scratch coding, here. -->

<!DOCTYPE html>
<html>
<head>
	<title>A SIMPLE FORM</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">-->
</head>
<body>

<div class="container">
  <div class='row'>
      <div class='col-sm-12'>
      <!-- Bootstrap form-->
    <form action="login.php" method="POST" role='form'>
      <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter your username" >
          </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>

      <!--Button-->
          <input type="submit" class="btn btn-default" value="Sign In">.
    </form>
      <br><br>  
      <text class="text-muted">Not registered? Sign up easily!</textarea>
      <br>
      <!--Button pseudoclass according to bootstrap-->
      <a href="newuser.php" class="btn btn-default" role="button">Sign Up</a>

  </div>

  </div>
</div>
</body>
</html>