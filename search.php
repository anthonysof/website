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
    <div class="logo"><a href="http://localhost/maria/main.php">Maria's Travels</a></div>
    <ul>
      <li>
          <a href="epikoinonia.html" class="nav-item">Επικοινωνήστε μαζί μας</a>
      </li>
      <li>
          <a href="http://localhost/maria/main.php" class="nav-item">Πού είμαστε;</a>
      </li>
      <li>
          <a href="kratisi.html" class="nav-item">Κλείσιμο εκδρομής</a> <!-- "#" allazeis me file, menei=dropdown -->
      </li>
      <li>
          <a href="https://localhost/maria/login.php" class="nav-item">Είσοδος/Εγγραφή χρήστη</a> <!-- "#" allazeis me file, menei=dropdown -->
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
<div class="content">
TRALALO <?php echo "<br>".$login_session." ".$row['firstname']." ".$row['surname']." ".$row['email']; ?>
<b id="logout"><a href="logout.php">Log Out</a></b>
  <P> PARAGRAFOS </P>
</div>
</body>
</html>
