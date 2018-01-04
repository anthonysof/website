<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Είσοδος/Εγγραφή</title>
  
  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="icon" href="https://cdn.iconscout.com/public/images/icon/free/png-512/aeroplane-airplane-plane-air-transportation-vehicle-pessanger-people-emoj-symbol-3306ff886517b0e9-512x512.png">
</head>
<body>
  <nav class="nav-main">
    <div class="logo"><a href="https://localhost/maria/main.php">Maria's Travels</a></div>
    <ul>
      <li>
          <a href="javascript:void(0)" class="nav-item">Σας προτείνουμε...</a>
          <div class="nav-content">
            <div class="nav-sub">
              <ul>
                <li><a href="ikaria.php">Ικαρία</a></li>
                <li><a href="neyyork.php">Νεα Υόρκη</a></li>
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
<div class="content">
  <h2>Εγγραφή Νέου Χρήστη</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  <table border="0" cellpadding="5" cellspacing="0" width="600">
  <tr>
  <td><b>Ονοματεπώνυμο*:</b></td>
  <td>
  <input id="FirstName" name="FirstName" type="text" maxlength="60" required>
  <input id="LastName" name="LastName" type="text" maxlength="60"  required>
  </td>
  </tr><tr>
  <td><b>Διεύθυνση Email*:</b></td>
  <td><input id="email" name="email" type="email" maxlength="60" </td>
  </tr><tr>
  <td><b>Username*:</b></td>
  <td><input id="username" name="username" type="text" maxlength="60" required></td>
  </tr><tr>
  <td><b>Κωδικός*:</b></td>
  <td><input id="password" name="password" type="password" maxlength="120" required></td>
  </tr><tr>
  <td><b>Επιβεβαίωση Κωδικού*:</b></td>
  <td><input id="confpass" name="confpass" type="password" maxlength="120" required></td>
  </tr><tr>
  <td><input type="reset" name="reset" value="Καθαρισμός"></td>
  <td><input type="submit" name="submit" value="Εγγραφή" onclick="valForm()"></td></tr>

</table><input type="hidden" name="con" id="con" value="0"></form>
</div>
<script>
function validateField(data,regex) {
    return regex.test(data);
}

function valForm(){
  var kodikos, epal, user, onoma, eponimo, email;
  kodikos = document.getElementById('password').value;
  epal = document.getElementById('confpass').value;
  user = document.getElementById('username').value;
  onoma = document.getElementById('FirstName').value;
  eponimo = document.getElementById('LastName').value;
  email = document.getElementById('email').value;
  if (validateField(email,/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
    if (validateField(onoma,/^[A-Za-zα-ωΑ-Ω]*$/) && validateField(eponimo,/^[A-Za-zα-ωΑ-Ω]*$/)){
      if (validateField(user,/^[a-zA-Z0-9]*$/)){
        if (validateField(kodikos,/^.{4,16}$/)){
          if(kodikos==epal){
            document.getElementById('con').value = "1";

          }
          else{
            alert("οι κωδικοί δεν είναι ίδιοι!");
            document.getElementById('con').value = "0";
          }
        }else{
          alert('Ο κωδικός να είναι 4-16 ψηφία');

        }
      }else{alert('Μόνο αλφαριθμητικά στο username');
       }
    }else{

      alert('Μόνο γράμματα στο Ονοματεπώνυμο')
    }
  }
  else{
  alert('Λάθος τύπος email'); }



}
</script>
<?php
if (isset($_POST['con'])&&$_POST['con']=="1"&&isset($_POST['email'])&&$_POST['email']!=""&&isset($_POST['username'])&&$_POST['username']!=""&&isset($_POST['FirstName'])&&$_POST['FirstName']!=""
&&isset($_POST['LastName'])&&$_POST['LastName']!=""&&isset($_POST['password'])&&$_POST['password']!=""&&isset($_POST['confpass'])&&$_POST['confpass']!=""){
  $passwordu = password_hash($_POST['password'],PASSWORD_DEFAULT);
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "userdb";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }
  mysqli_set_charset($conn,"utf8");
  $query1 = $_POST['email'];
  $query2 = $_POST['username'];
  $raw_results1 = mysqli_query($conn,"SELECT * FROM users WHERE email='".$_POST['email']."'");
  $raw_results2 = mysqli_query($conn,"SELECT * FROM users WHERE username='".$_POST['username']."'");
  if((mysqli_num_rows($raw_results1) > 0)&&(mysqli_num_rows($raw_results2)==0)){
    echo "<br>Ήδη εγγεγραμένος χρήστης με αυτό το email: ".$query1;
  }
  elseif((mysqli_num_rows($raw_results2) > 0)&&(mysqli_num_rows($raw_results1)==0)){
    echo "<br>Το username χρησιμοποιείται ήδη";
  }
  elseif((mysqli_num_rows($raw_results2) > 0)&&(mysqli_num_rows($raw_results1)>0)){
    echo "<br>Είστε ήδη εγγεγραμμένος, ξεχασατε τον κωδικό σας;";
  }
  else{
    $sql = "INSERT INTO users (email,username,password,firstname,surname) VALUES ('".$_POST['email']."','".$_POST['username']."','".$passwordu."','".$_POST['FirstName']."','".$_POST['LastName']."')";
    if (mysqli_query($conn, $sql)) {
        echo "Έγινε εγγραφή στην βάση";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
mysqli_close($conn);
  } ?>
</body>
</html>
