<?php

session_start();
if($_SESSION["group"] == '606E'){
	header("location: Home606.php");
	
}
if($_SESSION["group"] == '666E'){
	header("location: Home666.php");
}

if($_SESSION["group"] == '706F'){
	header("location: Home706.php");
	
}
if($_SESSION["group"] == '766F'){
	header("location: Home766.php");
}
if($_SESSION["group"] == '806G'){
	header("location: Home806.php");
	
}
if($_SESSION["group"] == '866G'){
	header("location: Home866.php");
}
if($_SESSION["group"] == 'Admin'){
	header("location: Admin.php");
	
}

?>