<?php


require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

    $korisnik=new Korisnik();

    $id=$_GET['id'];

    $obrisi=$korisnik->obrisiZaposlenog($id);


?>