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
    <div class="logo"><a href="http://localhost:8012/maria/main.php">Maria's Travels</a></div>
    <ul>
      <li>
          <a href="https://localhost:8012/maria/epikoinonia.php" class="nav-item">Επικοινωνήστε μαζί μας</a>
      </li>
      <li>
          <a href="https://localhost:8012/maria/where.php" class="nav-item">Πού είμαστε;</a>
      </li>
      <li>
          <a href="kratisi.html" class="nav-item">Κλείσιμο εκδρομής</a> <!-- "#" allazeis me file, menei=dropdown -->
      </li>
      <li>
          <a href="https://localhost:8012/maria/login.php" class="nav-item">Είσοδος/Εγγραφή χρήστη</a> <!-- "#" allazeis me file, menei=dropdown -->
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
    </ul>
</nav>
<!-- Slideshow container -->
<div class="slideshow-container">


  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <a href="ikaria.html"><img src="ikaria.jpg" style="width:100%"></a>
    <div class="text">Παραλία Σεϋχέλλες, Ικαρία</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <a href="neyyork.html"><img src="freedom-tower.jpg" style="width:100%"></a>
    <div class="text">Νέα Υόρκη, ΉΠΑ</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="kipseli.jpg" style="width:100%">
    <div class="text">Εξωτική Κυψέλλη, Αθήνα</div>
  </div>




</div>
<br>

<!-- The dots/circles -->
<div class="content">
  EDW PERIEXOMENO SELIDAS NENE TI KALA KALA
  <P> PARAGRAFOS </P>
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
