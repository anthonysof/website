<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Maria's Travels</title>
  <link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
  <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/free/png-512/aeroplane-airplane-plane-air-transportation-vehicle-pessanger-people-emoj-symbol-3306ff886517b0e9-512x512.png">
</head>
<?php
session_start();//εξεταζει αν εχει κανει login ?>
<body>
  <nav class="nav-main">
    <div class="logo"><a href="main.php">Maria's Travels</a></div>
    <ul>
      <li>
          <a href="javascript:void(0)" class="nav-item">Σας προτείνουμε...</a> <!-- καλει μια κενη συναρτηση για το dropdown το # αλλαζει λινκ δεν βολευει -->
          <div class="nav-content">
            <div class="nav-sub">
              <ul>
                <li><a href="ikaria.php">Ικαρία</a></li>
                <li><a href="newyork.php">Νεα Υόρκη</a></li>
              </ul>
            </div>
          </div>
      </li>
      <li>
          <a href="kratisi.php" class="nav-item">Κλείσιμο εκδρομής</a>
      </li>
      <li>
          <a href="epikoinonia.php" class="nav-item">Επικοινωνήστε μαζί μας</a>
      </li>
      <li>
          <a href="where.php" class="nav-item">Πού είμαστε;</a>
      </li>
      <?php if(isset($_SESSION['login_user'])){
        echo '<li><a href="search.php" class="nav-item">Αναζήτηση Εκδρομής</a>'; }
        ?>
      <li>
        <?php if(!isset($_SESSION['login_user'])){echo '<a href="login.php" class="nav-item">Είσοδος/Εγγραφή χρήστη</a>'; }
          else{echo '<a href="logout.php" class="nav-item">Αποσύνδεση</a>'; } ?>
      </li>
    </ul>
    <?php if(isset($_SESSION['login_user'])) echo '<div class="nav-item"> Καλωσήρθες '.$_SESSION['login_user'].'</div>' ?>
</nav>
<br>
<div class="logomain">
  Maria's Travels
</div>
<!-- Slideshow -->
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 10</div>
    <a href="ikaria.php"><img src="ikaria.jpg" style="width:100%"></a>
    <div class="text">Παραλία Σεϋχέλλες, Ικαρία</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 10</div>
    <a href="newyork.php"><img src="freedom-tower.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">3 / 10</div>
    <a href="ikaria.php"><img src="ikaria2.jpg" style="width:100%"></a>
    <div class="text">Ικαρία, Ελλάδα</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 10</div>
    <a href="newyork.php"><img src="newyork2.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">5 / 10</div>
    <a href="ikaria.php"><img src="ikaria3.jpg" style="width:100%"></a>
    <div class="text">Ικαρία, Ελλάδα</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 10</div>
    <a href="newyork.php"><img src="newyork3.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">7 / 10</div>
    <a href="ikaria.php"><img src="ikaria4.jpg" style="width:100%"></a>
    <div class="text">Ικαρία, Ελλάδα</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">8 / 10</div>
    <a href="newyork.php"><img src="newyork4.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">9 / 10</div>
    <a href="ikaria.php"><img src="ikaria5.jpg" style="width:100%"></a>
    <div class="text">Ικαρία, Ελλάδα</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">10 / 10</div>
    <a href="newyork.php"><img src="newyork5.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides"); //το παιρνει με την κλαση οχι με id σαν πινακας ολα τα στοιχεια
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";//σιγουρευουμε οτι εχουν γυρισει στο none
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";//φαινονται ενα ενα
    setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

</body>
</html>
