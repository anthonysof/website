<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Νέα Υόρκη</title>

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
<h1> Νέα Υορκη </h1>
<br><br><br><br>
<iframe style="float:left; margin-left:10px;" width="560" height="315" src="https://www.youtube.com/embed/pXU_GY7hjPc?start=3" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
<p style="text-align:center; margin-left:10px; margin-right:10px; margin-top:100px;"> Η Νέα Υόρκη είναι η πιο πυκνοκατοικημένη πόλη των Ηνωμένων Πολιτείων<br>
                                                                                      και ένας από τους πιο πυκνοκατοικημένους αστικούς οικισμούς στον κόσμο.<br>
                                                                                      Μία ισχυρή πόλη που ασκεί σημαντική επίδραση στο εμπόριο, την οικονομία,<br>
                                                                                      τα μέσα ενημέρωσης,<a href=#aks class="aa"> την τέχνη</a>, τη μόδα, την έρευνα, την τεχνολογία, <br>
                                                                                      την εκπαίδευση και την ψυχαγωγία.<br>
                                                                                    Αποτελεί ένα σημαντικό κέντρο για τη διεθνή διπλωματία και <br>
                                                                                    έχει περιγραφεί ως η πολιτιστική και οικονομική πρωτεύουσα του κόσμου.</p>

<div style="float:center;margin-top:250px;">
  <h2 id="aks" style="font-size:40px;"> Αξιοθέατα</h2>
  <br>
  <ul style="list-style-type:none;">
    <li style="margin-right:50px;"><p style="font-size:25px;"><b><em>Central Park</em></b></p>
      <p style="margin-left:600px;margin-right:20px;margin-top:10px">Στη διάθεσή σας έχετε περίπου 3.500 στρέμματα πρασίνου και βλάστησης.
        Το πάρκο διαθέτει 5 λίμνες (όπου μπορείτε να κάνετε και βαρκάδα), 30 αψίδες και γέφυρες,
        ζωολογικό κήπο. Μπορείτε να συμμετάσχετε και στους οργανωμένους περιπάτους <a href="https://www.centralpark.com" class="aa">(www.centralpark.com)</a>
        ή να παρακολουθήσετε κάποια από τις δεκάδες εκδηλώσεις που γίνονται, όταν ο καιρός το επιτρέπει.</p>
          <img src="centralpark.jpg" style="width:350px;margin-right:800px;margin-top:-120px;">
    </li>
    <br><br>
    <li style="margin-right:50px;"><p style="font-size:25px;"><b><em>Μουσείο Μοντέρνας Τέχνης(MOMA)</em></b></p>
      <p style="margin-right:600px;margin-left:10px;margin-top:60px">Το Μουσείο Μοντέρνας Τέχνης (Museum of Modern Art ή MoMA) είναι μουσείο μοντέρνας και
        σύγχρονης τέχνης που βρίσκεται στην περιοχή του Μανχάτταν.
        Θεωρείται πως κατέχει σήμερα μία από τις σημαντικότερες συλλογές έργων μοντέρνας τέχνης στον κόσμο,
        με έργα των σπουδαιότερων σύγχρονων καλλιτεχνών όπως του Πάμπλο Πικάσσο, του Ανρί Ματίς, του Βίνσεντ βαν Γκογκ,
        του Σεζάν, του Νταλί και του Τζάκσον Πόλοκ. <a href="https://www.moma.org/" class="aa">www.moma.org/ </a></p>
          <img src="moma.jpg" style="width:350px;margin-left:700px;margin-top:-500px">
    </li>
    <br><br>
    <li style="margin-right:50px;"><p style="font-size:25px;"><b><em>Empire State Building</em></b></p>
      <p style="margin-left:600px;margin-right:10px;margin-top:50px;">Το Εμπάιρ Στέιτ Μπίλντινγκ είναι ένας από τους υψηλότερους και ιστορικότερους ουρανοξύστες στον κόσμο.
        Βρίσκεται στην πόλη της Νέας Υόρκης και έχει 102 ορόφους. Υπήρξε ο υψηλότερος ουρανοξύστης στη Γη για 41 χρόνια, από την ολοκλήρωσή του το 1931 ως το χτίσιμο του Βόρειου Πύργου του Παγκόσμιου Εμπορικού Κέντρου το 1972.
        Μετά την καταστροφή των πύργων του Κέντρου αυτού από τις τρομοκρατικές επιθέσεις της 11ης Σεπτεμβρίου 2001,
        το Εμπάιαρ Στέιτ ξανάγινε και παρέμεινε το υψηλότερο κτήριο σε ολόκληρη τη Νέα Υόρκη μέχρι τις 30 Απριλίου 2012. Ο αρχιτεκτονικός ρυθμός του είναι Αρ Ντεκό</p>
          <img src="empire.jpg" style="width:350px;margin-right:700px;margin-top:-200px;">
    </li>
  </ul>
</div>
</div>
<br><br>
<table style="margin:auto;">
<tr><td style="font-size:20px;" colspan="2"><ins><b>Άλλα μέρη που πρέπει να επισκευτείτε:</ins></b><br><br></td><tr>
  <tr><td>5η Λεοφόρος :</td><td>Η ακριβότερη εμπορική αρτηρία στον κόσμο</td></tr>
<tr><td>Τάιμς Σκουέαρ : </td><td>Το τέλειο μέρος για πρωτοχρονιά</td></tr>
<tr><td>Γέφυρα του Μπρούκλιν : </td><td>Μια από τις παλαιότερες κρεμαστές γέφυρες στις Ηνωμένες Πολιτείες</td></tr>
<tr><td>Chinatown : </td><td>Δημοφιλές σημείο εξερεύνησης </td></tr>

</table>
<br> <br>
<p> Με μονο 1500€ το ατομο ταξιδεψτε απο και προς την Νεα Υορκη για να επισκευθειτε το ξεχωριστο αυτο μερος. Θα σας μεινει σιγουρα αξεχαστο.
   <a class="aa" href="https://localhost/maria/kratisi.php">Κλεισε εισητηρια εδω </a></p>
<p> Για να κλεισετε οικονομικα ξενοδοχεια:</p>
<iframe src="https://www.trivago.gr/?iSemThemeId=1516&iPathId=34812&sem_keyword=%CF%86%CE%B8%CE%B7%CE%BD%CE%B1%20%CE%BE%CE%B5%CE%BD%CE%BF%CE%B4%CE%BF%CF%87%CE%B5%CE%B9%CE%B1%20%CE%BD%CE%B5%CE%B1%20%CF%85%CE%BF%CF%81%CE%BA%CE%B7&sem_creativeid=191978401669&sem_matchtype=b&sem_network=g&sem_device=c&sem_placement=&sem_target=&sem_adposition=1t2&sem_param1=&sem_param2=&sem_campaignid=95003360&sem_adgroupid=4526233760&sem_targetid=aud-295721641839:kwd-201759477200&sem_location=9061582&cip=3012017012&gclid=CjwKCAiAhMLSBRBJEiwAlFrsTtySijL1rFWxJ-L_UbzGjFlVbQd0ijlB9lpd3CqpWznuUu4jSqdMBhoCiXoQAvD_BwE" name="iframe_a" width="500" height="500" >
 <p>Ο φυλλομετρητής σας δεν υποστηρίζει πλαίσια</p>

</body>
</html>
