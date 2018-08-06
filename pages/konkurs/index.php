<?php

include "../../php/konkurs.php";

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
    <script src="../../js/konkurs.js"></script>
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
    <a onclick="klik('pocetna');">Pocetna</a>
    <a onclick="klik('o nama');">O nama</a>
    <a onclick="klik('galerija');">Galerija</a>
    <a onclick="klik('zaposleni');" class="active">Zaposleni</a>
    <a onclick="klik('cenovnik');">Programi</a>
    <a onclick="klik('prijava');">Prijava</a>
     <a onclick="klik('profil');">Profil</a> 
    <a onclick="klik('kontakt');">Kontakt</a> 
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>

      <center><div id="konkursForma">
    <form method="post" enctype="multipart/form-data">
    <input id="ime" type="text" name="ime" placeholder="Unesite ime"/>
    <br><br>
    <input id="prezime" type="text" name="prezime" placeholder="Unesite prezime"/>
    <br><br>
    <input id="email" type="email" name="email" placeholder="Unesite email"/>
    <br><br>
    <input id="telefon" type="tel" name="telefon" placeholder="Unesite telefon"/>
    <br><br>
    <p><b>Posaljite nam svoj cv</b></p>
    <input id="cv" type="file" name="fileUpload"/>
    <br><br>
    <input id="posalji" type="submit" name="konkurisi" value="Posalji"/>
    </form>
   </div></center>
</div>
   
   
   
</body>

</html>
