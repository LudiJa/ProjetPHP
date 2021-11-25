<?php

$auth = true;
require 'includes/config.php';
require 'includes/connect.php';
include_once "_userDetails.php";

$id = $_SESSION['id'];

$firstname = htmlspecialchars(trim($_POST['firstname']));
$lastname = htmlspecialchars(trim($_POST['lastname']));
$adress = htmlspecialchars(trim($_POST['adress']));
$email = htmlspecialchars(trim($_POST['email']));


$modifyUser = 'UPDATE user SET lastname=:lastname,firstname=:firstname,adress=:adress,email=:email WHERE id=:id';
$reqModifyUser = $connexion->prepare($modifyUser);
$reqModifyUser->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$reqModifyUser->bindValue(':lastname', $lastname, PDO::PARAM_STR);
$reqModifyUser->bindValue(':adress', $adress, PDO::PARAM_STR);
$reqModifyUser->bindValue(':email', $email, PDO::PARAM_STR);
$reqModifyUser->bindValue(':id', $id);


if ($reqModifyUser->execute()) {    
    header("Location:modifyUser.php?success=modifyUser");
    exit();
} else {
    header("Location:modifyUser.php?error=unknownError");
    exit();
}