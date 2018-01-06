<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Επικοινωνια</title>
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
<table class="bordepik" cellpadding="5" cellspacing="5">
<form>
<tr> <th colspan="2" > ΦΟΡΜΑ ΕΠΙΚΟΙΝΩΝΙΑΣ </th> </tr>
<tr> <td> <label for="fsname"> ΟΝΟΜΑΤΕΠΩΝΥΜΟ*  </label> </td>
<td> <?php if(isset($_SESSION['user_name'])){echo '<input type="text" id="fsname" name="firstname" value="'.$_SESSION['user_name'].'"required>';}
else{echo '<input type="text" id="fsname" placeholder="όνομα επώνυμο" name="firstname" required';} ?><br></td> </tr>
<tr> <td> <label for="thl"> ΤΗΛΕΦΩΝΟ *</label> </td>
<td> <input type="text" id="thl" placeholder="2101111111"  name="zip" ><br > </td> </tr>
<tr> <td> <label for="mail" >EMAIL* </label> </td>
<td><?php if(isset($_SESSION['user_name'])){echo '<input type="text" id="mail" name="mail" value="'.$_SESSION['user_mail'].'"required>';}
else{echo '<input type="email" id="mail" placeholder="sample@gmail.com" name="mail" required';} ?><br ></td> </tr>
<tr> <td> <label for="q"> ΕΡΩΤΗΜΑ* </label></td>
<td><textarea  rows="10" cols="30" id="q" name="quest" required> </textarea><br></td> </tr>
<tr> <td colspan="2">  τα πεδια με * ειναι υποχρεωτικά  </td> </tr>
</table>
<br>
<input class="buttonsreg" type="reset" value="ΔΙΑΓΡΑΦΗ">
<input class="buttonsreg" id="btn" type="submit" value="ΑΠΟΣΤΟΛΗ" onclick="validateForm()">
</form>
<br>
</body>
<script>
var onom, emal, que, thlef;

function validateField(data,regex) {
    return regex.test(data);
}

function validateForm() {
	onom=document.getElementById('fsname').value;
	emal=document.getElementById('mail').value;
	que=encodeURIComponent(document.getElementById('q').value); //encode special chars no XSS
	thlef=document.getElementById('thl').value;
    if ( onom=="" || emal=="" ||  que=="" ){
      alert("ΔΕΝ ΤΑ ΣΥΜΠΛΗΡΩΣΕΣ ΟΛΑ");
    }
		else
		{
      if (validateField(emal,/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
        if (validateField(onom,/^[A-Za-zα-ωΑ-Ω\s]*$/)){
          if (validateField(thlef,/^\d{10}$/)){
		localStorage.setItem("onoma", onom);
		localStorage.setItem("email", emal);
		localStorage.setItem("quest", que);
		localStorage.setItem("thl", thlef);
		window.open("https://localhost/maria/epivmhn.php");
	        }else{alert("Μη έγκυρο τηλέφωνο");}
        }else{alert("Μη έγκυρο ονοματεπώνυμο");}
      }else{alert("Μη έγκυρο email");}
    }
}
</script>
</html>
