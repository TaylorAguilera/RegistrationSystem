<?php
include ("ConfigFile.php");
session_start();

echo "<div id='Ad606'>";

$name=$_SESSION["user"];
$seqo60 = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='606' or `Group_by` = '606E'";
$resu60=$link->query($seqo60);

if ($resu60->num_rows != 0){

  while($row = $resu60->fetch_assoc()){
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
    
    


echo "</div>";
echo "<div id='Ad666'>";

$name=$_SESSION["user"];
$seqo66 = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='666' or `Group_by` = '666E'";
$resu66=$link->query($seqo66);

if ($resu66->num_rows != 0){

  while($row = $resu66->fetch_assoc()){
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
    
   

echo "</div>";
echo "<div id='Ad706'>";
$name=$_SESSION["user"];
$seqo70 = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='706' or `Group_by` = '706F'";
$resu70=$link->query($seqo70);

if ($resu70->num_rows != 0){

  while($row = $resu70->fetch_assoc()){
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
    
    

echo "</div>";
echo "<div id='Ad766'>";

$name=$_SESSION["user"];
$seqo76 = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='766' or `Group_by` = '766F'";
$resu76=$link->query($seqo76);

if ($resu76->num_rows != 0){

  while($row = $resu76->fetch_assoc()){
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
    
   

echo "</div>";
echo "<div id='Ad806'>";

$name=$_SESSION["user"];
$seqo80 = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='806' or `Group_by` = '806G'";
$resu80=$link->query($seqo80);

if ($resu80->num_rows != 0){

  while($row = $resu80->fetch_assoc()){
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
   
    

echo "</div>";
echo "<div id='Ad866'>";

$name=$_SESSION["user"];
$seqo86 = "SELECT * FROM `adminposts` WHERE `Group_by` = 'Admin' AND `admin_id`='866' or `Group_by` = '866G'";
$resu86=$link->query($seqo86);

if ($resu86->num_rows != 0){

  while($row = $resu86->fetch_assoc()){
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
   
    

echo "</div>";



echo "<div id='U606'>";

$name=$_SESSION["user"];

$seqou60 = "SELECT * FROM `606posts`";
$resuu60=$link->query($seqou60);

if ($resuu60->num_rows != 0){

  while($row = $resuu60->fetch_assoc()){
  
    
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
    
     
    

echo "</div>";
echo "<div id='U666'>";
$name=$_SESSION["user"];

$seqou66 = "SELECT * FROM `666posts`";
$resuu66=$link->query($seqou66);

if ($resuu66->num_rows != 0){

  while($row = $resuu66->fetch_assoc()){
  
    
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
    

echo "</div>";
echo "<div id='U706'>";

$name=$_SESSION["user"];

$seqou70 = "SELECT * FROM `706posts`";
$resuu70=$link->query($seqou70);

if ($resuu70->num_rows != 0){

  while($row = $resuu70->fetch_assoc()){
  
    
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
    

echo "</div>";
echo "<div id='U766'>";

$name=$_SESSION["user"];

$seqou76 = "SELECT * FROM `766posts`";
$resuu76=$link->query($seqou76);

if ($resuu76->num_rows != 0){

  while($row = $resuu76->fetch_assoc()){
  
    
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
    

echo "</div>";
echo "<div id='U806'>";

$name=$_SESSION["user"];

$seqou80 = "SELECT * FROM `806posts`";
$resuu80=$link->query($seqou80);

if ($resuu80->num_rows != 0){

  while($row = $resuu80->fetch_assoc()){
  
    
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
   

echo "</div>";
echo "<div id='U866'>";

$name=$_SESSION["user"];

$seqou86 = "SELECT * FROM `866posts`";
$resuu86=$link->query($seqou86);

if ($resuu86->num_rows != 0){

  while($row = $resuu86->fetch_assoc()){
  
    
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
    

echo "</div>";
echo "<div id='Ujunc'>";

$name=$_SESSION["user"];

$seqoUJ = "SELECT * FROM `posts`";
$resuUJ=$link->query($seqoUJ);

if ($resuUJ->num_rows != 0){

  while($row = $resuUJ->fetch_assoc()){
  
    
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
    echo "</div>";
?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>