<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$sesija=new Sesija();

$sesija->start();

$email=$sesija->get("userEmail");

$info=new Vesti();

$izmeni=$info->prikaziInfo();

if($izmeni){

	if($email=='admin@gmail.com'){ ?> <a href="izmeniInfo.php"><button id="admin">Izmeni</button></a> <?php } 
  

	while($row=$izmeni->fetch_assoc()){ ?>


			<h2>Adresa:</h2>
            <p><?php echo $row['adresa']; ?></p>
            <h2>Radno vreme:</h2>
            <p><?php echo $row['radnoVreme']; ?></p>
            <h2>Telefon:</h2>
            <p><?php echo $row['telefon']; ?></p>
            <p><?php echo $row['telefon2']; ?></p>
            <h2>E-mail:</h2>
            <p><?php echo $row['email']; ?></p> <?php

     }

 }

?>

