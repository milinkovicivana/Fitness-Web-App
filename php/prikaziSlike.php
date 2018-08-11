<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

$sesija=new Sesija();

$sesija->start();

$email=$sesija->get("userEmail");

$slike=new Vesti();

$ispisiSlike=$slike->prikaziSlike();

if($ispisiSlike){

if($email=='admin@gmail.com'){ ?> <form method="post" id="dodajGalerija" enctype="multipart/form-data"><input type="file" name="slika"> <input type="submit" name="submit"></form><br> <?php } 

	while($row=$ispisiSlike->fetch_assoc()){ ?>

		<a href="../../img/<?php echo $row['imeSlike']; ?>" data-lightbox='slike'><img src="../../img/<?php echo $row['imeSlike']; ?>" tabindex="0" onclick="document.getElementById('galerija').src='../../img/<?php echo $row['imeSlike']; ?>'"></a> <?php if($email=='admin@gmail.com'){ ?> <button class="admin" onclick="obrisi(<?php echo $row['id']; ?>);">Obrisi</button> <?php } 
	}
}







?>
