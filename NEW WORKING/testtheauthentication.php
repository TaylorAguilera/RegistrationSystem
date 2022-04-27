<?php
session_start();

if($_SESSION["key_admin"]!=session_id())
{
	echo ' Unautherized access! <br />
		<a href="LogIn.php"> Please LogIn </a> ';
		exit();
}

include("ConfigFile.php");
$passCript = $_SESSION["pass_cript"];
$usern = $_SESSION["user"];

$sql = "SELECT * FROM users 
			WHERE username='$usern' AND password='$passCript'";

$result = mysqli_query($link,$sql);

if(mysqli_num_rows($result)==0)
{
	echo 'Unautherized access! 
		 <br /><a href="LogIn.php"> Back to Login </a>"';
	exit();
}

?>