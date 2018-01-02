<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Επικοινωνια</title>

  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/free/png-512/aeroplane-airplane-plane-air-transportation-vehicle-pessanger-people-emoj-symbol-3306ff886517b0e9-512x512.png">
</head>
<body>
  <nav class="nav-main">
    <div class="logo"><a href="http://localhost/maria/main.php">Maria's Travels</a></div>
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
<table class="bordepik" style="margin-top: 10px;" >
<form>
<tr> <th colspan="2" > ΦΟΡΜΑ ΕΠΙΚΟΙΝΩΝΙΑΣ </th> </tr>
<tr> <td> <label for="fsname"> ΟΝΟΜΑΤΕΠΩΝΥΜΟ*  </label> </td>
<td> <input type="text" id="fsname" name="firstname" required ><br></td> </tr>
<tr> <td> <label for="thl"> ΤΗΛΕΦΩΝΟ</label> </td>
<td> <input type="text" id="thl"  name="zip" ><br > </td> </tr>
<tr> <td> <label for="mail" >EMAIL* </label> </td>
<td><input type="email"id="mail" name="email" required ><br ></td> </tr>
<tr> <td> <label for="q"> ΕΡΩΤΗΜΑ* </label></td>
<td><textarea  rows="10" και cols="30" id="q" name="quest" required> </textarea><br></td> </tr>
</table>
<p> τα πεδια με * ειναι υποχρεωτικά <p>
<input type="reset" value="ΔΙΑΓΡΑΦΗ ΟΛΩΝ">
<input id="btn" type="button" value="ΑΠΟΣΤΟΛΗ" onclick="validateForm()">
</form>
<script>
var onom, emal, que, thlef;

function validateForm() {
	onom=document.getElementById('fsname').value;
	emal=document.getElementById('mail').value;
	que=document.getElementById('q').value;
	thlef=document.getElementById('thl').value;
    if ( onom=="" || emal=="" ||  que=="")
		{alert("ΔΕΝ ΤΑ ΣΥΜΠΛΗΡΩΣΕΣ ΟΛΑ");}
		else
		{
		localStorage.setItem("onoma", onom);
		localStorage.setItem("email", emal);
		localStorage.setItem("quest", que);
		localStorage.setItem("thl", thlef);
		window.open("https://localhost/maria/epivmhn.php");
	}
}
</script>
