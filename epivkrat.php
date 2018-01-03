<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Maria's Travels</title>

  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/free/png-512/aeroplane-airplane-plane-air-transportation-vehicle-pessanger-people-emoj-symbol-3306ff886517b0e9-512x512.png">
</head>
<?php
session_start(); ?>
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
          <a href="https://localhost/maria/kratisi.php" class="nav-item">Κλείσιμο εκδρομής</a> <!-- "#" allazeis me file, menei=dropdown -->
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
        <?php if(!isset($_SESSION['login_user'])){echo '<a href="https://localhost/maria/login.php" class="nav-item">Είσοδος/Εγγραφή χρήστη</a>'; }
          else{echo '<a href="https://localhost/maria/logout.php" class="nav-item">Αποσύνδεση</a>'; } ?>
      </li>
      <?php if(isset($_SESSION['login_user'])){
        echo '<li><a href="https://localhost/maria/search.php" class="nav-item">Αναζήτηση Εκδρομής</a>'; }
        ?>

    </ul>
    <?php if(isset($_SESSION['login_user'])) echo '<div class="nav-item"> Καλωσήρθες '.$_SESSION['login_user'].'</div>' ?>
</nav>
<div class="content">
<form method="post">
<table style="margin:auto;">
  <tr> <td>  ΠΡΟΟΡΙΣΜΟΣ </td>
  <td> <input type="text" id="pin1" name="dest" value="" style="text-align:center;"> </td> </tr>
  <tr> <td> ΑΝΑΧΩΡΗΣΗ </td>
  <td> <input type="text" id="pin2" name="anax" value="" style="text-align:center;"> </td> </tr>
  <tr> <td> ΕΠΙΣΤΡΟΦΗ  </td>
  <td> <input type="text" id="pin3" name="epis" value="" style="text-align:center;"> </td> </tr>
  <tr> <td>  ΕΙΣΗΤΗΡΙΑ </td>
  <td> <input type="text" id="pin4" name="tickets" value="" style="text-align:center;"> </td> </tr>
  <tr> <td>  ΧΡΕΩΣΗ </td>
  <td> <input type="text" id="pin5" name="xreosi" value="" style="text-align:center;"> </td> </tr>
  <tr> <td>  E-MAIL </td>
  <td> <?php if(isset($_SESSION['login_user'])){echo '<input type="text" id="pin6" name="email" value="'.$_SESSION['user_mail'].'" style="text-align:center;" readOnly> </td> </tr>';}
    else{ echo '<input type="email" id="pin6" name="email"></td></tr>';} ?>
  </table>
  <input type="reset" value="ΑΚΥΡΩΣΗ" onclick="bye()" style="margin-top:20px;">
  <input type="submit" name="submit" value="ΑΠΟΣΤΟΛΗ" style="margin-top:20px;">
  </form>
</div>
  <script>
  var dest=localStorage.getItem("des");
   if (dest=="100")
  {
    document.getElementById("pin1").value = "Ικαρία";
  }
  else {
    document.getElementById("pin1").value = "New York";
  }
  document.getElementById("pin1").readOnly = true;

  document.getElementById("pin2").value = localStorage.getItem("af");
  document.getElementById("pin2").readOnly = true;
  document.getElementById("pin3").value = localStorage.getItem("anax");
  document.getElementById("pin3").readOnly = true;
  document.getElementById("pin4").value = localStorage.getItem("tic");
  document.getElementById("pin4").readOnly = true;
  var cost = localStorage.getItem("xreosi");
  cost += "€";
  document.getElementById("pin5").value = cost;
  document.getElementById("pin5").readOnly = true;
  function bye(){
    if(confirm("Κλείσιμο παραθύρου;")){
    window.close(); }
  }
</script>
<?php
if(isset($_POST['submit'])&&isset($_POST['email'])){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "userdb";
  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }
  mysqli_set_charset($conn,"utf8");
  $sql = "INSERT INTO kratiseis (ekdromi, anaxorisi, epistrofi, tickets, email,cost)
  VALUES ('".$_POST['dest']."','".$_POST['anax']."','".$_POST['epis']."','".$_POST['tickets']."','".$_POST['email']."','".$_POST['xreosi']."')";
  if (mysqli_query($conn, $sql)) {
      echo "Έγινε εγγραφή στην βάση";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
}

 ?>
</body>
</html>
