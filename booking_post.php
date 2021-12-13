<?php

$auth = true;
require 'includes/config.php';
require 'includes/connect.php';

    $id = $_GET['id'];

    $reqReservation = 'UPDATE logement SET avaibility=:avaibility WHERE id=:id';
    $editReservation = $connexion->prepare($reqReservation);
    $editReservation->bindValue(':avaibility', 0);
    $editReservation->bindValue(':id', $id);

$editReservation->execute();