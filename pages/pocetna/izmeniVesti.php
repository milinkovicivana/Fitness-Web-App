<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$sesija=new Sesija();

$sesija->start();

$email=$sesija->get("userEmail");

if(!$sesija->checkSession() && !$sesija->checkLogin()){

    header("Location:../prijava/index.php");
}

$vest=new Vesti();

if(isset($_GET['izmeni'])){

    $idVesti=$_GET['izmeni'];

    $izmeni=$vest->odrediVestPoId($idVesti);
}

while($row=$izmeni->fetch_assoc()){

    $id=$row['id'];
    $naslov=$row['naslov'];
    $tekst=$row['tekst'];
    $slika=$row['slika'];
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
    		<input type="text" name="naslov" placeholder="Naslov" id="naslov" value="<?php echo $naslov ?>"><br><br>
    		<input type="text" name="tekst" placeholder="Tekst" id="tekst" value="<?php echo $tekst ?>"><br><br>
    		<input type="file" name="slika" value="<?php echo $slika ?>"><br><br>
    		<input type="submit" name="submit" value="Dodaj" class="btn">
    	</form> </center>

        <?php

if(isset($_POST['submit'])){

    $izmeniVest=$vest->izmeniVest($_POST, $idVesti);

    if($izmeniVest){
        echo $izmeniVest;
    }
}

?>
    
   
</div>
</body>
</html>