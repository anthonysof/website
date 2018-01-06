<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ικαρία</title>

  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
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
<h1> Ικαρία </h1>
<br><br><br><br>
<iframe style="float:left; margin-left:10px;"width="560" height="315" src="https://www.youtube.com/embed/3PsPaLgoL88?rel=0&amp;start=3" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
<p style="text-align:center; margin-left:10px; margin-right:10px; margin-top:100px;"> Σας καλωσορίζουμε στην Ικαρία, ένα διαφορετικό ελληνικό νησί στο Αιγαίο.
                         <br>Εδώ, θα βρείτε πληροφορίες για αξέχαστες διακοπές.
                         <br>Η Ικαρία σας περιμένει για ένα μοναδικό ταξίδι στη ζωή και το χρόνο.</p>
<div style="float:center;margin-top:300px;">
  
  <h2> Παραλιες</h2>
  <p>
</div>
</body>
</html>
