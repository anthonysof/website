<?php //τρεχει πρωτα
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
session_start();//βαζω πραγματα στο σεσιον
$user_check = $_SESSION['login_user'];
$ses_sql=mysqli_query($conn,"SELECT * from users where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);//εξυπνος πινακας για να μπορω να χρησιμοποιησω τα απο πανω
$login_session =$row['username'];
$email_session = $row['email'];
if(!isset($login_session)){
mysqli_close($conn); // κλεινει συνδεση αν δεν εχει γινει λογκιν δεν μπορεσε να παρει μεταβλητη
header('Location: login.php'); // μανυαλι να παει να μπει
}
 ?>
