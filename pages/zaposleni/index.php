<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$sesija=new Sesija();

$sesija->start();

$email=$sesija->get("userEmail");

include '../../php/dodajZaposlenog.php';

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
     <script type="text/javascript">
         
     function prikaziZaposlene(){

         $.ajax({

            type:'GET',
            url:'../../php/prikaziZaposlene.php',
            success:function(data){
                $('.levi').html(data);
            }

        });
    }

    function obrisi(str){
            var id=str;

            if(confirm('Da li ste sigurni da zelite da obrisete?')){
            $.ajax({

                type:'GET',
                url:'../../php/izbrisiZaposlenog.php',
                data:"id="+id,
                success:function(data){
                    prikaziZaposlene();
                }


            });
        }
    }

   /* function dodajPost(){
        
        var ime=$('#ime').val();
        var prezime=$('#prezime').val();
        var posao=$('#posao').val();
        //var slika=$('#slika').val();

        $.ajax({

            type:'POST',
            url:'../../php/dodajZaposlenog.php',
            data:"ime="+ime+"&prezime="+prezime+"&posao="+posao,
            success:function(data){
                prikaziZaposlene();
            }

        });
    
 }*/

    prikaziZaposlene();
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
    <a onclick="klik('zaposleni');" class="active">Zaposleni</a>
    <a onclick="klik('cenovnik');">Programi</a>
    <a onclick="klik('prijava');">Prijava</a>
    <a onclick="klik('profil');">Profil</a>
    <a onclick="klik('kontakt');">Kontakt</a> 
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
	<div id="sidebar2">
    <div id="konkurs"><p>TRAZIMO INSTRUKTORA JOGE<br>
        Prijavite se!</p>
    </div>
    <div id="kon">
      <p>Ukoliko ste zainteresovani da budete deo naseg tima, dostavite nam Vas cv licno na adresu teretane, javite se na telefon 011/2310958 ili pratite sledeci <a href="../konkurs/index.php">LINK</a></p>
    </div>
    </div>
    <div class="levi">
    

</div>
<div id="sidebar">
	<div id="konkurs"><p>TRAZIMO INSTRUKTORA JOGE<br>
		Prijavite se!</p>
	</div>
    <div id="kon2">
      <p>Ukoliko ste zainteresovani da budete deo naseg tima, dostavite nam Vas cv licno na adresu teretane, javite se na telefon 011/2310958 ili pratite sledeci <a href="../konkurs/index.php">LINK</a></p>
    </div>
</div>
<?php

if($email=='admin@gmail.com'){ ?>

<div id="dodaj">
    <p>Dodaj novog zaposlenog</p>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="ime" id="ime" placeholder="Unesite ime">
        <input type="text" name="prezime" id="prezime" placeholder="Unesite prezime">
        <input type="text" name="posao" id="posao" placeholder="Unesite posao">
        <input type="file" name="slika" id="slika" value="Izaberite sliku"><br>
        <input type="submit" name="submit" value="Dodaj">
    </form>
</div> <?php

} ?>


</div>
  
</body>

</html>
