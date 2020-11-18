<!DOCTYPE html>
<html>
<head>
	<title>E-Pescarii</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="inregistrare.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<body>
	<header>
	
		<nav>
			
		</nav>
	</header>
	<main>

		





		


		
<div class="title"><h1>Inregistrare!</h1></div>
<form  id="myForm" method="POST" action="../includes/signup.inc.php">
	<input type="text" name="nume" placeholder="Nume de familie"><br>
	<input type="text" name="prenume" placeholder="Prenume"><br>
   <input id="field_username" autocomplete="username" title="Username must not be blank and contain only letters, numbers and underscores." type="text" required pattern="\w+" name="username" placeholder="Username"><br>
  <input id="field_pwd1" autocomplete="new-password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" placeholder="Parola"><br>
  <input id="field_pwd2" autocomplete="new-password" title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2" placeholder="Confirmare Parola"><br>
<input type="email"  name="email" placeholder="Email"><br>
<input type="submit" name="Sign Up" value="Sign Up">
</form>



  


<?php
if( isset($_GET['info']) && $_GET['info'] == 'user_ocupat'){
echo '<p>Username luat</p>';}

if(isset($_GET['info']) && $_GET['info'] == 'email_ocupat'){
echo '<p>Email luat</p>';}

 if(isset($_GET['info']) && $_GET['info'] == 'ok'){
echo '<p>Inregistrare cu succes</p>';}
else if (isset($_GET['info']) && $_GET['info'] == 'eroare'){
	echo '<p>Inregistrarea a esuat</p>';}



?>

	</main>
	
</body>
</html>