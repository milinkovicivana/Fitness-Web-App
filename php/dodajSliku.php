<?php

 require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

 $slika=new Vesti();

 if(isset($_POST['submit'])){

 	$dodaj=$slika->dodajSliku($_POST);

 }

?>