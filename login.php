<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Είσοδος/Εγγραφή</title>

  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
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
          <a href="javascript:void(0)" class="nav-item">Σας προτείνουμε...</a>
          <div class="nav-content">
            <div class="nav-sub">
              <ul>
                <li><a href="https://localhost/maria/ikaria.php">Ικαρία</a></li>
                <li><a href="https://localhost/maria/newyork.php">Νεα Υόρκη</a></li>
              </ul>
            </div>
          </div>
      </li>
      <li>
          <a href="https://localhost/maria/kratisi.php" class="nav-item">Κλείσιμο εκδρομής</a>
      </li>
      <li>
          <a href="https://localhost/maria/epikoinonia.php" class="nav-item">Επικοινωνήστε μαζί μας</a>
      </li>
      <li>
          <a href="https://localhost/maria/where.php" class="nav-item">Πού είμαστε;</a>
      </li>
      <?php if(isset($_SESSION['login_user'])){
        echo '<li><a href="https://localhost/maria/search.php" class="nav-item">Αναζήτηση Εκδρομής</a>'; }
        ?>
      <li>
        <?php if(!isset($_SESSION['login_user'])){echo '<a href="https://localhost/maria/login.php" class="nav-item">Είσοδος/Εγγραφή χρήστη</a>'; }
          else{echo '<a href="https://localhost/maria/logout.php" class="nav-item">Αποσύνδεση</a>'; } ?>
      </li>
    </ul>
    <?php if(isset($_SESSION['login_user'])) echo '<div class="nav-item"> Καλωσήρθες '.$_SESSION['login_user'].'</div>' ?>
</nav>
<br>
<div class="logomain">
  Maria's Travels
</div>
<div class="content">
  <table class="logintable" cellpadding="5" cellspacing="5">
    <form method="post">
    <tr><th colspan="2" style=" font-size:20px ;">Είσοδος Χρήστη</th></tr>
    <tr><td><label for="username">Username:<label> </td>
        <td><input type="text" placeholder="username"id="username" name="username"></td></tr>
    <tr><td><label for"password">Password: <label></td>
        <td><input placeholder="password"type="password" id="password" name="password"></td></tr>
    <tr><td colspan="2"><input class="buttons" type="submit" id="submit" name="submit" value="Είσοδος"></td></tr></form>
    <tr> <td colspan="2"><span><?php echo $error; ?></span></td></tr>
  </table>
  <a href="https://localhost/maria/register.php" class="button">Εγγραφή</a>


</div>

</body>
</html>
