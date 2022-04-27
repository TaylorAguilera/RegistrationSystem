<?php
include("ConnectDB.php");


if(isset($_POST["register"]))
{
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $gender = $_POST["gender"];
    $department = $_POST["department"];
    $contactNr = $_POST["contact"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $passCript = $_POST["password"];

    $sql = "SELECT * FROM users
            WHERE username='$username'";
$sql2 = "SELECT * FROM users
WHERE email='$email'";
$result2 = mysqli_query($conn,$sql2);
$result = mysqli_query($conn,$sql);

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
$sql3 = "INSERT INTO users (d_id, username, password, contact, department, email, firstName, lastName, gender)
VALUES (NULL, '$username', '$passCript', '$contactNr', '$department' ,'$email', '$firstName', '$lastName', '$gender')";

mysqli_query($conn, $sql3);
header("Location: welcome.html");}




?>