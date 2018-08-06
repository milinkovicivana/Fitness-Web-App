<?php

    require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

    $sesija=new Sesija();

    $sesija->start();

    $email=$sesija->get("userEmail");

    $korisnik=new Korisnik();

    $polaznik=$korisnik->prikaziPolaznike();

    if($polaznik){

        while($row=$polaznik->fetch_assoc()){ 

        	$idP=$row['id']; ?>

        	<p><?php echo "<a href='../profiliPolaznika/index.php?id=$idP'>".$row['ime']." ".$row['prezime']; ?></p> <?php
        }

     }


 ?>