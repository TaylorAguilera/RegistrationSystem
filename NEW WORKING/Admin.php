<?php
include ("testtheauthentication.php");

$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.js"></script>
    <style>
    body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
  overflow: auto;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}


.btn-group button {
  background-color: black; /* black background */
  border: 1px solid white; /* white border */
  color: Black; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  width: 100%; /* Set a width if needed */
  display: block; /* Make the buttons appear below each other */
}

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}
button {
  background-color: #050505;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  text-decoration: bold;
	
	font-size: 17px;
  font-family: 'Times New Roman', Times, serif;
}
button:hover{
  background-color: gray;
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: gray;
}
.btn-group{
    margin-left:42%;
    margin-top: 15%;
    
}
.modal-content {
  border: 2px solid black;
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
.closepos {
  text-align: center;
  margin: 24px 0 10px 0;
  position: relative;
}
.input {
  font-size: 16px;
  font-size: max(16px, 1em);
  font-family: inherit;
  padding: 0.25em 0.5em;
  background-color: #fff;
  border: 2px solid var(--input-border);
  border-radius: 4px;
  display: inline-block;
  box-sizing: border-box;
  width: 100%;

}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.container {
  width: 50%;
    padding: 3px 8px;
}
.output{
      border: 2px solid gray;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 5px;
    margin: 10px 0;
    overflow: scroll;
    height: 250px;
  }
  input[type=submit]{
  background-color: green;
  border: 2px solid white;
  color: white;
  padding: 14px 28px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: auto;
    text-decoration: bold;
}
input[type=submit]:hover{
  background-color: gray;
}
table {
    width: 100%;
    font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  overflow: scroll;
}
th{
  padding-top:12px;
  padding-bottom:12px;
  text-align: left;
  background-color: black;
  color:white;
}
td,th{
  border:1px solid white;
  padding:8px;
}
tr:nth-child(even){
  background-color: gray;
}
.modalform {
  display:none;
   position: absolute;
   bottom: 10px;
   left:120;
  
   z-index: 10040;
   overflow: auto;
   overflow-y: auto;
  
}
.modalcht{
  display:none;
   position: absolute;
   Top:10px;
   right:5px;
  
   z-index: 10040;
   overflow: auto;
   overflow-y: auto;
}
.modaladmin{
  display:none;
   position: absolute;
   Top: 5px;
   left:3px;
  
   z-index: 10040;
   overflow: auto;
   overflow-y: auto;
}
span{
  color:white;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400);

.container {
    width: 50%;
    padding: 6px 16px;
}

.message-blue {
    position: relative;
    margin-left: 20px;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #A8DDFD;
    width: 200px;
    height: auto;
    text-align: left;
    font: 400 .9em 'Open Sans', sans-serif;
    border: 1px solid #97C6E3;
    border-radius: 10px;
}

.message-orange {
    position: relative;
    margin-bottom: 10px;
    margin-left: calc(100% - 240px);
    padding: 10px;
    background-color: #f8e896;
    width: 200px;
    height: auto;
    text-align: left;
    font: 400 .9em 'Open Sans', sans-serif;
    border: 1px solid #dfd087;
    border-radius: 10px;
}

.message-content {
    padding: 0;
    margin: 0;
}

.message-timestamp-right {
    position: absolute;
    font-size: .85em;
    font-weight: 300;
    bottom: 5px;
    right: 5px;
}

.message-timestamp-left {
    position: absolute;
    font-size: .85em;
    font-weight: 300;
    bottom: 5px;
    left: 5px;
}

.message-blue:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-top: 15px solid #A8DDFD;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    top: 0;
    left: -15px;
}

.message-blue:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-top: 17px solid #97C6E3;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    top: -1px;
    left: -17px;
}

.message-orange:after {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-bottom: 15px solid #f8e896;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    bottom: 0;
    right: -15px;
}

.message-orange:before {
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    border-bottom: 17px solid #dfd087;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    bottom: -1px;
    right: -17px;
}
    </style>
</head>
<body>

<div style="background-color: black; color: white; padding: 6px 16px; border: 1px solid white;">
    <h3><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname'];?>-Admin Online</h3></div>

<div class="btn-group">
  <button type="button" data-toggle="modal" data-target="#edit">Edit The Front Message</button>
  <br>
  
  <button onclick="window.location.href='profile.php'">Profile</button>
  
  <button  data-toggle="modal" data-target="#listU" >List of Users</button>
  <br>
  <button data-toggle="modal" data-target="#chk" >Check students Messages</button>

  <button data-toggle="modal" data-target="#admin" >Open Admin Chats</button>
 
  <br>
  <button onclick="window.location.href='logout.php'">Log Out</button>
</div>


<div class="modal fade" id="listU" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
 <div class="modal-content">
    <div class="modal-header" style="background-color: black;">
    <h4 style="color: white;" align="center"> List Ordered by Group </h4>
    
    <button type="button" class="close" data-toggle="modal" data-target="#listU" data-dismiss="listU" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span aria-hidden="true" >&times;</span></div>
        </button>
    </div>
    <div class="modal-body">
      <br>
      <button type="button" data-toggle="modal" data-target="#606lst" style="width: auto;">Group: 606E</button> <br>
    <button type="button" data-toggle="modal" data-target="#666lst" style="width: auto;">Group: 666E</button><br>
    <button type="button" data-toggle="modal" data-target="#706lst" style="width: auto;">Group: 706F</button><br>
    <button type="button" data-toggle="modal" data-target="#766lst" style="width: auto;">Group: 766F</button><br>
    <button type="button" data-toggle="modal" data-target="#806lst" style="width: auto;">Group: 806G</button><br>
    <button type="button" data-toggle="modal" data-target="#866lst" style="width: auto;">Group: 866G</button><br>
    </div>
 </div>
 </div>
</div>


<div class="modal fade" id="866lst" tabindex="-1" role="dialog"  aria-hidden="true" data-dismiss="listU">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:auto;">
<div class="modal-content" >
<div class="modal-header" style="background-color: black;">
<h3 style="color: white; text-align:center;">Group 866G</h3>
<button type="button" class="close" data-toggle="modal" data-target="#866lst" data-dismiss="866lst" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span style="color: white;" aria-hidden="true" >&times;</span></div>
        </button>
        </div>

<div class="modal-body" role="document">
<?php
include ("ConfigFile.php");
$list= "SELECT * FROM `users` WHERE `Group_by` = '866G' ORDER BY `username` ASC";
$res = mysqli_query($link,$list);

?>
<table class='table'>
<?php
if ($res->num_rows != 0){
  ?>
    
    <tr class='tr'>
        <th class='th'>Username</th>
        <th class='th'>First Name</th>
        <th class='th'>Last Name</th>
        <th class='th'>Email</th>
        <th class='th'>Change The Password ?</th>
        <th class='th'>Delete The Account ?</th>
        
        </tr>
        <?php   }   ?>
        <?php
while ($row = $res->fetch_assoc()){

?>
    <tr class='tr'>
    <td class='td'><?php echo"<form method='POST' action=''><input type='hidden' name='name' value='".$row['username']."'>".$row['username'];?></td>
    <td class='td'><?php echo $row['FirstName'];?></td>
    <td class='td'><?php echo $row['LastName'];?></td>
    <td class='td'><?php echo $row['Email'];?></td>
    <td class='td'><?php echo "<button type='submit' name='chpsw'>Change</button>";?></td>
    <td class='td'><?php echo"<input type='hidden' name='id1' value='".$row['id']."'><input type='submit' name='delacc' value='Delete'></form>";?></td></tr>
    
    <?php
  }
include ("ConfigFile.php");
  if (isset($_POST["delacc"])){
    $id1 = $_POST["id1"];
    $name1= $_POST["name"];
    $delrowwmsg="DELETE FROM `posts` WHERE `name` = '$name1';
    DELETE FROM `users` WHERE `id` = '$id1';
    DELETE FROM `866posts` WHERE `name` = '$name1';
    DELETE FROM `adminposts` WHERE `name` = '$name1';";
   $resssu=$link->multi_query($delrowwmsg);
     }
     if (isset($_POST["chpsw"])){
      $id11 = $_POST["id1"];
    $name= md5($_POST["name"]);
       $delroww1="UPDATE `users` SET `password` = '$name' WHERE `id`='$id11'";
    
       
      $resssu1= mysqli_query($link, $delroww1);
       }

?></table><?php

  
$link->close();
?>
<?php if(!empty($_POST["delacc"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#866lst").modal("show");
    });
    </script>
<?php endif; ?>
</div>

</div>
</div>
</div>



<div class="modal fade" id="806lst" tabindex="-1" role="dialog"  aria-hidden="true" data-dismiss="listU">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:auto;">
<div class="modal-content">
<div class="modal-header" style="background-color: black;">
<h3 style="color: white; text-align:center;">Group 806G</h3>
<button type="button" class="close" data-toggle="modal" data-target="#806lst" data-dismiss="806lst" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span style="color: white;" aria-hidden="true" >&times;</span></div>
        </button>
        </div>

<div class="modal-body" role="document">
<?php
include ("ConfigFile.php");
$list= "SELECT * FROM `users` WHERE `Group_by` = '806G' ORDER BY `username` ASC";
$res = mysqli_query($link,$list);

?>
<table class='table'>
<?php
if ($res->num_rows != 0){
  ?>
    
    <tr class='tr'>
        <th class='th'>Username</th>
        <th class='th'>First Name</th>
        <th class='th'>Last Name</th>
        <th class='th'>Email</th>
        <th class='th'>Change The Password ?</th>
        <th class='th'>Delete The Account ?</th>
        
        </tr>
        <?php   }   ?>
        <?php
while ($row = $res->fetch_assoc()){

?>
    <tr class='tr'>
    <td class='td'><?php echo"<form method='POST' action=''><input type='hidden' name='name1' value='".$row['username']."'>".$row['username'];?></td>
    <td class='td'><?php echo $row['FirstName'];?></td>
    <td class='td'><?php echo $row['LastName'];?></td>
    <td class='td'><?php echo $row['Email'];?></td>
    <td class='td'><?php echo "<button type='submit' name='chpsw1'>Change</button>";?></td>
    <td class='td'><?php echo"<input type='hidden' name='id11' value='".$row['id']."'><input type='submit' name='delacc1' value='Delete'></form>";?></td></tr>
    
    <?php
  }
include ("ConfigFile.php");
  if (isset($_POST["delacc1"])){
    $id1 = $_POST["id11"];
    $name1= $_POST["name1"];
    $delrowwmsg="DELETE FROM `posts` WHERE `name` = '$name1';
    DELETE FROM `users` WHERE `id` = '$id1';
    DELETE FROM `806posts` WHERE `name` = '$name1';
    DELETE FROM `adminposts` WHERE `name` = '$name1';";
   $resssu=$link->multi_query($delrowwmsg);
     }
     if (isset($_POST["chpsw1"])){
      $id11 = $_POST["id11"];
    $name= md5($_POST["name1"]);
       $delroww1="UPDATE `users` SET `password` = '$name' WHERE `id`='$id11'";
    
       
      $resssu1= mysqli_query($link, $delroww1);
       }

?></table><?php

  
$link->close();
?>
<?php if(!empty($_POST["delacc1"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#806lst").modal("show");
    });
    </script>
<?php endif; ?>
</div>

</div>
</div>
</div>


<div class="modal fade" id="766lst" tabindex="-1" role="dialog"  aria-hidden="true" data-dismiss="listU">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:auto;">
<div class="modal-content">
<div class="modal-header" style="background-color: black;">
<h3 style="color: white; text-align:center;">Group 766F</h3>
<button type="button" class="close" data-toggle="modal" data-target="#766lst" data-dismiss="766lst" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span style="color: white;" aria-hidden="true" >&times;</span></div>
        </button>
        </div>

<div class="modal-body" role="document">
<?php
include ("ConfigFile.php");
$list= "SELECT * FROM `users` WHERE `Group_by` = '766F' ORDER BY `username` ASC";
$res = mysqli_query($link,$list);

?>
<table class='table'>
<?php
if ($res->num_rows != 0){
  ?>
    
    <tr class='tr'>
        <th class='th'>Username</th>
        <th class='th'>First Name</th>
        <th class='th'>Last Name</th>
        <th class='th'>Email</th>
        <th class='th'>Change The Password ?</th>
        <th class='th'>Delete The Account ?</th>
        
        </tr>
        <?php   }   ?>
        <?php
while ($row = $res->fetch_assoc()){

?>
    <tr class='tr'>
    <td class='td'><?php echo"<form method='POST' action=''><input type='hidden' name='name2' value='".$row['username']."'>".$row['username'];?></td>
    <td class='td'><?php echo $row['FirstName'];?></td>
    <td class='td'><?php echo $row['LastName'];?></td>
    <td class='td'><?php echo $row['Email'];?></td>
    <td class='td'><?php echo "<button type='submit' name='chpsw2'>Change</button>";?></td>
    <td class='td'><?php echo"<input type='hidden' name='id12' value='".$row['id']."'><input type='submit' name='delacc2' value='Delete'></form>";?></td></tr>
    
    <?php
  }
include ("ConfigFile.php");
  if (isset($_POST["delacc2"])){
    $id1 = $_POST["id12"];
    $name1= $_POST["name2"];
    $delrowwmsg="DELETE FROM `posts` WHERE `name` = '$name1';
    DELETE FROM `users` WHERE `id` = '$id1';
    DELETE FROM `766posts` WHERE `name` = '$name1';
    DELETE FROM `adminposts` WHERE `name` = '$name1';";
   $resssu=$link->multi_query($delrowwmsg);
     }
     if (isset($_POST["chpsw2"])){
      $id11 = $_POST["id12"];
    $name= md5($_POST["name2"]);
       $delroww1="UPDATE `users` SET `password` = '$name' WHERE `id`='$id11'";
    
       
      $resssu1= mysqli_query($link, $delroww1);
       }

?></table><?php

  
$link->close();
?>
<?php if(!empty($_POST["delacc2"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#766lst").modal("show");
    });
    </script>
<?php endif; ?>
</div>

</div>
</div>
</div>


<div class="modal fade" id="706lst" tabindex="-1" role="dialog"  aria-hidden="true" data-dismiss="listU">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:auto;">
<div class="modal-content">
<div class="modal-header" style="background-color: black;">
<h3 style="color: white; text-align:center;">Group 706F</h3>
<button type="button" class="close" data-toggle="modal" data-target="#706lst" data-dismiss="706lst" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span style="color: white;" aria-hidden="true" >&times;</span></div>
        </button>
        </div>

<div class="modal-body" role="document">
<?php
include ("ConfigFile.php");
$list= "SELECT * FROM `users` WHERE `Group_by` = '706F' ORDER BY `username` ASC";
$res = mysqli_query($link,$list);

?>
<table class='table'>
<?php
if ($res->num_rows != 0){
  ?>
    
    <tr class='tr'>
        <th class='th'>Username</th>
        <th class='th'>First Name</th>
        <th class='th'>Last Name</th>
        <th class='th'>Email</th>
        <th class='th'>Change The Password ?</th>
        <th class='th'>Delete The Account ?</th>
        
        </tr>
        <?php   }   ?>
        <?php
while ($row = $res->fetch_assoc()){

?>
    <tr class='tr'>
    <td class='td'><?php echo"<form method='POST' action=''><input type='hidden' name='name3' value='".$row['username']."'>".$row['username'];?></td>
    <td class='td'><?php echo $row['FirstName'];?></td>
    <td class='td'><?php echo $row['LastName'];?></td>
    <td class='td'><?php echo $row['Email'];?></td>
    <td class='td'><?php echo "<button type='submit' name='chpsw3'>Change</button>";?></td>
    <td class='td'><?php echo"<input type='hidden' name='id13' value='".$row['id']."'><input type='submit' name='delacc3' value='Delete'></form>";?></td></tr>
    
    <?php
  }
include ("ConfigFile.php");
  if (isset($_POST["delacc3"])){
    $id1 = $_POST["id13"];
    $name1= $_POST["name3"];
    $delrowwmsg="DELETE FROM `posts` WHERE `name` = '$name1';
    DELETE FROM `users` WHERE `id` = '$id1';
    DELETE FROM `706posts` WHERE `name` = '$name1';
    DELETE FROM `adminposts` WHERE `name` = '$name1';";
   $resssu=$link->multi_query($delrowwmsg);
     }
     if (isset($_POST["chpsw3"])){
      $id11 = $_POST["id13"];
    $name= md5($_POST["name3"]);
       $delroww1="UPDATE `users` SET `password` = '$name' WHERE `id`='$id11'";
    
       
      $resssu1= mysqli_query($link, $delroww1);
       }

?></table><?php

  
$link->close();
?>
<?php if(!empty($_POST["delacc3"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#706lst").modal("show");
    });
    </script>
<?php endif; ?>
</div>

</div>
</div>
</div>


<div class="modal fade" id="666lst" tabindex="-1" role="dialog"  aria-hidden="true" data-dismiss="listU">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:auto;">
<div class="modal-content">
<div class="modal-header" style="background-color: black;">
<h3 style="color: white; text-align:center;">Group 666E</h3>
<button type="button" class="close" data-toggle="modal" data-target="#666lst" data-dismiss="666lst" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span style="color: white;" aria-hidden="true" >&times;</span></div>
        </button>
        </div>

<div class="modal-body" role="document">
<?php
include ("ConfigFile.php");
$list= "SELECT * FROM `users` WHERE `Group_by` = '666E' ORDER BY `username` ASC";
$res = mysqli_query($link,$list);

?>
<table class='table'>
<?php
if ($res->num_rows != 0){
  ?>
    
    <tr class='tr'>
        <th class='th'>Username</th>
        <th class='th'>First Name</th>
        <th class='th'>Last Name</th>
        <th class='th'>Email</th>
        <th class='th'>Change The Password ?</th>
        <th class='th'>Delete The Account ?</th>
        
        </tr>
        <?php   }   ?>
        <?php
while ($row = $res->fetch_assoc()){

?>
    <tr class='tr'>
    <td class='td'><?php echo"<form method='POST' action=''><input type='hidden' name='name4' value='".$row['username']."'>".$row['username'];?></td>
    <td class='td'><?php echo $row['FirstName'];?></td>
    <td class='td'><?php echo $row['LastName'];?></td>
    <td class='td'><?php echo $row['Email'];?></td>
    <td class='td'><?php echo "<button type='submit' name='chpsw4'>Change</button>";?></td>
    <td class='td'><?php echo"<input type='hidden' name='id14' value='".$row['id']."'><input type='submit' name='delacc4' value='Delete'></form>";?></td></tr>
    
    <?php
  }
include ("ConfigFile.php");
  if (isset($_POST["delacc4"])){
    $id1 = $_POST["id14"];
    $name1= $_POST["name4"];
    $delrowwmsg="DELETE FROM `posts` WHERE `name` = '$name1';
    DELETE FROM `users` WHERE `id` = '$id1';
    DELETE FROM `666posts` WHERE `name` = '$name1';
    DELETE FROM `adminposts` WHERE `name` = '$name1';";
   $resssu=$link->multi_query($delrowwmsg);
     }
     if (isset($_POST["chpsw4"])){
      $id11 = $_POST["id14"];
    $name= md5($_POST["name4"]);
       $delroww1="UPDATE `users` SET `password` = '$name' WHERE `id`='$id11'";
    
       
      $resssu1= mysqli_query($link, $delroww1);
       }

?></table><?php

  
$link->close();
?>
<?php if(!empty($_POST["delacc4"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#666lst").modal("show");
    });
    </script>
<?php endif; ?>
</div>

</div>
</div>
</div>



<div class="modal fade" id="606lst" tabindex="-1" role="dialog"  aria-hidden="true" data-dismiss="listU">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:auto;">
<div class="modal-content">
<div class="modal-header" style="background-color: black;">
<h3 style="color: white; text-align:center;">Group 606E</h3>
<button type="button" class="close" data-toggle="modal" data-target="#606lst" data-dismiss="606lst" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span style="color: white;" aria-hidden="true" >&times;</span></div>
        </button>
        </div>

<div class="modal-body" role="document">
<?php
include ("ConfigFile.php");
$list= "SELECT * FROM `users` WHERE `Group_by` = '606E' ORDER BY `username` ASC";
$res = mysqli_query($link,$list);

?>
<table class='table'>
<?php
if ($res->num_rows != 0){
  ?>
    
    <tr class='tr'>
        <th class='th'>Username</th>
        <th class='th'>First Name</th>
        <th class='th'>Last Name</th>
        <th class='th'>Email</th>
        <th class='th'>Change The Password ?</th>
        <th class='th'>Delete The Account ?</th>
        
        </tr>
        <?php   }   ?>
        <?php
while ($row = $res->fetch_assoc()){

?>
    <tr class='tr'>
    <td class='td'><?php echo"<form method='POST' action=''><input type='hidden' name='name5' value='".$row['username']."'>".$row['username'];?></td>
    <td class='td'><?php echo $row['FirstName'];?></td>
    <td class='td'><?php echo $row['LastName'];?></td>
    <td class='td'><?php echo $row['Email'];?></td>
    <td class='td'><?php echo "<button type='submit' name='chpsw5'>Change</button>";?></td>
    <td class='td'><?php echo"<input type='hidden' name='id15' value='".$row['id']."'><input type='submit' name='delacc5' value='Delete'></form>";?></td></tr>
    
    <?php
  }
include ("ConfigFile.php");
  if (isset($_POST["delacc5"])){
    $id1 = $_POST["id15"];
    $name1= $_POST["name5"];
    $delrowwmsg="DELETE FROM `posts` WHERE `name` = '$name1';
    DELETE FROM `users` WHERE `id` = '$id1';
    DELETE FROM `606posts` WHERE `name` = '$name1';
    DELETE FROM `adminposts` WHERE `name` = '$name1';";
   $resssu=$link->multi_query($delrowwmsg);
     }
     if (isset($_POST["chpsw5"])){
      $id11 = $_POST["id15"];
    $name= md5($_POST["name5"]);
       $delroww1="UPDATE `users` SET `password` = '$name' WHERE `id`='$id11'";
    
       
      $resssu1= mysqli_query($link, $delroww1);
       }

?></table><?php

  
$link->close();
?>
<?php if(!empty($_POST["delacc5"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#606lst").modal("show");
    });
    
    </script>
<?php endif; ?>
</div>

</div>
</div>
</div>



<div class="modaladmin fade" id="admin" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
 <div class="modal-content">
    <div class="modal-header" style="background-color: black;">
    <h4 style="color: white;" align="center"> *All Admin chats*</h4>
    
    <button type="button" class="close" data-toggle="modal" data-target="#admin" data-dismiss="admin" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span aria-hidden="true" >&times;</span></div>
        </button>
    </div>
    <div class="modal-body">
      <br>
      <button type="button" data-toggle="modal" data-target="#606ad">Admin-606E chat</button> <br>
    <button type="button" data-toggle="modal" data-target="#666ad" >Admin-666E chat </button><br>
    <button type="button" data-toggle="modal" data-target="#706ad" >Admin-706F chat </button><br>
    <button type="button" data-toggle="modal" data-target="#766ad" >Admin-766F chat </button><br>
    <button type="button" data-toggle="modal" data-target="#806ad" >Admin-806G chat </button><br>
    <button type="button" data-toggle="modal" data-target="#866ad" >Admin-866G chat </button><br>
    </div>
 </div>
 </div>
</div>


<div class="modal fade" id="866ad" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:80%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">Admin Chat</h4>
        </div>
        <div class="modal-body">
          
        <div id="AdO86" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["send866ad"])){
$msg=$_POST["message866ad"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql="INSERT INTO `adminposts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '866');";

mysqli_query($link, $sql);}
if (isset($_POST["delrowww866"])){
  $id = $_POST["idd866"];

   $delrow="DELETE FROM `adminposts` WHERE `id` = '$id'";

   
  $ressu= mysqli_query($link, $delrow);
   }
?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='866' or `Group_by` = '866G'";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
    if($row["name"]=="$name"){
      echo "<div class='message-blue'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
      echo "</div>";}

    if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
      echo "<input type='hidden' name='idd866' value='".$row['id']."' style='width:auto;'><input name='delrowww866' type='submit' value='Delete Now!'>";
      echo "</div>";}}}
     
    else {
      echo "no messages were displayed yet.";
    }
    
    $link->close();
    ?>
    </div>
   
          </div>
        <div class="modal-footer">
        <textarea class="input" name="message866ad" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#866ad" class="btn btn-default" type="submit" name="send866ad"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#866ad"  data-dismiss="866ad" name="closeit" style="width:auto;">Close</button></div>

</div>
        </div>

<?php if(!empty($_POST["send866ad"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#866ad").modal("show");
    });
    </script>
<?php endif; ?>
<?php if(!empty($_POST["delrowww866"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#866ad").modal("show");
    });
    </script>
<?php endif; ?>
      
        </form>
        </div>
        </div>


<div class="modal fade" id="806ad" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:80%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">Admin Chat</h4>
        </div>
        <div class="modal-body">
          
        <div id="AdO80" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["send806ad"])){
$msg=$_POST["message806ad"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql="INSERT INTO `adminposts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '806');";

mysqli_query($link, $sql);}
if (isset($_POST["delrowww806"])){
  $id = $_POST["idd806"];

   $delrow="DELETE FROM `adminposts` WHERE `id` = '$id'";

   
  $ressu= mysqli_query($link, $delrow);
   }
?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='806' or `Group_by` = '806G'";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
    if($row["name"]=="$name"){
      echo "<div class='message-blue'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
      echo "</div>";}

    if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
      echo "<input type='hidden' name='idd806' value='".$row['id']."' style='width:auto;'><input name='delrowww806' type='submit' value='Delete Now!'>";
      echo "</div>";}}}
     
    else {
      echo "no messages were displayed yet.";
    }
    
    $link->close();
    ?>
    </div>
   
          </div>
        <div class="modal-footer">
        <textarea class="input" name="message806ad" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#806ad" class="btn btn-default" type="submit" name="send806ad"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#806ad"  data-dismiss="806ad" name="closeit" style="width:auto;">Close</button></div>

</div>
        </div>

<?php if(!empty($_POST["send806ad"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#806ad").modal("show");
    });
    </script>
<?php endif; ?>
<?php if(!empty($_POST["delrowww806"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#806ad").modal("show");
    });
    </script>
<?php endif; ?>
      
        </form>
        </div>
        </div>


<div class="modal fade" id="766ad" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:80%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">Admin Chat</h4>
        </div>
        <div class="modal-body">
          
        <div id="AdO76" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["send766ad"])){
$msg=$_POST["message766ad"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql="INSERT INTO `adminposts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '766');";

mysqli_query($link, $sql);}

if (isset($_POST["delrowww766"])){
  $id = $_POST["idd766"];

   $delrow="DELETE FROM `adminposts` WHERE `id` = '$id'";

   
  $ressu= mysqli_query($link, $delrow);
   }
?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='766' or `Group_by` = '766F'";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
    if($row["name"]=="$name"){
      echo "<div class='message-blue'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
      echo "</div>";}

    if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
      echo "<input type='hidden' name='idd766' value='".$row['id']."' style='width:auto;'><input name='delrowww766' type='submit' value='Delete Now!'>";
      echo "</div>";}}}
     
    else {
      echo "no messages were displayed yet.";
    }
    
    $link->close();
    ?>
    </div>
   
          </div>
        <div class="modal-footer">
        <textarea class="input" name="message766ad" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#766ad" class="btn btn-default" type="submit" name="send766ad"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#766ad"  data-dismiss="766ad" name="closeit" style="width:auto;">Close</button></div>

</div>
        </div>

<?php if(!empty($_POST["send766ad"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#766ad").modal("show");
    });
    </script>
<?php endif; ?>
<?php if(!empty($_POST["delrowww766"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#766ad").modal("show");
    });
    </script>
<?php endif; ?>
      
        </form>
        </div>
        </div>


<div class="modal fade" id="706ad" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:80%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">Admin Chat</h4>
        </div>
        <div class="modal-body">
          
        <div id="AdO70" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["send706ad"])){
$msg=$_POST["message706ad"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql="INSERT INTO `adminposts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '706');";

mysqli_query($link, $sql);}

if (isset($_POST["delrowww706"])){
  $id = $_POST["idd706"];

   $delrow="DELETE FROM `adminposts` WHERE `id` = '$id'";

   
  $ressu= mysqli_query($link, $delrow);
   }
?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='706' or `Group_by` = '706F'";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
    if($row["name"]=="$name"){
      echo "<div class='message-blue'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
      echo "</div>";}

    if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
      echo "<input type='hidden' name='idd706' value='".$row['id']."' style='width:auto;'><input name='delrowww706' type='submit' value='Delete Now!'>";
      echo "</div>";}}}
     
    else {
      echo "no messages were displayed yet.";
    }
   
    $link->close();
    ?>
    </div>
   
          </div>
        <div class="modal-footer">
        <textarea class="input" name="message706ad" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#706ad" class="btn btn-default" type="submit" name="send706ad"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#706ad"  data-dismiss="706ad" name="closeit" style="width:auto;">Close</button></div>

</div>
        </div>

<?php if(!empty($_POST["send706ad"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#706ad").modal("show");
    });
    </script>
<?php endif; ?>
<?php if(!empty($_POST["delrowww706"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#706ad").modal("show");
    });
    </script>
<?php endif; ?>
      
        </form>
        </div>
        </div>


<div class="modal fade" id="666ad" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:80%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">Admin Chat</h4>
        </div>
        <div class="modal-body">
          
        <div id="AdO66" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["send666ad"])){
$msg=$_POST["message666ad"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql="INSERT INTO `adminposts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '666');";

mysqli_query($link, $sql);}
if (isset($_POST["delrowww666"])){
  $id = $_POST["idd666"];

   $delrow="DELETE FROM `adminposts` WHERE `id` = '$id'";

   
  $ressu= mysqli_query($link, $delrow);
   }
?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='666' or `Group_by` = '666E'";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
    if($row["name"]=="$name"){
      echo "<div class='message-blue'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
      echo "</div>";}

    if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
      echo "<input type='hidden' name='idd666' value='".$row['id']."' style='width:auto;'><input name='delrowww666' type='submit' value='Delete Now!'>";
      echo "</div>";}}}
     
    else {
      echo "no messages were displayed yet.";
    }
   
    $link->close();
    ?>
    </div>
   
          </div>
        <div class="modal-footer">
        <textarea class="input" name="message666ad" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#666ad" class="btn btn-default" type="submit" name="send666ad"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#666ad"  data-dismiss="666ad" name="closeit" style="width:auto;">Close</button></div>

</div>
        </div>

<?php if(!empty($_POST["send666ad"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#666ad").modal("show");
    });
    </script>
<?php endif; ?>
<?php if(!empty($_POST["delrowww666"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#666ad").modal("show");
    });
    </script>
<?php endif; ?>
      
        </form>
        </div>
        </div>


<div class="modal fade" id="606ad" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:80%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">Admin Chat</h4>
        </div>
        <div class="modal-body">
          
        <div id="AdO60" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["send606ad"])){
$msg=$_POST["message606ad"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql="INSERT INTO `adminposts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '606');";

mysqli_query($link, $sql);}
if (isset($_POST["delrowww606"])){
  $id = $_POST["idd606"];

   $delrow="DELETE FROM `adminposts` WHERE `id` = '$id'";

   
  $ressu= mysqli_query($link, $delrow);
   }
?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='606' or `Group_by` = '606E'";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
    if($row["name"]=="$name"){
      echo "<div class='message-blue'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
      echo "</div>";}

    if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
      echo "<h4>".$row["name"]."</h4>";
      echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
      echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
      echo "<input type='hidden' name='idd606' value='".$row['id']."' style='width:auto;'><input name='delrowww606' type='submit' value='Delete Now!'>";
      echo "</div>";}}}
     
    else {
      echo "no messages were displayed yet.";
    }
    
    $link->close();
    ?>
    </div>
   
          </div>
        <div class="modal-footer">
        <textarea class="input" name="message606ad" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#606ad" class="btn btn-default" type="submit" name="send606ad"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#606ad"  data-dismiss="606ad" name="closeit" style="width:auto;">Close</button></div>

</div>
        </div>

<?php if(!empty($_POST["send606ad"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#606ad").modal("show");
    });
    </script>
<?php endif; ?>
<?php if(!empty($_POST["delrowww606"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#606ad").modal("show");
    });
    </script>
<?php endif; ?>
      
        </form>
        </div>
        </div>






<div class="modalcht fade" id="chk" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
 <div class="modal-content">
    <div class="modal-header" style="background-color: black;">
    <h4 style="color: white;" align="center"> *Choose a group chat to display*</h4>
    
    <button type="button" class="close" data-toggle="modal" data-target="#chk" data-dismiss="chk" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span aria-hidden="true" >&times;</span></div>
        </button>
    </div>
    <div class="modal-body">
      <br>
      <button type="button" data-toggle="modal" data-target="#606dis">display 606E chat</button> <br>
    <button type="button" data-toggle="modal" data-target="#666dis" >display 666E chat </button><br>
    <button type="button" data-toggle="modal" data-target="#706dis" >display 706F chat </button><br>
    <button type="button" data-toggle="modal" data-target="#766dis" >display 766F chat </button><br>
    <button type="button" data-toggle="modal" data-target="#806dis" >display 806G chat </button><br>
    <button type="button" data-toggle="modal" data-target="#juncdis" >display junction chat </button><br>
    <button type="button" data-toggle="modal" data-target="#alldis" >Send a message to all chat forms </button><br>

    </div>
 </div>
 </div>
</div>


<div class="modal fade" id="alldis" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:60%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white; text-align:center;">all users chat form</h4>
        </div>
        <div class="modal-body">
          
        <div class="output">
        <?php
include ("ConfigFile.php");
if (isset($_POST["sendalldis"])){
$msg=$_POST["messagealldis"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sqlall="INSERT INTO `posts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '1111');
INSERT INTO `606posts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '1111');
INSERT INTO `666posts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '1111');
INSERT INTO `706posts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '1111');
INSERT INTO `766posts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '1111');
INSERT INTO `806posts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '1111');
INSERT INTO `866posts`(`msg`, `name`, `Group_by`, `admin_id`) VALUES ('$msg','$name','$group', '1111');";

$link->multi_query($sqlall);}

?>
        <?php
        include ("ConfigFile.php");
        $name=$_SESSION["user"];
        if (isset($_POST["delchtall"])){
        $delall="DELETE FROM `866posts` WHERE `admin_id`='1111';
        DELETE FROM `806posts` WHERE `admin_id`='1111';
        DELETE FROM `766posts` WHERE `admin_id`='1111';
        DELETE FROM `706posts` WHERE `admin_id`='1111';
        DELETE FROM `666posts` WHERE `admin_id`='1111';
        DELETE FROM `606posts` WHERE `admin_id`='1111';
        DELETE FROM `posts` WHERE `admin_id`='1111';";
        $link->multi_query($delall);}
        ?>
        
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];

$seqo = "SELECT * FROM `posts` WHERE `admin_id` = '1111'";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
  
    
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      }}
        
      
    
    else {
      echo "no broadcast has been sent by the admin yet ..";
    }
    
     
    $link->close();
    ?>
    </div>

          </div>
        <div class="modal-footer">
        <textarea class="input" name="messagealldis" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#alldis" class="btn btn-default" type="submit" name="sendalldis"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#alldis"  data-dismiss="alldis" name="closeit" style="width:auto;">Close</button></div>

</div>

<?php if(!empty($_POST["sendalldis"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#alldis").modal("show");
    });
    </script>
<?php endif; ?>
<input  class="btn btn-default" style="margin-right: 35%;" type="submit" name="delchtall" value="Delete all chat history"/>
<?php if(!empty($_POST["delchtall"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#alldis").modal("show");
    });
    </script>
<?php endif; ?>

      
        </div>
        </form>
        </div>
        </div>


<div class="modal fade" id="866dis" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:60%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white; text-align:center;">Group 866G Chat</h4>
        </div>
        <div class="modal-body">
          
        <div class="output" id="U86">
        <?php
include ("ConfigFile.php");
if (isset($_POST["send86dis"])){
$msg=$_POST["message86dis"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql86=" INSERT INTO `866posts`(`msg`, `name`, `Group_by` ) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sql86);}
if (isset($_POST["delcht86"])){
  $del="DELETE FROM `866posts`";
  mysqli_query($link, $del);}
  if (isset($_POST["delrow86"])){
    $id = $_POST["id86"];

     $delrow="DELETE FROM `866posts` WHERE `id` = '$id'";

     
    $ressu= mysqli_query($link, $delrow);
     }
?>
        
        
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];

$seqo = "SELECT * FROM `866posts`";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
  
    
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
        echo "<input type='hidden' name='id86' value='".$row['id']."'><input name='delrow86' type='submit' value='Delete Now!'>";
        echo "</div>";}}}
        
      
    
    else {
      echo "no messages were displayed yet.";
    }
    
     
    $link->close();
    ?>
    </div>

          </div>
          <div class="modal-footer">
          <?php if(!empty($_POST["delrow86"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#866dis").modal("show");
    });
    </script>
<?php endif; ?>
        <textarea class="input" name="message86dis" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#866dis" class="btn btn-default" type="submit" name="send86dis"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#866dis"  data-dismiss="866dis" name="closeit" style="width:auto;">Close</button></div>

</div>

<?php if(!empty($_POST["send86dis"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#866dis").modal("show");
    });
    </script>
<?php endif; ?>
<input  class="btn btn-default" style="margin-right: 35%;" type="submit" name="delcht86" value="Delete all chat history"/>
<?php if(!empty($_POST["delcht86"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#866dis").modal("show");
    });
    </script>
<?php endif; ?>
        </div>
        </form>
        </div>
        </div>


<div class="modal fade" id="806dis" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:60%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white; text-align:center;">Group 806G Chat</h4>
        </div>
        <div class="modal-body">
          
        <div class="output" id="U80">
        <?php
include ("ConfigFile.php");
if (isset($_POST["send80dis"])){
$msg=$_POST["message80dis"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql80=" INSERT INTO `806posts`(`msg`, `name`, `Group_by` ) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sql80);}
if (isset($_POST["delcht80"])){
  $del="DELETE FROM `806posts`";
  mysqli_query($link, $del);}

  if (isset($_POST["delrow80"])){
    $id = $_POST["id80"];

     $delrow="DELETE FROM `806posts` WHERE `id` = '$id'";

     
    $ressu= mysqli_query($link, $delrow);
     }
?>
       
        
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];

$seqo = "SELECT * FROM `806posts`";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
  
    
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
        echo "<input type='hidden' name='id80' value='".$row['id']."'><input name='delrow80' type='submit' value='Delete Now!'>";
        echo "</div>";}}}
        
      
    
    else {
      echo "no messages were displayed yet.";
    }
    
     
    $link->close();
    ?>
    </div>

          </div>
          <div class="modal-footer">
          <?php if(!empty($_POST["delrow80"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#806dis").modal("show");
    });
    </script>
<?php endif; ?>
        <textarea class="input" name="message80dis" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#806dis" class="btn btn-default" type="submit" name="send80dis"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#806dis"  data-dismiss="806dis" name="closeit" style="width:auto;">Close</button></div>

</div>

<?php if(!empty($_POST["send80dis"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#806dis").modal("show");
    });
    </script>
<?php endif; ?>
<input  class="btn btn-default" style="margin-right: 35%;" type="submit" name="delcht80" value="Delete all chat history"/>
<?php if(!empty($_POST["delcht80"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#806dis").modal("show");
    });
    </script>
<?php endif; ?>
        </div>
        </form>
        </div>
        </div>



<div class="modal fade" id="766dis" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:60%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white; text-align:center;">Group 766F Chat</h4>
        </div>
        <div class="modal-body">
        <div class="output" id="U76">
        <?php
include ("ConfigFile.php");
if (isset($_POST["send76dis"])){
$msg=$_POST["message76dis"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql76=" INSERT INTO `766posts`(`msg`, `name`, `Group_by`) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sql76);}
if (isset($_POST["delcht76"])){
  $del="DELETE FROM `766posts`";
  mysqli_query($link, $del);}
  if (isset($_POST["delrow76"])){
    $id = $_POST["id76"];

     $delrow="DELETE FROM `766posts` WHERE `id` = '$id'";

     
    $ressu= mysqli_query($link, $delrow);
     }
?>
       
        
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];

$seqo = "SELECT * FROM `766posts`";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
  
    
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
        echo "<input type='hidden' name='id76' value='".$row['id']."'><input name='delrow76' type='submit' value='Delete Now!'>";
        echo "</div>";}}}
        
      
    
    else {
      echo "no messages were displayed yet.";
    }
    
     
    $link->close();
    ?>
    </div>

          </div>
          <div class="modal-footer">
          <?php if(!empty($_POST["delrow76"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#766dis").modal("show");
    });
    </script>
<?php endif; ?>
        <textarea class="input" name="message76dis" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#766dis" class="btn btn-default" type="submit" name="send76dis"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#766dis"  data-dismiss="766dis" name="closeit" style="width:auto;">Close</button></div>

</div>

<?php if(!empty($_POST["send76dis"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#766dis").modal("show");
    });
    </script>
<?php endif; ?>
<input  class="btn btn-default" style="margin-right: 35%;" type="submit" name="delcht76" value="Delete all chat history"/>
<?php if(!empty($_POST["delcht76"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#766dis").modal("show");
    });
    </script>
<?php endif; ?>
        </div>
        </form>
        </div>
        </div>


<div class="modal fade" id="juncdis" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:60%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white; text-align:center;">all users Chat form </h4>
        </div>
        <div class="modal-body">
          
        <div class="output" id="UJ">
        <?php
include ("ConfigFile.php");
if (isset($_POST["sendJdis"])){
$msg=$_POST["messageJdis"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sqlJ=" INSERT INTO `posts`(`msg`, `name`, `Group_by` ) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sqlJ);}
if (isset($_POST["delchtJ"])){
  $del="DELETE FROM `posts`";
  mysqli_query($link, $del);}
  if (isset($_POST["delrowJ"])){
    $id = $_POST["idJ"];

     $delrow="DELETE FROM `posts` WHERE `id` = '$id'";

     
    $ressu= mysqli_query($link, $delrow);
     }
?>
        
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];

$seqo = "SELECT * FROM `posts`";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
  
    
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
        echo "<input type='hidden' name='idJ' value='".$row['id']."'><input name='delrowJ' type='submit' value='Delete Now!'>";
        echo "</div>";}}}
        
      
    
    else {
      echo "no messages were displayed yet.";
    }
    
     
    $link->close();
    ?>
    </div>

          </div>
          <div class="modal-footer">
        <textarea class="input" name="messageJdis" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#juncdis" class="btn btn-default" type="submit" name="sendJdis"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#juncdis"  data-dismiss="juncdis" name="closeit" style="width:auto;">Close</button></div>

</div>

<?php if(!empty($_POST["sendJdis"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#juncdis").modal("show");
    });
    </script>
<?php endif; ?>
<input  class="btn btn-default" style="margin-right: 35%;" type="submit" name="delchtJ" value="Delete all chat history"/>
<?php if(!empty($_POST["delchtJ"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#juncdis").modal("show");
    });
    </script>
<?php endif; ?>
<?php if(!empty($_POST["delrowJ"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#juncdis").modal("show");
    });
    </script>
<?php endif; ?>
        </div>
        </form>
        </div>
        </div>


<div class="modal fade" id="666dis" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:60%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white; text-align:center;">Group 666E Chat</h4>
        </div>
        <div class="modal-body">
          
        <div class="output" id="U66">
        <?php
include ("ConfigFile.php");
if (isset($_POST["send66dis"])){
$msg=$_POST["message66dis"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql66=" INSERT INTO `666posts`(`msg`, `name`, `Group_by` ) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sql66);}

if (isset($_POST["delcht66"])){
  $del="DELETE FROM `666posts`";
  mysqli_query($link, $del);}

  if (isset($_POST["delrow66"])){
    $id = $_POST["id66"];

     $delrow="DELETE FROM `666posts` WHERE `id` = '$id'";

     
    $ressu= mysqli_query($link, $delrow);
     }
?>
        
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];

$seqo = "SELECT * FROM `666posts`";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
  
    
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
        echo "<input type='hidden' name='id66' value='".$row['id']."'><input name='delrow66' type='submit' value='Delete Now!'>";
        echo "</div>";}}}
        
      
    
    else {
      echo "no messages were displayed yet.";
    }
    
     
    $link->close();
    ?>
    
    </div>

          </div>
          <div class="modal-footer">
          <?php if(!empty($_POST["delrow66"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#666dis").modal("show");
    });
    </script>
<?php endif; ?>
        <textarea class="input" name="message66dis" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#666dis" class="btn btn-default" type="submit" name="send66dis"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#666dis"  data-dismiss="666dis" name="closeit" style="width:auto;">Close</button></div>

</div>

<?php if(!empty($_POST["send66dis"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#666dis").modal("show");
    });
    </script>
<?php endif; ?>
<input  class="btn btn-default" style="margin-right: 35%;" type="submit" name="delcht66" value="Delete all chat history"/>
<?php if(!empty($_POST["delcht66"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#666dis").modal("show");
    });
    </script>
<?php endif; ?>
        </div>
        </form>
        </div>
        </div>


        <div class="modal fade" id="706dis" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:60%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white; text-align:center;">Group 706F Chat</h4>
        </div>
        <div class="modal-body">
          
     
          
        <div class="output" id="U70">
        <?php
include ("ConfigFile.php");
if (isset($_POST["send70dis"])){
$msg=$_POST["message70dis"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql70=" INSERT INTO `706posts`(`msg`, `name`, `Group_by` ) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sql70);}
if (isset($_POST["delcht70"])){
  $del="DELETE FROM `706posts`";
  mysqli_query($link, $del);}
  if (isset($_POST["delrow70"])){
    $id = $_POST["id70"];

     $delrow="DELETE FROM `706posts` WHERE `id` = '$id'";

     
    $ressu= mysqli_query($link, $delrow);
     }
?>
        
        
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];

$seqo = "SELECT * FROM `706posts`";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
  
    
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
        echo "<input type='hidden' name='id70' value='".$row['id']."'><input name='delrow70' type='submit' value='Delete Now!'>";
        echo "</div>";}}}
        
      
    
    else {
      echo "no messages were displayed yet.";
    }
    
     
    $link->close();
    ?>
    </div>

          </div>
          <div class="modal-footer">
          <?php if(!empty($_POST["delrow70"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#706dis").modal("show");
    });
    </script>
<?php endif; ?>
        <textarea class="input" name="message70dis" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#706dis" class="btn btn-default" type="submit" name="send70dis"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#706dis"  data-dismiss="706dis" name="closeit" style="width:auto;">Close</button></div>

</div>

<?php if(!empty($_POST["send70dis"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#706dis").modal("show");
    });
    </script>
<?php endif; ?>
<input  class="btn btn-default" style="margin-right: 35%;" type="submit" name="delcht70" value="Delete all chat history"/>
<?php if(!empty($_POST["delcht70"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#706dis").modal("show");
    });
    </script>
<?php endif; ?>
        </div>
        </form>
        </div>
        </div>


<div class="modal fade" id="606dis" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:60%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white; text-align:center;">Group 606E Chat</h4>
        </div>
        <div class="modal-body">
          
        <div class="output" id="U60">
        <?php
include ("ConfigFile.php");
if (isset($_POST["send60dis"])){
$msg=$_POST["message60dis"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql60=" INSERT INTO `606posts`(`msg`, `name`, `Group_by`) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sql60);}

if (isset($_POST["delcht60"])){
  $del="DELETE FROM `606posts`";
  mysqli_query($link, $del);}

  if (isset($_POST["delrow60"])){
    $id = $_POST["id60"];

     $delrow="DELETE FROM `606posts` WHERE `id` = '$id'";

     
    $ressu= mysqli_query($link, $delrow);
     }

?>
        
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];

$seqo = "SELECT * FROM `606posts`";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
  
    
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content' >".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-right'>".$row["date"]."</div><br>";
        echo "<input type='hidden' name='id60' value='".$row['id']."'><input name='delrow60' type='submit' value='Delete Now!'>";
        echo "</div>";}}}
        
      
    
    else {
      echo "no messages were displayed yet.";
    }
    
     
    $link->close();
    ?>
    
    </div>

          </div>
          <div class="modal-footer">
          <?php if(!empty($_POST["delrow60"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#606dis").modal("show");
    });
    </script>
<?php endif; ?>
        <textarea class="input" name="message60dis" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input data-target="#606dis" class="btn btn-default" type="submit" name="send60dis"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#606dis"  data-dismiss="606dis" name="closeit" style="width:auto;">Close</button></div>

</div>

<?php if(!empty($_POST["send60dis"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#606dis").modal("show");
    });
    </script>
<?php endif; ?>
<input  class="btn btn-default" style="margin-right: 35%;" type="submit" name="delcht60" value="Delete all chat history"/>
<?php if(!empty($_POST["delcht60"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#606dis").modal("show");
    });
    </script>
<?php endif; ?>
        </div>
        </form>
        </div>
        </div>


  

  <div class="modalform fade" id="edit" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
 <div class="modal-content">
    <div class="modal-header" style="background-color: black;">
    <h4 style="color: white;" align="center"> *Choose a form*</h4>
    
    <button type="button" class="close" data-toggle="modal" data-target="#edit" data-dismiss="edit" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span aria-hidden="true" >&times;</span></div>
        </button>
    </div>
    <div class="modal-body">
      <br>
      <br>
      <button type="button" data-toggle="modal" data-target="#FrontTxt">Edit the front text</button> <br><br>
    <button type="button" data-toggle="modal" data-target="#Announce" >Edit the Announcement text </button><br><br>
    </div>

 </div>
 </div>
</div>



<div class="modal fade" id="FrontTxt" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:50%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">latest displayed front texts</h4>
        <button type="button" class="close" data-toggle="modal" data-target="#FrontTxt" data-dismiss="FrontTxt" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span aria-hidden="true" >&times;</span></div>
        </button>
    
        </div>
        <div class="modal-body">
        <div id="output2" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["inserttxt"])){
$txt1=$_POST["txt"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



    $sql = "SELECT * FROM `announce`
    WHERE `RecordID`='13'";

$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result)!= 0){
    $sql1 = "UPDATE `announce` SET `name`='$name',
    `FrontText`='$txt1' 
      WHERE `RecordID` = '13'";

mysqli_query($link, $sql1);}}

?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqqq = "SELECT `name`, `FrontText`, `date` FROM `announce` WHERE `RecordID` = '13'";
$resss=$link->query($seqqq);

if ($resss->num_rows > 0){

  while($row = $resss->fetch_assoc()){
    
      
        echo "<h5>Current Front text is :</h5><br><h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> : ".$row["FrontText"]."<br> *Front Text* <br> </h3>";}
    
        
    }
    else {
      echo "no Front Texts were Written yet.";
    }
    $link->close();
    ?>
    
    </div>
    <textarea class="input" name="txt" placeholder="insert a new Front text...">
</textarea>

<input class="btn btn-default" style="margin-right: 47%;" type="submit" name="inserttxt" value="Update"/>
<?php if(!empty($_POST["inserttxt"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#FrontTxt").modal("show");
    });
    </script>
<?php endif; ?>
          </div>
</form>
</div>
</div>




    <div class="modal fade" id="Announce" role="dialog" tabindex="-1" aria-hidden="true" >
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:50%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">All Announcements by admins</h4>
        <button type="button" class="close" data-toggle="modal" data-target="#Announce" data-dismiss="Announce" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span aria-hidden="true" >&times;</span></div>
        </button>
    
        </div>
        <div class="modal-body">
        <div  class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["insert"])){
$txt=$_POST["announc"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];

    $sql = "SELECT * FROM `announce`
    WHERE `RecordID`='12'";

$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result)!= 0){
    $sql1 = "UPDATE `announce` SET `name`='$name',
    `announceText`='$txt' 
      WHERE `RecordID` = '12'";

mysqli_query($link, $sql1);}}

?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqq = "SELECT `name`, `announceText`, `date` FROM `announce` WHERE `RecordID` = '12'";
$ress=$link->query($seqq);

if ($ress->num_rows > 0){

  while($row = $ress->fetch_assoc()){
    
      
        echo "<h5>Current Announcement is :</h5><br><h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> : ".$row["announceText"]."<br> *Announcement* <br> </h3>";}
    
        
    }
    else {
      echo "no announcements were displayed yet.";
    }
    $link->close();
    ?>
    
    </div>
    <textarea class="input" name="announc" placeholder="insert a new announcement...">
</textarea>

<input class="btn btn-default" style="margin-right: 47%;" type="submit" name="insert" value="Update"/>
<?php if(!empty($_POST["insert"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#Announce").modal("show");
    });
    </script>
<?php endif; ?>
          </div>
</form>
</div>
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script>
$(document).ready(function(){
setInterval(function(){
  $('#AdO60').load('AdGrOutput.php #Ad606')
}, 500);
setInterval(function(){
  $('#AdO66').load('AdGrOutput.php #Ad666')
}, 500);
setInterval(function(){
  $('#AdO70').load('AdGrOutput.php #Ad706')
}, 500);
setInterval(function(){
  $('#AdO76').load('AdGrOutput.php #Ad766')
}, 500);
setInterval(function(){
  $('#AdO80').load('AdGrOutput.php #Ad806')
}, 500);
setInterval(function(){
  $('#AdO86').load('AdGrOutput.php #Ad866')
}, 500);
setInterval(function(){
  $('#U60').load('AdGrOutput.php #U606')
}, 500);
setInterval(function(){
  $('#U66').load('AdGrOutput.php #U666')
}, 500);
setInterval(function(){
  $('#U70').load('AdGrOutput.php #U706')
}, 500);
setInterval(function(){
  $('#U76').load('AdGrOutput.php #U766')
}, 500);
setInterval(function(){
  $('#U80').load('AdGrOutput.php #U806')
}, 500);
setInterval(function(){
  $('#U86').load('AdGrOutput.php #U866')
}, 500);
setInterval(function(){
  $('#UJ').load('AdGrOutput.php #Ujunc')
}, 500);

});
</script>


</body>
</html>
