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
<div class="page-wrap">
<h1> Ικαρία </h1>
<br><br><br><br>
<iframe style="float:left; margin-left:10px;"width="560" height="315" src="https://www.youtube.com/embed/3PsPaLgoL88?rel=0&amp;start=3" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
<p style="text-align:center; margin-left:10px; margin-right:10px; margin-top:100px;"> Σας καλωσορίζουμε στην Ικαρία, ένα διαφορετικό ελληνικό νησί στο Αιγαίο,με αξέχαστες <a  class="aa"href= "#paralies"> παραλίες</a>.
                         <br>Εδώ, θα βρείτε πληροφορίες για αξέχαστες διακοπές.
                         <br>Η Ικαρία σας περιμένει για ένα μοναδικό <a class="aa" href="https://localhost/maria/kratisi.php">ταξίδι</a> στη ζωή και το χρόνο.</p>
<div style="float:center;margin-top:280px;">
  <h2 id="paralies" style="font-size:40px;"> Παραλιες</h2>
  <ul style="list-style-type:none;">
    <li style="margin-right:50px;"><p style="font-size:25px;"><b><em>Σεϋχέλλες</em></b></p>
      <p style="margin-left:600px;margin-right:10px;margin-top:10px">Δημιουργήθηκε πριν από αρκετά χρόνια από την κατολίσθηση βράχων κατά τη διάνοιξη τούνελ για τη
        δημιουργία δρόμου προς και από το χωριό του Μαγγανίτη. Πρόκειται για μια "εξωτική" παραλία, όπως ορίζει και το όνομά της,
        τα κυανά νερά της, η λευκή άμμος και οι εντυπωσιακοί βράχοι που την περιβάλλουν, συνθέτουν ένα ειδυλλιακό περιβάλλον! </p>
          <img src="ikariaseix.jpg" style="width:350px;margin-right:700px;margin-top:-120px;">
    </li>
    <li style="margin-right:50px;"><p style="font-size:25px;"><b><em>Σκέψη</em></b></p>
      <p style="margin-right:600px;margin-left:10px;margin-top:60px">Η παραλία Σκέψη βρίσκεται στο νότιο τμήμα του νησιού, κάτω απ' το δρόμο από Άγιο Κήρυκο προς Ξυλοσύρτη.
         Έχει πάρει το όνομά της από το άγαλμα που βρίσκεται ακριβώς δίπλα από την παραλία.
        Φιλοτεχνημένο από Ικαριώτη καλλιτέχνη, απεικονίζει μια γυναίκα - μάνα που κάθεται σκεπτική με τα χέρια στα μάγουλα και αγναντεύει το πέλαγος καθώς περιμένει να γυρίσει το παιδί της από την ξενιτιά.
        Η σκέψη δηλαδή είναι στους ομογενείς Ικαριώτες που ζουν στο εξωτερικό.
       Αποτελεί ιδανική λύση για κάποιον που θέλει να έχει εύκολη και γρήγορη πρόσβαση από το κέντρο του Αγίου Κηρύκου. </p>
          <img src="skepsi.jpg" style="width:350px;margin-left:700px;margin-top:-500px">
    </li>
    <li style="margin-right:50px;"><p style="font-size:25px;"><b><em>Φάρος</em></b></p>
      <p style="margin-left:600px;margin-right:10px;margin-top:50px;">Στο Φάρο είναι η μεγαλύτερη παραλία του Νότιου τμήματος του νησιού και
         βρίσκεται λίγα λεπτά από το αεροδρόμιο του νησιού.</p>
          <img src="faros.jpg" style="width:350px;margin-right:700px;margin-top:-100px;">
    </li>
  </ul>
</div>
</div>
<br><br>
<table style="margin:auto;">
<tr><td style="font-size:20px;" colspan="2"><ins><b>Μουσεία θα βρείτε στις εξής περιοχές:</ins></b><br><br></td><tr>
  <tr><td>ΚΑΜΠΟΣ :</td><td> Αρχαιολογική Συλλογή</td></tr>
<tr><td>ΑΓΙΟΣ ΚΗΡΙΚΟΣ : </td><td>Αρχαιολογικό Μουσείο</td></tr>
<tr><td>ΠΕΡΔΙΚΙ : </td><td>Λογραφικό Μουσείο</td></tr>
<tr><td>ΒΡΑΚΑΔΕΣ : </td><td>Αρκετά συχνά στην περιοχή παίρνουν<br>
                           δράση διάφορα καλλιτεχνικά δρώμενα, <br>
                           όπως θεατρικές παραστάσεις, λογο -τεχνικες βραδιές,<br>
                           εκθέσεις, μουσικές συναυλίες,<br>
                           και άλλες εκδηλώσεις.</td></tr>

</table>
<br> <br>
<p> Με μονο 100€ το ατομο ταξιδεψτε απο και προς την ικαρια για να επισκευθειτε το ξεχωριστο αυτο νησι. Θα σας μεινει σιγουρα αξεχαστο.
   <a class="aa" href="https://localhost/maria/kratisi.php">Κλεισε εισητηρια εδω </a></p>
<p> Για να κλεισετε οικονομικα ξενοδοχεια:</p>
<iframe src="https://www.trivago.gr/?iSemThemeId=1356&iPathId=447597&sem_keyword=%CE%BE%CE%B5%CE%BD%CE%BF%CE%B4%CE%BF%CF%87%CE%B5%CE%B9%CE%B1%20%CE%B9%CE%BA%CE%B1%CF%81%CE%B9%CE%B1&sem_creativeid=199077553619&sem_matchtype=e&sem_network=g&sem_device=c&sem_placement=&sem_target=&sem_adposition=1t2&sem_param1=&sem_param2=&sem_campaignid=181654025&sem_adgroupid=14242661105&sem_targetid=kwd-39381107600&sem_location=9061582&cip=30124010101&gclid=CjwKCAiAhMLSBRBJEiwAlFrsTnSLZyiuw4t4TM6qpE33yUbEKxhUNVJN8HxqkeOpvwuhMZeLaFqiAxoCJ4kQAvD_BwE" name="iframe_a" width="500" height="500" >
 <p>Ο φυλλομετρητής σας δεν υποστηρίζει πλαίσια</p>
</iframe>
</body>
</html>
