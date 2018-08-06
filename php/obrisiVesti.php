<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

    $vest=new Vesti();

    $id=$_GET['id'];

    $obrisi=$vest->obrisiVesti($id);





?>