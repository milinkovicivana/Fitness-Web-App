<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

 $vesti=new Vesti();

 if(isset($_POST['submit'])){

 	$objavi=$vesti->dodajVesti($_POST);

 	header("Location: index.php");

}






?>