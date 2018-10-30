<?php
//For connecting the database-->
$link = mysqli_connect("localhost","root","", "practise");
if (!$link) {
    die("Connection failed: " . mysql_error());
}else{
mysqli_select_db ($link, 'practise') or die ("Could not select database.");
}


//Start session
session_start();
//Check whether the session variable username is present or not
if (!isset($_SESSION['username']) || ($_SESSION['username'] == '')) {
	echo "Could not logout";
} else{
	//close the database connection
	mysqli_close($link);

	session_destroy();
    header("location: index.php");
    exit();
}
?>

