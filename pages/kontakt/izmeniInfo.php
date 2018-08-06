<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$sesija=new Sesija();

$sesija->start();

$email=$sesija->get("userEmail");

if(!$sesija->checkSession() && !$sesija->checkLogin()){

    header("Location:../prijava/index.php");
}

$info=new Vesti();

$izmeni=$info->prikaziInfo();

if($izmeni){

    while($row=$izmeni->fetch_assoc()){

        $adresa=$row['adresa'];
        $radnoVreme=$row['radnoVreme'];
        $telefon=$row['telefon'];
        $telefon2=$row['telefon2'];
        $email=$row['email'];
    }
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

    <center><form method="post" id="dodajInfo" enctype="multipart/form-data">
        <input type="text" name="adresa" placeholder="Adresa" class="info" value="<?php echo $adresa ?>"><br><br>
        <input type="text" name="radnoVreme" placeholder="Radno vreme" class="info" value="<?php echo $radnoVreme ?>"><br><br>
        <input type="text" name="telefon" placeholder="Telefon" class="info" value="<?php echo $telefon ?>"><br><br>
        <input type="text" name="telefon2" placeholder="Drugi telefon" class="info" value="<?php echo $telefon2 ?>"><br><br>
        <input type="text" name="email" placeholder="Email" class="info" value="<?php echo $email ?>"><br><br>
        <input type="submit" name="submit" value="Dodaj" class="btn">
      </form> </center>

 <?php

if(isset($_POST['submit'])){

    $izmeniInfo=$info->izmeniInfo($_POST);

    if($izmeniInfo){
        echo $izmeniInfo;
    }
}

?>
</div>
</body>
</html>