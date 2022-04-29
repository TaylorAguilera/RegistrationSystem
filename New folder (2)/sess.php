<?php
include("ConfigFile.php");
session_start();
$usern= $_SESSION["user"];
$sql="SELECT * FROM `users` WHERE `username`= '$usern'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result)!=0){

    $_SESSION["email"] = $row["Email"];
$_SESSION["fname"] = $row["FirstName"];
$_SESSION["lname"] = $row["LastName"];
}
?>