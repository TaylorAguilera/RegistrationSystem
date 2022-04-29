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
    <title>user's Profile</title>
    <link rel="stylesheet" href="Home.css">
<style>
.container{
  background: gray;
  width: 800px;
  height: auto scroll;
  margin: 0 auto;
  position: relative;
  margin-top: 0%;
  box-shadow: 2px 5px 20px rgba(119,119,119,.5);
  border:  solid white;
}
.rightbox{
  width: 80%;
  margin-left: 34%;
  padding-top: 5px;
}
.btn-group{
top: -9%;
position: relative;
background: black;
box-shadow: 3px 3px 10px rgba(119,119,119,.5);
border: .1em solid white;
}

nav a{
  list-style:none;
  padding: 12px;
  color: white;
  font-size: 1.7em;
  transition: all.3s ease-in-out;
}
nav a:hover {
  color: gray;
  cursor: pointer;
  transform: scale(2);

}
.tab{
  transition: all .5s ease-in;
  width: 80%;
}

h2{
  font-family: 'Times New Roman', Times, serif;
  color: white;
  font-size: 22px;

}
label{
  color: black;
  font-family: 'Times New Roman', Times, serif;
  text-transform: uppercase;
font-size: 10px;
letter-spacing: 1px;
}
.btn-group button {
  background-color: #050505; /* Black background */
  border: 1px solid black; /* black border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
   /* Float the buttons side by side */

}


/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: gray;
}
.tabShow{
  display:none;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}
/* Modal Content/Box */
.modal-content {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  height: auto;
  width: 60%; /* Could be more or less, depending on screen size */
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
.closepos {
  text-align: center;
  margin: 24px 0 10px 0;
  position: relative;
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: white;
  font-size: 35px;
  font-weight: bold;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: black;
  color:white;
  border: 2px solid white;
}
.group {
  color: grey;
  font-size: 18px;
}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

</style>
</head>
<body>
<?php
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
<div class="btn-group" style="width: 100%; background-color: black;" >
<h2 style="color: white; float: left;"><?php echo $_SESSION['user']?>-online</h2>
</div>

    <div class="container">

<div class="btn-group">
<div style="float: right;">
<button onclick="document.getElementById('card').style.display='block'">show current information</button>

<div id="card" class="modal">

<form class="modal-content animate">
<div class="closepos">
<span onclick="document.getElementById('card').style.display='none'" class="close" title="Close Modal">&times;</span>
<h2 style="color:white; background-color: black;">User Profile Card</h2>
</div>
<br>
<br>
<div class="card">
  
<h4>Username: <?php echo $_SESSION["user"];?></h4><br>
<h4>First Name: <?php echo $_SESSION['fname'];?></h4>
<h4>Last Name: <?php echo $_SESSION['lname'];?></h4><br>

<p class="group">Group: <?php echo $_SESSION["group"];?></p><br>

<h3>Email: <?php echo $_SESSION['email'];?></h3>
  
</div>


</form>

</div>


<button onclick="window.location.href='backpage.php'" style="width:auto;">Back to the main page</button></div>
<div style="float: left;">
<nav>
<a onclick="document.getElementById('person').style.display='block'">
<i class="fa fa-tasks"></i>
</a>
<a onclick="document.getElementById('change').style.display='block'">
<i class="fa fa-cog"></i>
</a>
<a onclick="document.getElementById('del').style.display='block'" class="tab">
<i class="fa fa-user" ></i>
</a></div>
</nav>
</div>

    <form action="" method="POST" class="rightbox">


    <div id="person" class="tabShow">

    <h2><b>Edit Personal Information</b></h2><br><br>

    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstn">
    <br>
    <br>

    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastn">
    <br>
    <br>

    
    <button align="center" type="submit" name="update">Update</button>
    </br>
    <br>
    </div>

    <div id="change" class="tabShow">
   <h2><b>Change the password</b></h2><br><br>
   <label><b>Current Password:</b></label>
              <input type="password" placeholder="Enter Password" name="CurrPsw" >
              <br>
              <br>
              <label><b>New Password :</b></label>
              <input type="password" placeholder="Enter Password" name="NewPsw" >
              <br>
              <br>
              <label><b>Confirm New Password :</b></label>
              <input type="password" placeholder="Enter Password" name="password" >
              <br>
              <br>
              <button align="center" type="submit" name="change" >Change Password</button>
              </br>
              <br>
              </div>

              <div id="del" class="tabShow">
              <h2><b>delete account</b></h2><br>
              <button onclick="document.getElementById('delll').style.display='block'" type="submit" name="delete" style="background-color: Red;">Delete My Current Account</button>
              
              </br>
              <br>
              </div>
    </form>
    </div>
    
      <?php
if(isset($_POST["update"])){
  if(isset($_POST["firstn"])){
    if(isset($_POST["lastn"])){
      
      $fname=$_POST["firstn"];
      $lname=$_POST["lastn"];
     
      $user = $_SESSION["user"];
      
    
      $sql = "SELECT * FROM `users`
			WHERE `username`='$user'";

$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result)!= 0){
      $sql1 = "UPDATE `users` SET `FirstName`='$fname',
      `LastName`='$lname'
        WHERE `username` = '$user'";

      mysqli_query($link, $sql1);
      
    ?>
    <div style = "background-color: #70db70;">
   <lable>	 user information has been updated 
   </lable>

 </div>
 <br/>

 <?php
 }
  
  }

    }
    
  }

     
    
  ?>
  
  <?PHP
  if (isset($_POST["change"])){
    $curpswpost = md5($_POST["CurrPsw"]);
    $curpsw = $_SESSION["pass_cript"];
    $newpsw = md5($_POST["NewPsw"]);
    $user = $_SESSION["user"];
    if($curpswpost == $curpsw){

    $sql3 = "SELECT * FROM `users` WHERE `username`='$user' AND `password`= '$curpswpost'";

$result1 = mysqli_query($link,$sql3);

if(mysqli_num_rows($result1)!= 0){

  $sql11 = "UPDATE `users` SET `password`='$newpsw' WHERE `username`='$user'";
  mysqli_query($link, $sql11);
  ?>
  <div style = "background-color: #70db70;">
 <lable><b>	password has changed succesfully</b>
 </lable>

</div>
<br/>

<?php
  }
    
else{
  echo "<b><h2></b>!!-check if you inserted correctly your current password <br>
  !!-Check if your confirmation password matches the new password</h2>
  </b>";
}
    }

  }

?>
  <?php
  if(isset($_POST["delete"])){
    $user = $_SESSION["user"];
  
    $sql22="DELETE FROM `users` WHERE `username`='$user'";
    mysqli_query($link, $sql22);

    echo ' <h3>This account has been deleted successfully<br/> 
    <a href="LogIn.php"> back to the Login Page </a></h3>';
    
	
  ?>
  <?php

}
  
  

  ?>
    <script>
// Get the modal
var tabShow = document.getElementById('person','change','del');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == tabShow) {
        modal.style.display = "none";
    }
}
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

   
</body>
</html>
