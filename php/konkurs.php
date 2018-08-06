<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$korisnik=new Korisnik();

if(isset($_POST['konkurisi'])){

	if($korisnik->konkurs()){
		echo "<script>alert('Vasi podaci su poslati!');</script>";
	}else{
		echo "<script>alert('Zao nam je, doslo je do greske.');</script>";
	}
}




?>