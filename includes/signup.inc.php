<?php
session_start();
require 'conectare.php';

if(!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['username']) && !empty($_POST['pwd1']) && !empty($_POST['pwd2']) && !empty($_POST['email'])&&isset($_POST['nume'])&&isset($_POST['prenume'])&&isset($_POST['username'])&&isset($_POST['pwd1'])&&isset($_POST['pwd2'])&&isset($_POST['email']))
{
	$nume = trim($_POST['nume']);
	$prenume = trim($_POST['prenume']);
	$username = strtolower ($_POST['username'] );
	$password = $_POST['pwd1'];
	$email = strtolower (trim($_POST['email']));
 $tip_user=1;
	$password_hashed = sha1($password);

//verificam unicitatea userului 
	$sql = "SELECT username FROM users WHERE username='$username'";
	$result1 = mysqli_query ($conectare, $sql);
	$check1 = mysqli_num_rows($result1);
	if($check1>0){

   	header ("Location: ../Inregistrare/inregistrare.php?info=user_ocupat");
   	die();
   }

//verficam unicitatea email
	$sql = "SELECT email FROM users WHERE email='$email'";
	$result2 = mysqli_query ($conectare, $sql);
	$check2 = mysqli_num_rows($result2);
	if($check2>0){

   	header ("Location: ../Inregistrare/inregistrare.php?info=email_ocupat");
   	die();
   }



	$sql = "INSERT INTO users(Nume, Prenume, username, password, tip_user ,email) VALUES ('$nume', '$prenume', '$username', '$password_hashed', '$tip_user', '$email')";//in loc de $password trebuie pusa o parola cripatata
	$result = mysqli_query($conectare, $sql);
	
	
	

		
	 $result = mysqli_query($conectare, "SELECT ID from users WHERE username= '$username'");

			$row = $result->fetch_assoc();
			$_SESSION['ID'] = $row['ID'];

				
				$_SESSION['username'] =$username;
				


				
			header("Location: ../index.php");
}

else {
	header ("Location: ../Inregistrare/inregistrare.php?info=eroare");}