<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

include '../../php/dodajVest.php';

$sesija=new Sesija();

$sesija->start();

$email=$sesija->get("userEmail");

if(!$sesija->checkSession() && !$sesija->checkLogin()){

    header("Location:../prijava/index.php");
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness club Atletico Gym</title>
    <link rel="stylesheet" href="../../css/stil.css">
     <link rel="stylesheet" href="../../css/media.css">
   <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/navigacija.js"></script>
    <script src="../../js/promenaStrane.js"></script>
</head>
<body>
<div class="container">
    <header>
    	<div id="heder">
            <div id="logo">
                <a id="link" onclick="klik('pocetna');"><img src="../../img/25975573_1675141142536761_526633014_n.png" id="logo" alt="fitness club atletico gym"></a>
            </div>
            <div id="naslov">
                <h1 class="text-center" id="ime"><strong>Fitness Club Atletico Gym</strong></h1>
            </div>
         </div>
    </header>
   <div class="topnav" id="myTopnav">
	  <a onclick="klik('pocetna');" class="active">Pocetna</a>
	  <a onclick="klik('o nama');">O nama</a>
	  <a onclick="klik('galerija');">Galerija</a>
	  <a onclick="klik('zaposleni');">Zaposleni</a>
      <a onclick="klik('cenovnik');">Programi</a>
	  <a onclick="klik('prijava');">Prijava</a>
	  <a onclick="klik('kontakt');">Kontakt</a> 
	  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>
   
    	<center><form method="post" id="dodajVest" enctype="multipart/form-data">
    		<input type="text" name="naslov" placeholder="Naslov" id="naslov"><br><br>
    		<input type="text" name="tekst" placeholder="Tekst" id="tekst"><br><br>
    		<input type="file" name="slika"><br><br>
    		<input type="submit" name="submit" value="Dodaj" class="btn">
    	</form> </center>
    
   
</div>
</body>
</html>