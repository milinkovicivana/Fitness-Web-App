<?php

    require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

    $sesija=new Sesija();

    $sesija->start();

    $email=$sesija->get("userEmail");

    $korisnik=new Korisnik();

    $zaposleni=$korisnik->prikaziZaposlene();

    if($zaposleni){

        while($row=$zaposleni->fetch_assoc()){ ?>

            <div class="zaposlen" id="zaposlen"> <?php
                echo "<img src = '../../img/".$row['slika']."'>";
                echo "<em>".$row['ime']." ".$row['prezime']."</em>";
                echo "<p>".$row['posao']."</p>"; 
                if($email=='admin@gmail.com'){ ?>
                <button onclick="obrisi(<?php echo $row['id']; ?>);">Obrisi</button> <?php
            } ?>
            </div> <?php
        }
    }

?>