<?php
if(empty($_POST["uname"]) || empty($_POST["psw"])){
    header('Location: index.php');
    exit();
}

include("ConnectDB.php");

$passCript = $_POST["psw"]; 
$usern = $_POST["uname"];

$sql = "SELECT * FROM users 
            WHERE username='$usern' AND password='$passCript'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result)!=1)
{
    echo ' <h1>Username or password is wrong. </h1>
         <br />"';
    exit();
}


    session_start();

    $_SESSION["user"] = $usern;
    $_SESSION["pass"] = $passCript;
    $_SESSION["uniqueId"] = session_id();
    $_SESSION["userid"] = $row["d_id"];
    $_SESSION["contact"] = $row["contact"];
    $_SESSION["department"] = $row["department"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["lname"] = $row["lastName"];
    $_SESSION["fname"] = $row["firstName"];
    $_SESSION["gender"] = $row["gender"];
    if($_SESSION["user"] = $usern){
header("location: welcome.php");
    }

?>