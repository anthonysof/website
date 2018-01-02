<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Είσοδος/Εγγραφή</title>

  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/free/png-512/aeroplane-airplane-plane-air-transportation-vehicle-pessanger-people-emoj-symbol-3306ff886517b0e9-512x512.png">
</head>
<?php
include('loginproc.php');
if(isset($_SESSION['login_user'])){
header("location: search.php");
}
?>
<body>
  <nav class="nav-main">
    <div class="logo"><a href="https://localhost/maria/main.php">Maria's Travels</a></div>
    <ul>
      <li>
          <a href="https://localhost/maria/epikoinonia.php" class="nav-item">Επικοινωνήστε μαζί μας</a>
      </li>
      <li>
          <a href="https://localhost/maria/where.php" class="nav-item">Πού είμαστε;</a>
      </li>
      <li>
          <a href="kratisi.html" class="nav-item">Κλείσιμο εκδρομής</a> <!-- "#" allazeis me file, menei=dropdown -->
      </li>
      <li>
          <a href="javascript:void(0)" class="nav-item">Σας προτείνουμε...</a>
          <div class="nav-content">
            <div class="nav-sub">
              <ul>
                <li><a href="ikaria.html">35ήμερο στην Ικαρία</a></li>
                <li><a href="neyyork.html">1μιση μέρα στην Νεα Υόρκη</a></li>
              </ul>
            </div>
          </div>
      </li>
      <li>
          <a href="https://localhost/maria/login.php" class="nav-item">Είσοδος/Εγγραφή χρήστη</a> <!-- "#" allazeis me file, menei=dropdown -->
      </li>
    </ul>
</nav>
<div class="content">
  <table style="align:center;float:center;">
    <form method="post">
    <tr><th colspan="2">Είσοδος Χρήστη</th></tr>
    <tr><td>Username: </td><td><input type="text" id="username" name="username"></td></tr>
    <tr><td>Password: </td><td><input type="password" id="password" name="password"></td></tr>
    <td><a href="http://localhost/maria/register.php" class="button">Εγγραφή</a></td>
    <td><input type="submit" id="submit" name="submit" value="Είσοδος"></td></tr></form>

  </table>
  <span><?php echo $error; ?></span>

</div>
</body>
</html>
