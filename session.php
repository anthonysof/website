<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
session_start();
$user_check = $_SESSION['login_user'];
$ses_sql=mysqli_query($conn,"SELECT * from users where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
$email_session = $row['email'];
if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
header('Location: login.php'); // Redirecting To Home Page
}
 ?>
