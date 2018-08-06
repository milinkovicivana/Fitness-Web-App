<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$korisnik=new Korisnik();

$sesija=new Sesija();

$sesija->start();

if(!$sesija->checkSession() && !$sesija->checkLogin()){

    header("Location:../prijava/index.php");
}

$email=$sesija->get("userEmail");
$nadji=$korisnik->nadjiKorisnikaPoEmail($email);

while($row=$nadji->fetch_assoc()){

    $id=$row['id'];
    $ime=$row['ime'];
    $prezime=$row['prezime'];
    $email=$row['email'];

}

$sesija->set("userId",$id);


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
    <script src="../../js/prijava.js"></script>
    <script src="../../js/promenaStrane.js"></script>
    <script type="text/javascript">
         $(document).ready(function(){
            $("#spisakPolaznika").click(function(){
        
            $("#spisak1").slideToggle();
    });
});

         function prikaziPolaznike(){

         $.ajax({

            type:'GET',
            url:'../../php/prikaziPolaznike.php',
            success:function(data){
                $('#spisak1').html(data);
            }

        });
    }

    prikaziPolaznike();

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
    <a onclick="klik('profil');" class="active">Profil</a>
    <a onclick="klik('kontakt');">Kontakt</a> 
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>

  <center><p><?php echo "Zdravo, ".$ime." ".$prezime."!"; ?></p> <a href="?q=odjava">Odjavi se</a></center> 
  <?php

    if($email=='admin@gmail.com'){ ?>

        <div id="spisakPolaznika">
            <div id="spisak"><p>Svi polaznici</p>
            </div>
            <div id="spisak1">
                <!-- <p>Hej</p> -->
            </div>
        </div> <?php
    }

 


if(isset($_GET['q']) && $_GET['q']=="odjava"){
    $sesija->destroy();
}

?>

</div>
</body>
</html>