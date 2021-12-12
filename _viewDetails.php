<?php
$id = $_GET['id'];

//? Version préparée : Elle contient des variables donc nécessaire
$viewLogement = "SELECT * from logement WHERE id = :id";
$reqViewLogement = $connexion->prepare($viewLogement);
$reqViewLogement->bindValue(':id',$id);
$reqViewLogement->execute();
$logement = $reqViewLogement->fetch();

if(empty($logement)){
    echo "Erreur";
    echo '<meta http-equiv="refresh" content="0;URL=logement.php?error=noId">';
    exit();
}
?>