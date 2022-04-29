<?php
include ("sess.php");
?>

<div id="o00">

<?php 

include ("ConfigFile.php");

$name=$_SESSION["user"];
$seq = "SELECT * FROM `606posts`";
$res=$link->query($seq);

if ($res->num_rows > 0){

  while($row = $res->fetch_assoc()){
    if($row["Group_by"]=='Admin'){
      
      echo "<h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> : ".$row["msg"]."<br> *Announcement* <br> </h3>";}
  
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4 >".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4 >".$row["name"]."</h4>";
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


<div id="o01">
<?php 

include ("ConfigFile.php");


$name=$_SESSION["user"];
$seq = "SELECT * FROM `666posts`";
$res=$link->query($seq);

if ($res->num_rows > 0){

  while($row = $res->fetch_assoc()){
    if($row["Group_by"]=='Admin'){
      
      echo "<h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> : ".$row["msg"]."<br> *Announcement* <br> </h3>";}
  
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4 >".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4 >".$row["name"]."</h4>";
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


<div id="o02">
<?php 

include ("ConfigFile.php");


$name=$_SESSION["user"];
$seq = "SELECT * FROM `706posts`";
$res=$link->query($seq);

if ($res->num_rows > 0){

  while($row = $res->fetch_assoc()){
    if($row["Group_by"]=='Admin'){
      
      echo "<h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> : ".$row["msg"]."<br> *Announcement* <br> </h3>";}
  
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4 >".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4 >".$row["name"]."</h4>";
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

<div id="o03">
<?php 

include ("ConfigFile.php");


$name=$_SESSION["user"];
$seq = "SELECT * FROM `766posts`";
$res=$link->query($seq);

if ($res->num_rows > 0){

  while($row = $res->fetch_assoc()){
    if($row["Group_by"]=='Admin'){
      
      echo "<h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> : ".$row["msg"]."<br> *Announcement* <br> </h3>";}
  
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4 >".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4 >".$row["name"]."</h4>";
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

<div id="o04">
<?php 

include ("ConfigFile.php");


$name=$_SESSION["user"];
$seq = "SELECT * FROM `806posts`";
$res=$link->query($seq);

if ($res->num_rows > 0){

  while($row = $res->fetch_assoc()){
    if($row["Group_by"]=='Admin'){
      
      echo "<h3 style='color:red;'>".$row["name"]." --".$row["date"]." "."<br> : ".$row["msg"]."<br> *Announcement* <br> </h3>";}
  
      if($row["name"]=="$name"){
        echo "<div class='message-blue'>";
        echo "<h4 >".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4 >".$row["name"]."</h4>";
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

<div id="o05">
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
        echo "<h4 >".$row["name"]."</h4>";
        echo "<p class = 'message-content'>".$row["msg"]."</p> <br>";
        echo "<div class='message-timestamp-left'>".$row["date"]."</div>";
        echo "</div>";}

      if($row["Group_by"] !== 'Admin' && $row["name"]!=="$name") { echo "<div class='message-orange'>";
        echo "<h4 >".$row["name"]."</h4>";
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


<div id="o60">
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='606' or `Group_by` = '606E'";
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


<div id="o76">
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='766' or `Group_by` = '766F'";
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


<div id="o86">
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


<div id="o80">
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='806' or `Group_by` = '806G'";
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


<div id="o70">
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='706' or `Group_by` = '706F'";
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


<div id="o66">
<?php 
include ("ConfigFile.php");
$name=$_SESSION["user"];
$seqo = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='666' or `Group_by` = '666E'";
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



<div id="o1">
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


