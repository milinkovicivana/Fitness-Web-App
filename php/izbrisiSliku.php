<?php


require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$slika=new Vesti();

$id=$_GET['id'];

$obrisi=$slika->obrisiSliku($id);



?>