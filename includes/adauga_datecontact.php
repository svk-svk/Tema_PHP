<?php
session_start();
require 'conectare.php';
if(!empty($_POST['nr_telefon'])&&isset($_POST['nr_telefon'])

	&&!empty($_POST['judet'])&&isset($_POST['judet'])

	&&!empty($_POST['adresa'])&&isset($_POST['adresa'])

	)
{

    

	$nr_tel=$_POST['nr_telefon'];
	$judet = $_POST['judet'];
	$adresa=$_POST['adresa'];
	$id_cumparator = 1;




	$sql = "INSERT INTO datecontact
	        (ID_Cumparator, NR_Telefon, Adresa, Judet)

	 VALUES ('$id_cumparator', '$nr_tel', '$adresa','$judet')";

	$result = mysqli_query($conectare, $sql);
	//header ("Location: ../User/adauga-anunt.php?info=okps");
}

else {
	//header ("Location: ../User/adauga-anunt.php?info=eroareps");
}
