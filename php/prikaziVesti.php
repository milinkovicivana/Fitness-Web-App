<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$sesija=new Sesija();

$sesija->start();

$email=$sesija->get("userEmail");

$vest=new Vesti();

$ispisi=$vest->prikaziVesti();

if($ispisi){

	if($email=='admin@gmail.com'){ ?> <a href="dodajVest.php"><button id="admin">Dodaj vest</button></a> <?php } 
  

	while($row=$ispisi->fetch_assoc()){ ?>

		<div class="v"> 
               <h2><?php echo $row['naslov']; ?> </h2>  <?php if($email=='admin@gmail.com'){ ?> <a href="izmeniVesti.php?izmeni=<?php echo $row['id'] ?>"><button class="admin">Izmeni</button></a> <button class="admin" onclick="obrisi(<?php echo $row['id']; ?>);">Obrisi</button> <?php } ?>
               <img src="../../img/<?php echo $row['slika']; ?>" alt="slika1" width="250"  id="slikav1" class="slikevesti">
                <p class="v"> <?php echo $row['tekst'];  ?> </p>
        </div> <?php

	 }

}



?>