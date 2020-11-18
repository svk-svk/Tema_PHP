<?php

	require 'conectare.php';


	$result = $conectare->query("SELECT nume  FROM produse_magazin ");

			$queue = array();

			while($row = $result->fetch_assoc())
				{

					array_unshift($queue, $row['nume'] );//ord descrescatoare last in first out

				}

			$_SESSION['nume_produs']=$queue;




	$result = $conectare->query("SELECT ID  FROM produse_magazin ");

			$queue = array();
			
			while($row = $result->fetch_assoc())
				{

					array_unshift($queue, $row['ID'] );//ord descrescatoare last in first out

				}

			$_SESSION['ID_produs']=$queue;




	$result = $conectare->query("SELECT cantitate  FROM produse_magazin ");

			$queue = array();

			while($row = $result->fetch_assoc())
				{

					array_unshift($queue, $row['cantitate'] );//ord descrescatoare last in first out

				}

			$_SESSION['cantitate_produs']=$queue;




	$result = $conectare->query("SELECT reducere  FROM produse_magazin ");

			$queue = array();

			while($row = $result->fetch_assoc())
				{

					array_unshift($queue, $row['reducere'] );//ord descrescatoare last in first out

				}

			$_SESSION['reducere_produs']=$queue;




	$result = $conectare->query("SELECT tip_reducere  FROM produse_magazin ");

			$queue = array();
			
			while($row = $result->fetch_assoc())
				{

					array_unshift($queue, $row['tip_reducere'] );//ord descrescatoare last in first out

				}

			$_SESSION['tip_reducere_produs']=$queue;




	$result = $conectare->query("SELECT val_reducere  FROM produse_magazin ");

			$queue = array();

			while($row = $result->fetch_assoc())
				{

					array_unshift($queue, $row['val_reducere'] );//ord descrescatoare last in first out

				}

			$_SESSION['val_reducere_produs']=$queue;




	$result = $conectare->query("SELECT pret_unitate  FROM produse_magazin ");

			$queue = array();

			while($row = $result->fetch_assoc())
				{

					array_unshift($queue, $row['pret_unitate'] );//ord descrescatoare last in first out

				}

			$_SESSION['pret_unitate_produs']=$queue;
			



	$result = $conectare->query("SELECT descriere  FROM produse_magazin ");

			$queue = array();

			while($row = $result->fetch_assoc())
				{

					array_unshift($queue, $row['descriere'] );//ord descrescatoare last in first out

				}

			$_SESSION['descriere_produs']=$queue;



			$result = $conectare->query("SELECT image  FROM produse_magazin ");

			$queue = array();

			while($row = $result->fetch_assoc())
				{

					array_unshift($queue, $row['image'] );//ord descrescatoare last in first out

				}

			$_SESSION['image_produs']=$queue;


	
?>