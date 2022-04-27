
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.js"></script>
<link rel = "stylesheet" type = "text/css" href ="Home.css">



</head>
<body>

<h2 class="title">please register here </h2>



            <form action="" method="post" class="modal-contentR" >
            
              <h1>Sign Up</h1>

              <p>By creating an account you agree to our <a  onclick="document.getElementById('Policy').style.display='block'" 
              style="color:dodgerblue">Terms & Privacy</a>, please take a look.
            </p><br>

              <p>Please fill in this form to create an account. Select the correct group for your course.</p>
              <p>606E - Computer Science</p>
              <p>666E - Information Systems</p>
              <p>706F - History</p>
              <p>766F - Biology</p>
              <p>806G - Art</p>
              <p>866G - Social Issues</p>
            
              <hr>
        
              <label><b>Username :</b></label>
              <input type="text" placeholder="" name="username" required>
              <h5>(Enter first name, then last name.)</h5>
        
              <label><b>Password :</b></label>
              <input type="password" placeholder="" name="password" required>
        
              <label><b>Confirm Password</b></label>
      <input type="password" placeholder="" name="cofpsw" required>

      <label><b>Email Address :</b></label>
              <input type="email" placeholder="" name="email" style="width:100%;"required><br>
              <label><b>Grouped By :</b></label> <br/>

              <select name="Group_by" required>

              <?php

$group_list = array ("606E" , "666E", "706F" , "766F" , "806G" , "866G" );
foreach ($group_list as $currentgroup) 
echo "<option>".$currentgroup."</option>";
?>
</select>
<br/>
              

            
        
              
              
              <div class="clearfixR">
                
                <span class="psw">Back to <a href="LogIn.php">Login</a></span>
                <button type="submit" class="signupbtn" name="Register">Sign Up</button> </div>



<?php


// Include config file
include ("ConfigFile.php");
if(isset($_POST["Register"]))
{

 
$passCript = md5($_POST["password"]);
$usern = $_POST["username"];
$group_list1 = $_POST["Group_by"];
$confpsw = md5($_POST["cofpsw"]);
$email = $_POST["email"];

$sql = "SELECT * FROM `users`
			WHERE `username`='$usern'";
$sql2 = "SELECT * FROM `users`
WHERE `Email`='$email'";
$result2 = mysqli_query($link,$sql2);
$result = mysqli_query($link,$sql);

if(mysqli_num_rows($result)!= 0)
{  echo ' <h3>The Username has already been taken, please choose a different name <br/> 
    </h3>';
	exit();
}
if(mysqli_num_rows($result2)!= 0)
{  echo ' <h3>The Email has already been taken.
    </h3>';
	exit();
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die("Not a valid e-mail address!");
} else {
  if(empty(preg_match("/@mail.wou.edu$/", $email))) {
      die("You must provde the Email given by the university of knowledge");
  }  
else{if ($passCript == $confpsw){
$sql3 = "INSERT INTO `users` (`id`, `username`, `password`, `Group_by`, `Email`)
        VALUES (NULL, '$usern', '$passCript', '$group_list1', '$email')";

mysqli_query($link, $sql3);
header("Location: LogIn.php");
?>


  <?php


}
else{
  echo "<b><h3>
  Password matching is wrong, check if your confirmation password matches the new password</h3>
  </b>";
}

}





}



}


echo "</form>";
?>
<div id="Policy" class="modal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document" >
<div class="modal-content" style="width:60%; text-align:center; margin-left: 20%;">
<div class="modal-header" style="background-color: black;">
<h3 style="color: white;">Terms and Policies</h3>

<button type="button" class="close" onclick="window.location.href='Register.php'"style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span style="color: white;" aria-hidden="true" >&times;</span></div>
        </button>
        </div>
<div class="modal-body" role="document">
    <p>These Terms and Conditions constitute a legally binding agreement made between the user, whether personally or on behalf of an entity and The University of Knowledge, concerning your access to and use of the Campus Community group chat web application.<br>
    You agree that by accessing the Site, you have red, understood, and agreed to be bound by all of these Terms and Conditions.<br>
    The Site is intended for users who are campus students in the university of Knowledge, other users out of the organiation are not permitted to register for the Site and their account would be deleted within 24 hours.<br>
    All group chats are monitorized and accessed by the Admin, therefore, using any offensive language against other users is not tolerated.<br>
    Under reasonable conditions, the Admin have the right to delete any user account, or deleting any offensive messages.<br>
    the Site is our proprietary property and all source code, databases, functionality, website designs, text, (collectively, the “Content”) are controlled by us, and are protected by copyright and trademark laws and various other intellectual property rights.

    </p>
  </div>
</div>
  </div>
</div> 
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    
</script>
</body>
</html>