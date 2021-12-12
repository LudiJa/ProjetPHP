<?php
$viewLogement = "SELECT * from logement";
$reqViewLogement = $connexion->query($viewLogement);
$logements = $reqViewLogement->fetchAll();
?>