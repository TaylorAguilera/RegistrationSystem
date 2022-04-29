
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
  <title>Home page chat application</title>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.js"></script>
<link rel = "stylesheet" type = "text/css" href ="Home.css">
</head>
<body class="body">

<div class="btn-group" style="width:100%;background-color: black; color: white; padding: 6px 16px; border: 1px solid white;" >
<h3 style="color: white; float: left;"><?php echo $_SESSION['user']?>-online</h3>
  
  <div style="float: right;">
  <button onclick="window.location.href='profile.php'" style="width:auto;">Profile</button>
<button onclick="window.location.href='logout.php'" style="width:auto;">log out</button>
  </div>
  
  <div style="position:relative; float:right;">
<button type="button" data-toggle="modal" data-target="#listU" style="width:auto;">Group Members</button>
</div>

<div style="position:relative; float:right;">
<button type="button" data-toggle="modal" data-target="#chatform" style="width:auto;">Open the chat forms </button>
</div>

</div>
<br>



<div class="modalform fade" id="chatform" tabindex="-1" role="dialog"  aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header" style="background-color: black;">
    <h4 style="color: white;" align="left"> all chat forms</h4>
    
    <button type="button" class="close" data-toggle="modal" data-target="#chatform" data-dismiss="chatform" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span aria-hidden="true" >&times;</span></div>
        </button>
    </div>
    <div class="modal-body">
      <br>
      <br>
    <button type="button" data-toggle="modal" data-target="#866">Group 866G Chat</button> <br><br>
    <button type="button" data-toggle="modal" data-target="#admin" >Message The Secretary </button><br><br>
    <button type="button" data-toggle="modal" data-target="#junc" >All Groups Chat Form </button><br><br>
  
    </div>
</div>
</div>
</div>


<div id="listU" class="modal fade">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:auto;">
<form class="modal-content" style="width:60%; text-align:center; margin-left: 20%;">
<div class="modal-header" style="background-color: black;">
<h3 style="color: white;">866G Group Members</h3>

<button type="button" class="close" data-toggle="modal" data-target="#listU" data-dismiss="listU" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span style="color: white;" aria-hidden="true" >&times;</span></div>
        </button>
        </div>
<div class="modal-body" role="document">
<?php
include ("ConfigFile.php");
$group=$_SESSION["group"];
$list= "SELECT * FROM `users` WHERE `Group_by`='866G'";
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
        </tr>
        <?php   }   ?>
        <?php
while ($row = $res->fetch_assoc()){

?>
    <tr class='tr'>
    <td class='td'><?php echo $row['username'];?></td>
    <td class='td'><?php echo $row['FirstName'];?></td>
    <td class='td'><?php echo $row['LastName'];?></td>
    <td class='td'><?php echo $row['Email'];?></td></tr>
    
    <?php
  }


$link->close();
?></table>
</div>
</form>
</div>
</div>


<div class="modal fade" id="admin" role="dialog" tabindex="-1" aria-hidden="true" data-dismiss="chatform">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:80%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">Admin Chat</h4>
        </div>
        <div class="modal-body">
          
        <div id="output0" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["sendad"])){
$msg=$_POST["messagead"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql="INSERT INTO `adminposts`(`msg`, `name`, `Group_by`) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sql);}

?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='866' or `Group_by` = '866G'";
$resu=$link->query($seqo);

if ($resu->num_rows != 0){

  while($row = $resu->fetch_assoc()){
    if($row["Group_by"]=='Admin'){
      
      echo "<h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> :<div id='messagess'>".$row["msg"]."</div><br> *Announcement* <br> </h3>";}
  
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<div class = 'message-content' id='messagess'>".$row["msg"]."</div> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-right'>".$row["date"]."</div>";
        echo "</div>";}
      }
    }
    else {
      echo "no messages were displayed yet.";
    }
    $link->close();
    ?>
    </div>
   
          </div>
        <div class="modal-footer">
        <textarea class="input" name="messagead" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input class="btn btn-default" type="submit" name="sendad"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#admin"  data-dismiss="admin" name="closeit" style="width:auto;">Close</button></div>

</div>
        </div>

<?php if(!empty($_POST["sendad"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#admin").modal("show");
    });
    </script>
<?php endif; ?>
      
        </form>
        </div>
        </div>


<div class="modal fade" id="junc" role="dialog" tabindex="-1" aria-hidden="true" data-dismiss="chatform">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:80%;">
<form class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">All Group Chats</h4>
        </div>
        <div class="modal-body">
          
        <div id="output1" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["sendall"])){
$msg=$_POST["messageall"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql="INSERT INTO `posts`(`msg`, `name`, `Group_by`) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sql);}

?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seq = "SELECT * FROM `posts`";
$res=$link->query($seq);

if ($res->num_rows > 0){

  while($row = $res->fetch_assoc()){
    if($row["Group_by"]=='Admin'){
      
        echo "<h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> : ".$row["msg"]."<br> *Announcement* <br> </h3>";}
    
        if($row["name"]=="$name"){
          echo "<div class='message-blue'>";
          echo "<h4>".$row["name"]."</h4>";
          echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
          echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
          echo "</div>";}

        if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
          echo "<h4>".$row["name"]."</h4>";
          echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
          echo "<div class='message-timestamp-right'>".$row["date"]."--".$row["Group_by"]."</div>";
          echo "</div>";}
      }
    }
    else {
      echo "no messages were displayed yet.";
    }
    $link->close();
    ?>
    
    </div>

          </div>
        <div class="modal-footer">
        <textarea class="input" name="messageall" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input class="btn btn-default" type="submit" name="sendall"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#junc"  data-dismiss="junc" name="closeit" style="width:auto;">Close</button></div>

</div>
        </div>

<?php if(!empty($_POST["sendall"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#junc").modal("show");
    });
    </script>
<?php endif; ?>
        </form>
        </div>
        </div>

<div class="modal fade" id="866" role="dialog" tabindex="-1" aria-hidden="true" data-dismiss="chatform">
<div class="modal-dialog modal-dialog-scrollable" role="document" style="width:80%;">
<form id="form" class="modal-content" action="" method="POST">
        <div class="modal-header" style="background-color: black;">
        <h4 class="modal-title" style="color: white;">Chat 866G</h4>
        </div>
        <div class="modal-body">
          
        <div id="output2" class="output">
        <?php



include ("ConfigFile.php");
if (isset($_POST["send"])){
$msg=$_POST["message"];
$group=$_SESSION["group"];
    $name=$_SESSION["user"];



$sql="INSERT INTO `866posts`(`msg`, `name`, `Group_by`) VALUES ('$msg','$name','$group');";

mysqli_query($link, $sql);}

?>
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seq = "SELECT * FROM `866posts`";
$res=$link->query($seq);

if ($res->num_rows > 0){

  while($row = $res->fetch_assoc()){
    if($row["Group_by"]=='Admin'){
      
      echo "<h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> : ".$row["msg"]."<br> *Announcement* <br> </h3>";}
  
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4>".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-right'>".$row["date"]."</div>";
        echo "</div>";}
      }
    }
    else {
      echo "no messages were displayed yet.";
    }
    $link->close();
    ?>
    </div>
          </div>

        <div class="modal-footer">
        <textarea class="input" name="message" placeholder="Send a Broadcast ..">
</textarea>

<div align="justify" style="position:relative;">

<input class="btn btn-default" type="submit" name="send"  style="width:auto;" value="send"/>

<div style="float:right;">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#866"  data-dismiss="866" name="closeit" style="width:auto;">Close</button></div>

</div>
        </div>

<?php if(!empty($_POST["send"])): ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#866").modal("show");
    });
    </script>
<?php endif; ?>

       

        </form>
        </div>
        </div>
        
        <div class="container-body"
        >
        <div style="background-color: black; color: white; padding: 6px 16px; border: 1px solid white; text-align:center;" >
        <h3 >Hello there students - and Welcome to the Campus chat application :)</h3></div>
        <br>
        <div class="HomePageText"  style="background-color: black;">
        <?php

        include ("ConfigFile.php");

        $squll="SELECT `FrontText`,`RecordID` FROM `announce` WHERE `RecordID`= '13' ";
        $reso=$link->query($squll);

if ($reso->num_rows > 0){

  while($row = $reso->fetch_assoc()){
    
      
        echo " ".$row["FrontText"]." ";}
    
        
    }
    else {
      echo "no Front Texts were Written yet.";
    }
    $link->close();
    ?>
        .<br>
        to show the latest announcement of the secretary, please press<button type="button" data-toggle="modal" data-target="#announc" style="width:auto;">Here!</button>
      
      </div>
      </div>
 <div class="modalannounc fade" id="announc" tabindex="-1" role="dialog"  aria-hidden="true">
 <div class="modal-content">
    <div class="modal-header" style="background-color: black;">
    <h4 style="color: white;" align="center"> *Announcements*</h4>
    
    <button type="button" class="close" data-toggle="modal" data-target="#announc" data-dismiss="announc" style="width:auto;" aria-label="Close">
    <div style="position:relative; float:right;"><span aria-hidden="true" >&times;</span></div>
        </button>
    </div>
    <div class="modal-body">
    <?php
        include ("ConfigFile.php");
        $squ="SELECT `announceText`,`RecordID` FROM `announce` WHERE `RecordID`= '12' ";
        $resss=$link->query($squ);

if ($resss->num_rows > 0){

  while($row = $resss->fetch_assoc()){
    
      
        echo " <h4 style='text-align: center;'>".$row["announceText"]."</h4> ";}
    
        
    }
    else {
      echo "no Announcements were displayed yet.";
    }
    $link->close();
    ?>
    </div>
 </div>



        <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

   
</script>
<script>

const messages0 = document.getElementById('output0');
const messages1 = document.getElementById('output1');
const messages2 = document.getElementById('output2');

function getMessages() {
	// Prior to getting your messages.
  shouldScroll0 = messages0.scrollTop + messages0.clientHeight === messages0.scrollHeight;
  shouldScroll1 = messages1.scrollTop + messages1.clientHeight === messages1.scrollHeight;
  shouldScroll2 = messages2.scrollTop + messages2.clientHeight === messages2.scrollHeight;
  
  // After getting your messages.
  if (!shouldScroll0) {
    scrollToBottom0();
    $("#output0").on('scroll', function(){
    scrollToBottom0=false;
});
   
  }
  
  if (!shouldScroll1) {
    scrollToBottom1();
    $("#output1").on('scroll', function(){
    scrollToBottom1=false;
});
  }
  
  if (!shouldScroll2) {
    scrollToBottom2();
    $("#output2").on('scroll', function(){
    scrollToBottom2=false;
});
  }
  
  

}

function scrollToBottom0() {
 messages0.scrollTop = messages0.scrollHeight;

}
function scrollToBottom1() {
 
  messages1.scrollTop = messages1.scrollHeight;

}
function scrollToBottom2() {

  messages2.scrollTop = messages2.scrollHeight;
}

scrollToBottom0();
scrollToBottom1();
scrollToBottom2();

setInterval(getMessages, 100);

$(document).ready(function(){
setInterval(function(){
  $('#output2').load('grOutput.php  #o05')
}, 500);

});
$(document).ready(function(){
setInterval(function(){
  $('#output1').load('grOutput.php #o1')
}, 500);

});

$(document).ready(function(){
setInterval(function(){
  $('#output0').load('grOutput.php #o86')
}, 500);

});
</script>


</body>
</html>