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
          <a href="kratisi.html" class="nav-item">Κλείσιμο εκδρομής</a> <!-- "#" allazeis me file, menei=dropdown -->
      </li>
      <li>
        <?php if(!isset($_SESSION['login_user'])){echo '<a href="https://localhost/maria/login.php" class="nav-item">Είσοδος/Εγγραφή χρήστη</a>'; }
          else{echo '<a href="https://localhost/maria/logout.php" class="nav-item">Αποσύνδεση</a>'; } ?>
      </li>
      <?php if(isset($_SESSION['login_user'])){
        echo '<li><a href="https://localhost/maria/search.php" class="nav-item">Αναζήτηση Εκδρομής</a>'; }
        ?>
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
    </ul>
    <?php if(isset($_SESSION['login_user'])) echo '<div class="nav-item"> Καλωσήρθες '.$_SESSION['login_user'].'</div>' ?>
</nav>
<h1> ΠΟΥ ΘΑ ΜΑΣ ΒΡΕΙΤΕ</h1>
<p> ΔΙΕΥΘΥΝΣΗ : Αργοναυτων 59, Μαρουσι <br> Τηλεφωνο Επικοινωνιας : 2108024522<p>
<br>
<div id="map" style="width:600px;height:400px; margin: auto; margin-bottom: 20px;">My map will go here</div>

<table style="text-align: center; border: 1px solid black; margin: auto; padding: 5px;">
<tr > <td>ΔΕΥΤΕΡΑ </td> <td>9:00-17:00 </td> </tr>
<tr > <td>ΤΡΙΤΗ</td> <td>9:00-17:00  </td> </tr>
<tr> <td>ΤΕΤΑΡΤΗ </td> <td>9:00-17:00  </td> </tr>
<tr> <td>ΠΕΜΠΤΗ </td> <td>9:00-17:00  </td> </tr>
<tr> <td>ΠΑΡΑΣΚΕΥΗ </td> <td>9:00-17:00  </td> </tr>
<tr> <td>ΣΑΒΒΑΤΟ </td> <td>ΚΛΕΙΣΤΑ </td></tr>
<tr> <td>ΚΥΡΙΑΚΗ </td> <td>ΚΛΕΙΣΤΑ </td> </tr>
</table>

<script>
function myMap() {
var myCenter = new google.maps.LatLng(38.048201, 23.810444);
var mapCanvas = document.getElementById("map");
var mapOptions = {center: myCenter, zoom: 15};
var map = new google.maps.Map(mapCanvas, mapOptions);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXOIB2USUYp8jbyNlvbiD3pNT1Atr_Cyg&callback=myMap"></script>
</body>
</html>
