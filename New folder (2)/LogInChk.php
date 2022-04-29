<?php

if($_POST["uname"] == "" || $_POST["psw"] == "")
{
	echo 'You need to fill in both fields. <br />
			<a href="LogIn.php"> Back to Login </a>';
	exit();
}
include("ConfigFile.php");
$passCript = md5($_POST["psw"]); 
$usern = ($_POST["uname"]);

$sql = "SELECT * FROM `users` 
			WHERE `username`='$usern' AND `password`='$passCript'";

$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result)!=1)
{
	echo 'Username or password is wrong. 
		 <br /><a href="LogIn.php"> Back to Login </a>"';
	exit();
}

session_start();

$_SESSION["user"] = $usern;
$_SESSION["pass_cript"] = $passCript;
$_SESSION["key_admin"] = session_id();
$_SESSION["userid"] = $row["id"];
$_SESSION["group"] = $row["Group_by"];
$_SESSION["email"] = $row["Email"];
$_SESSION["fname"] = $row["FirstName"];
$_SESSION["lname"] = $row["LastName"];
include ("backpage.php");
	
?>