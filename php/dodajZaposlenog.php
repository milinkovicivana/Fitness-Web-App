<?php

 require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

 $korisnik=new Korisnik();

 if(isset($_POST['submit'])){

 	$zaposleni=$korisnik->dodajZaposlenog($_POST);

}


?>