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
     <script type="text/javascript">
        
        function prikaziInfo(){

         $.ajax({

            type:'GET',
            url:'../../php/prikaziInfo.php',
            success:function(data){
                $('.adresa').html(data);
            }

        });
    }

    prikaziInfo();

  </script>
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
      <a onclick="klik('zaposleni');">Zaposleni</a>
      <a onclick="klik('cenovnik');">Programi</a>
      <a onclick="klik('prijava');">Prijava</a>
       <a onclick="klik('profil');">Profil</a> 
      <a onclick="klik('kontakt');" class="active">Kontakt</a> 
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <div class="okvir">
         <div id="mapakontakt">
            <iframe width="100%" height="100%" allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.3541242780993!2d20.463191215013207!3d44.87544188055618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a64994141c857%3A0x9a6461c7ca7e6569!2sNarodne+omladine%2C+Beograd!5e0!3m2!1sen!2srs!4v1513468879850&amp;quot;"></iframe>
        </div>
        
        <div class="adresa">
           
        </div>
        <div class="kontaktForma">
             <form class="info">
            <p class="aaa">Ime: </p>
                <input type="text">
                <p class="aaa">Prezime: </p>
                <input type="text">
                <p class="aaa">E-mail: </p>
                <input type="email">
                <p class="aaa">Poruka:</p>
                <textarea id="poruka"></textarea>
                <button class="btn" type="button">Posalji </button>
            </form>
        </div>
     </div>
   
       
       
    </div>

   
   
   
</body>

</html>
