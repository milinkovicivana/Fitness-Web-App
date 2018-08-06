<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness club Atletico Gym - galerija</title>
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
    <a onclick="klik('pocetna');">Pocetna</a>
    <a onclick="klik('o nama');">O nama</a>
    <a onclick="klik('galerija');" class="active">Galerija</a>
    <a onclick="klik('zaposleni');">Zaposleni</a>
    <a onclick="klik('cenovnik');">Programi</a>
    <a onclick="klik('prijava');">Prijava</a>
     <a onclick="klik('profil');">Profil</a> 
    <a onclick="klik('kontakt');">Kontakt</a> 
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>

    <center><div class="velikaSlika">
        <img src="../../img/slika3.jpg" id="galerija">
    </div></center>

    <div class="slicice">

        <img src="../../img/slika3.jpg" tabindex="0" onclick="document.getElementById('galerija').src='../../img/slika3.jpg'">
        <img src="../../img/25529849_900052766830470_884759916_n.jpg" tabindex="0" onclick="document.getElementById('galerija').src='../../img/25529849_900052766830470_884759916_n.jpg'">
        <img src="../../img/slika113.jpg" tabindex="0" onclick="document.getElementById('galerija').src='../../img/slika113.jpg'">
        <img src="../../img/slika2 teretana.jpg" tabindex="0" onclick="document.getElementById('galerija').src='../../img/slika2 teretana.jpg'">
        <img src="../../img/teretena1.jpg" tabindex="0" onclick="document.getElementById('galerija').src='../../img/teretena1.jpg'">
        <img src="../../img/slika3 teretana (2).jpg" tabindex="0" onclick="document.getElementById('galerija').src='../../img/slika3 teretana (2).jpg'">
        
    </div>
   
   
</body>

</html>
