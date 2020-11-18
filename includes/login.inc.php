<?php
session_start();
require 'conectare.php';

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
		$username = strtolower($_POST['username']);
		$password = sha1($_POST['password']);

		$sql = "SELECT * FROM users WHERE username='$username'";

		$result = mysqli_query($conectare, $sql);
		$check1 = mysqli_num_rows($result);

		if($check1>0){

			$row = $result->fetch_assoc();
			$hash = $row['password'];

			if(strcmp($password, $hash)!=0){
				
				header("Location: ../index.php?info=parolagresita");
				die();
			}
			else {


				$_SESSION['ID'] = $row['ID'];
				
				$_SESSION['username'] = $row['username'];
				


				
			header("Location: ../index.php");

			}
			}
		else {

			header("Location: ../index.php?info=nonuser");
			//("Userul nu este in baza de date");
		}

}
else {
			header("Location: ../index.php?info=noncampuri");

	//Nu ai completat toate campurile
}