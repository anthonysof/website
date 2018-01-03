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
<form method="post">
<table>
  <tr> <td>  ΠΡΟΟΡΙΣΜΟΣ </td>
  <td> <input type="text" id="pin1" name="dest" readonly> </td> </tr>
  <tr> <td> ΑΦΙΞΗ </td>
  <td id="pin2"> </td> </tr>
  <tr> <td> ΑΝΑΧΩΡΗΣΗ  </td>
  <td id="pin3"> </td> </tr>
  <tr> <td>  ΕΙΣΗΤΗΡΙΑ </td>
  <td id="pin4"> </td> </tr>
  <tr> <td>  ΧΡΕΩΣΗ </td>
  <td id="pin4"> </td> </tr>
  </table>
  <input type="reset" value="ΑΚΥΡΩΣΗ" onclick="bye()">
  <input type="button" value="ΑΠΟΣΤΟΛΗ" onclick="">
  </form>
  <script>
  var dest=localStorage.getItem("des");
  if (dest=="100")
  {
    document.getElementById("pin1").value = "Ikaria";
  }
  else {
    document.getElementById("pin1").value = "New York";
  }

  document.getElementById("pin2").value = localStorage.getItem("des");
  document.getElementById("pin3").value = localStorage.getItem("des");
  document.getElementById("pin4").value = localStorage.getItem("des");
  function bye(){
    window.close();
  }
