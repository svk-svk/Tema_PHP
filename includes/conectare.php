<?php

$conectare = mysqli_connect('localhost', 'root', '', 'magazin_pescuit'); //numele bazei de date autentificare si username este tabelul
if(!$conectare){
	die('Conectarea nu a reusit!');
}