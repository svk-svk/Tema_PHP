<?php
session_start();
require 'conectare.php';
if(!empty($_POST['nume'])&&isset($_POST['nume'])

	&&!empty($_POST['cantitate'])&&isset($_POST['cantitate'])

	

	&&!empty($_POST['pret'])&&isset($_POST['pret'])



	&&!empty($_POST['descriere'])&&isset($_POST['descriere'])

)
{
	
     $image2 = $_FILES['image']['name'];
    
    
    $target = "images/".basename($image2);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }


	$nume=$_POST['nume'];
	$cantitate = $_POST['cantitate'];
	$pret=$_POST['pret'];
	$descriere = trim($_POST['descriere']);



if(isset($_POST['reducere_tip'])&&!empty($_POST['reducere_tip'])
	&&!empty($_POST['valoare_reducere'])&&isset($_POST['valoare_reducere'])
	&&!empty($_POST['reducere'])&&isset($_POST['reducere'])){
    

    $valoare_reducere=$_POST['valoare_reducere'];
	$tip_reducere=$_POST['reducere_tip'];
	
	$reducere="on";}
	else {

$reducere="off";
$valoare_reducere=0;
	$tip_reducere=0;

	}
	
	


	$sql = "INSERT INTO produse_magazin
	        (nume, cantitate,  pret_unitate, descriere, image, val_reducere,  tip_reducere, reducere)

	 VALUES ('$nume', '$cantitate',  '$pret', '$descriere','$image2',  '$valoare_reducere', '$tip_reducere', '$reducere')";

	$result = mysqli_query($conectare, $sql);
	header ("Location: ../index.php");
}

else {
	header ("Location: ../Adaugare_produse/adaugare.php?info=eroareps");
}




