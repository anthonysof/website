<?php
include('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Maria's Travels</title>

  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/free/png-512/aeroplane-airplane-plane-air-transportation-vehicle-pessanger-people-emoj-symbol-3306ff886517b0e9-512x512.png">
</head>
<body>
  <nav class="nav-main">
    <div class="logo"><a href="https://localhost/maria/main.php">Maria's Travels</a></div>
    <ul>
      <li>
          <a href="javascript:void(0)" class="nav-item">Σας προτείνουμε...</a>
          <div class="nav-content">
            <div class="nav-sub">
              <ul>
                <li><a href="ikaria.php">Ικαρία</a></li>
                <li><a href="neyyork.php">Νεα Υόρκη</a></li>
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
<div class="content">
<p>Κλεισμένες εκδρομές του χρήστη <?php echo $login_session; ?>:</p>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM kratiseis WHERE email='".$email_session."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    echo "<table style='border:1px solid black; margin:auto;'>";
    echo
    "<tr><th>email:</th><th>Προορισμός:</th><th>Αναχώρηση</th><th>Επιστροφή</th><th>Εισητήρια</th><th>Χρέωση</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
      echo"<tr><td>".$row['email']."</td>".
          "<td>".$row['ekdromi']."</td>".
          "<td>".$row['anaxorisi']."</td>".
          "<td>".$row['epistrofi']."</td>".
          "<td>".$row['tickets']."</td>".
          "<td>".$row['cost']."</td></tr>";
        }
        echo "</table>";
  } else {
    echo "0 κρατήσεις βρέθηκαν";
  }
  mysqli_close($conn);
 ?>
</body>
</html>
