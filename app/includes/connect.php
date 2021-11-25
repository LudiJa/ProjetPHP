<?php
require "dev.env.php";

try {
    $connexion_string = "mysql:dbname=persophp;host=localhost";
    $connexion = new PDO($connexion_string, 'root', '');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // $connexion = null;
    echo 'Erreur : ' . $e->getMessage();
}