<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$korisnik=new Korisnik();

if(isset($_POST['reg'])){

	if($_POST['pass']==$_POST['pass1']){

	if($korisnik->registracija()){
		echo "<script>alert('Uspesno ste se registrovali! Prijavite se');</script>";
	}else{
		echo "<script>alert('Postoji korisnik sa tim emailom i sifrom! Prijavite se');</script>";
	}
  }else{
  	echo "<script>alert('Sifra nije ista u oba polja!');</script>";
  }

}

if(isset($_POST['log'])){

	if($korisnik->logovanje()){
		header("Location: ../profil/index.php");
	}else{
		echo "<script>alert('Nema korisnika sa tim emailom i sifrom! Registrujte se!');</script>";
	}
}





?>