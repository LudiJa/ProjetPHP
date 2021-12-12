<?php

require 'includes/connect.php';

// if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2']))
//? Je vérifie que tous les champs ne sont pas vides
if (in_array('', $_POST)) {
    header('Location:login.php?error=missingInput');
    exit();
} else {
    //? Si tous les champs sont remplis alors j'assigne les données reçues à des variables auquel j'applique htmlspecialchars. htmlspecialchars est une fonction qui permet de virer l'ensemble des balises HTML.

    $username = htmlspecialchars(trim($_POST['username']));
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $adress = htmlspecialchars($_POST['adress']);
    $city = htmlspecialchars($_POST['city']);
    $cp = htmlspecialchars($_POST['cp']);
    $country = htmlspecialchars($_POST['country']);
}

//* Il est possible d'utiliser un select (sans count) si vous utilisez la méthode fetchColumn() ensuite. Le temps d'exécution est légèrement plus élevé.
//* $verifUsername = "SELECT * FROM user WHERE username = :username";
$verifUsername = 'SELECT COUNT(*) FROM user WHERE username = :username';
$reqVerifUsername = $connexion->prepare($verifUsername);
$reqVerifUsername->bindValue(':username', $username, PDO::PARAM_STR);
$reqVerifUsername->execute();

// $pdo->fetch(); //* J'obtiens un array qui contient : un array indexé avec mes valeurs, et un array associatif avec mes valeurs, mais seulement pour la première ligne que renvoie ma BDD.

// $pdo->fetchColumn(); //* J'obtiens la première colonne du premier résultat de notre requête.

// $pdo->fetchAll(); //* J'obtiens un array qui contient : un array indexé avec mes valeurs, et un array associatif avec mes valeurs, mais cette fois pour tous les résultats de ma requête.

$resultatVerifUsername = $reqVerifUsername->fetchColumn();

//? Je compte le nom d'utilisateur qui possède l'username souhaité
if ($resultatVerifUsername > 0) {
    header('Location:login.php?error=usernameExists');
    exit();
}

//? Cryptage (en vrai hashage) du mot de passe
$password = password_hash($password, PASSWORD_DEFAULT);

//? Requête préparée d'insertion dans la BDD

$insertUser = 'INSERT INTO user (username, firstname, lastname, password, email, adress, city, cp, country) VALUES (:username, :firstname, :lastname, :password, :email, :adress, :city, :cp, :country)';
$reqInsertUser = $connexion->prepare($insertUser);

$reqInsertUser->bindValue(':username', $username, PDO::PARAM_STR);
$reqInsertUser->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$reqInsertUser->bindValue(':lastname', $lastname, PDO::PARAM_STR);
$reqInsertUser->bindValue(':password', $password, PDO::PARAM_STR);
$reqInsertUser->bindValue(':adress', $adress, PDO::PARAM_STR);
$reqInsertUser->bindValue(':city', $city, PDO::PARAM_STR);
$reqInsertUser->bindValue(':email', $email, PDO::PARAM_STR);
$reqInsertUser->bindValue(':cp', $cp, PDO::PARAM_STR);
$reqInsertUser->bindValue(':country', $country, PDO::PARAM_STR);



$resultatInsertUser = $reqInsertUser->execute();

if ($resultatInsertUser) {
    header('Location:login.php?success=loginSuccessful');
    exit();
}