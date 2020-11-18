<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Magazin</title>
  </head>
  <body>
   <header>
     <div class="nav1 flex">
      <h1>Magazin articole de pescuit</h1>
      <div class="nav3">
       <div class="login" onclick="myFunction()"><a href="#">
        <i class="fas fa-user"></i>
        Contul meu
      </a>
       </div>
       <div class="cos"><a href="#">
       <i class="fas fa-cart-plus"></i>
      Cosul meu
    </a>
       </div>
     </div>
     </div>
   </header>
<div class="main">
   <div class="nav2">
     <div class="title">
       <i class="fas fa-bars"></i>
       Categories
     </div>

     <ul class="">
       <li><a href="Afisare_produse/afisare_produs.php">Afisare_Produse</a></li>
       <li><a href="Adaugare_produse/adaugare.php">Adaugare_produs</a></li>
       <li><a href="#">Produse</a></li>
       <li><a href="#">Produse</a></li>

       <li><a href="#">Produse</a></li>
       <li><a href="#">Produse</a></li>

     </ul>
   </div>
   <div class="main-content">
     <div class="upper">
     <div class="oferta">
    <i class="fas fa-fish"></i>
     Ofertele zilei
   </div>
   <div id="log">
     <form method="POST" action="includes/login.inc.php">
   <input type="text" name="username" autocomplete="username" placeholder="Username"><br>
<input type="password" autocomplete="current-password" name="password" placeholder="Parola"><br>
<input type="submit" name="Log In" value="Log In" />
</form>
<li style=""><form action="includes/logout.inc.php"><input type="submit" name="Sign Up" value="Logout"></form></li>
    <div class="bottom-log">

        <span><a href="Inregistrare/inregistrare.php">Inregistrare</a></span>
        <span><a href="Schimbare_parola/schimbare-parola.php">Schimba Parola</a></span>
<span><a href="Date_Contact/date_contact.php">Adresa Livrare</a></span>

    </div>
   </div>
 </div>

 <?php

              if(isset($_SESSION['ID'])){
                echo '<p style="margin-left: 80%; position: absolute;">Salut '.$_SESSION['username'].' !</p>';
              }
            ?>


   <div class="content">


     <div class="container">
       
     </div>
     <div class="container">
       
     </div>
     <div class="container">
       
     </div>
     <div class="container">
      
     </div>
     <div class="container">
       
       
     </div>
     <div class="container">
       
     </div>
     <div class="container">
       
     </div>
     <div class="container">
      
     </div>
    
   </div>
 </div>
 </div>

 <footer>
   <div class="legal">
     <h3>Legal</h3>
     <p>Termeni si conditii</p>
     <p>Politica de confidentialitate</p>
     <p>Regulamentul intern de functionare</p>
   </div>


<div class="copyright">
  <h4>Pescarie </span> &copy; 2020 Copyright. All Rights Reserved.</h4>
</div>

<div class="social">
  <h3>Social Media</h3>
  <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
  <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
  <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
</div>
 </footer>
 <script>
 function myFunction() {
var x = document.getElementById("log");
if (x.style.display === "none") {
  x.style.display = "block";
} else {
  x.style.display = "none";
}
}
 </script>
  </body>
</html>
