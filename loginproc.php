<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Μη έγκυρος κωδικός/username.";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

$conn = mysqli_connect("localhost", "root", "","userdb");

$username = stripslashes($username);    //security
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);    //more security
$password = mysqli_real_escape_string($conn,$password);


$query = mysqli_query($conn, "SELECT * from users where username='$username'");
$rows = mysqli_num_rows($query);
$row=mysqli_fetch_assoc($query);
if ($rows == 1 && password_verify($password,$row['password'])) {
$_SESSION['login_user']=$username;
header("location: search.php");
} else {
$error = "Λανθασμένος κωδικός ή όνομα χρήστη.";
}
mysqli_close($conn); // Closing Connection
}
}
?>
