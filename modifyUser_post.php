<?php

$auth = true;
require 'includes/config.php';
require 'includes/connect.php';
include_once "_userDetails.php";

$id = $_SESSION['id'];

$username = htmlspecialchars(trim($_POST['username']));
$firstname = htmlspecialchars(trim($_POST['firstname']));
$lastname = htmlspecialchars(trim($_POST['lastname']));
$adress = htmlspecialchars(trim($_POST['adress']));
$city = htmlspecialchars(trim($_POST['city']));
$country = htmlspecialchars(trim($_POST['country']));
$email = htmlspecialchars(trim($_POST['email']));



$modifyUser = 'UPDATE user SET username=:username, lastname=:lastname,firstname=:firstname,adress=:adress,city=:city, country=:country,email=:email WHERE id=:id';
$reqModifyUser = $connexion->prepare($modifyUser);
$reqModifyUser->bindValue(':username', $username, PDO::PARAM_STR);
$reqModifyUser->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$reqModifyUser->bindValue(':lastname', $lastname, PDO::PARAM_STR);
$reqModifyUser->bindValue(':adress', $adress, PDO::PARAM_STR);
$reqModifyUser->bindValue(':city', $city, PDO::PARAM_STR);
$reqModifyUser->bindValue(':country', $country, PDO::PARAM_STR);
$reqModifyUser->bindValue(':email', $email, PDO::PARAM_STR);
$reqModifyUser->bindValue(':id', $id);


if ($reqModifyUser->execute()) {    
    header("Location:account.php?success=account");
    exit();
} else {
    header("Location:account.php?error=unknownError");
    exit();
}