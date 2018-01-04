<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Maria's Travels</title>
  <link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
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
<!-- Slideshow container -->
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 10</div>
    <a href="https://localhost/maria/ikaria.php"><img src="ikaria.jpg" style="width:100%"></a>
    <div class="text">Παραλία Σεϋχέλλες, Ικαρία</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 10</div>
    <a href="https://localhost/maria/newyork.php"><img src="freedom-tower.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">3 / 10</div>
    <a href="https://localhost/maria/ikaria.php"><img src="ikaria2.jpg" style="width:100%"></a>
    <div class="text">Ικαρία, Ελλάδα</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 10</div>
    <a href="https://localhost/maria/newyork.php"><img src="newyork2.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">5 / 10</div>
    <a href="https://localhost/maria/ikaria.php"><img src="ikaria3.jpg" style="width:100%"></a>
    <div class="text">Ικαρία, Ελλάδα</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 10</div>
    <a href="https://localhost/maria/newyork.php"><img src="newyork3.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">7 / 10</div>
    <a href="https://localhost/maria/ikaria.php"><img src="ikaria4.jpg" style="width:100%"></a>
    <div class="text">Ικαρία, Ελλάδα</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">8 / 10</div>
    <a href="https://localhost/maria/newyork.php"><img src="newyork4.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">9 / 10</div>
    <a href="https://localhost/maria/ikaria.php"><img src="ikaria5.jpg" style="width:100%"></a>
    <div class="text">Ικαρία, Ελλάδα</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">10 / 10</div>
    <a href="https://localhost/maria/newyork.php"><img src="newyork5.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
</body>
</html>
