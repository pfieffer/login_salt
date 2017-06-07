<?php
//For connecting the database-->
$con = mysql_connect("localhost","root","");
if (!$con) {
    die("Connection failed: " . mysql_error());
}else{

  
mysql_select_db ('practise', $con) or die ("Could not select database.");
}


//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')) {
    header("location: index.php");
    exit();
}

$session_id=$_SESSION['id'];


//log functionality not working as of now
//logout functionality with user log:
mysql_query("UPDATE user_log SET logout_time = NOW() WHERE user_id = '$session_id' ")or die(mysql_error());

session_destroy();

header('location: index.php');
?>

