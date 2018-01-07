<?php
session_start();
$error='';//αρχικα κενο
if (isset($_POST['submit'])) {//αν εχει πατυσει το κουμπι
if (empty($_POST['username']) || empty($_POST['password'])) {//αν εχει συμπληρωσει τα γιουζερ και πασ
$error = "Μη έγκυρος κωδικός/username.";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

$conn = mysqli_connect("localhost", "root", "","userdb");
mysqli_set_charset($conn,"utf8");
$username = stripslashes($username);    //κανει εσκεειπ τα μπακσλασεσ security
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);    //εσκειπ τα σπεσιαλ καρσ more security
$password = mysqli_real_escape_string($conn,$password);


$query = mysqli_query($conn, "SELECT * from users where username='$username'");
$rows = mysqli_num_rows($query);//μια γραμμη πρεπει να ειναι
$row=mysqli_fetch_assoc($query);//ασοσιετιβ αρει (οχι ενα δυο αλλα μειλ γιουσερ κτλ)
if ($rows == 1 && password_verify($password,$row['password'])) {//συγκρινει το πασγουορτ με το χαστ πασ της βασης
$_SESSION['login_user']=$username;
$_SESSION['user_mail']=$row['email'];
$_SESSION['user_name']=$row['firstname'];
$_SESSION['user_name'].=" ";
$_SESSION['user_name'].=$row['surname'];//βγαζει ονομα κενο και επωνυμοο για την επικοινωνια
header("location: search.php");//τον παει στην αναζητηση
} else {
$error = "Λανθασμένος κωδικός ή όνομα χρήστη.";//αν κατι παει λαθος τοτε βγαζει αυτο
}
mysqli_close($conn); // κλεινει η συνδεση
}
}
?>
