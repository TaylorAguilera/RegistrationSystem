
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href ="Home.css">
</head>
<body>

<h2 class="title">welcome to CampusCommunity</h2>

<div class="imgcontainer">
  <div align="left">
	<marquee width="22%" height="500" behavior="scroll" direction="up" scrollamount="5" scrolldelay="2" loop="-1" vspace="10" hspace="10" title="looping text">
    <p class="Pmarq"> <br> In case you forgot the username/password, please mail the admin at (WOU@secretary.edu) with your email provided by the university and group number. <br><br> </p> </marquee></div>
    </div>

<img  src="CC.jpg" alt="Avatar" class="avatar" width="250" height="250">
</div>
    
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="logbtn">Login</button>


<div id="id01" class="modalR">
  
  <form class="modal-contentR animate" action="LogInChk.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="closeR" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="" name="uname" required>
      

    <br>

      <label><b>Password</b></label>
      <input type="password" placeholder="" name="psw" required>
        
      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f128">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
   
    </div>
  </form>
</div>

<form method="get" action="Register.php">
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;" class="signbtn">Sign Up</button>
</form>            


<script>
// Get the modal
var modal = document.getElementById('id01','id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
