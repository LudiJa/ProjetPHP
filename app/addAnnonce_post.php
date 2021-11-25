<?php
$auth = true;
require "includes/config.php";
require "includes/connect.php";

if(empty($_POST['title']) || empty($_POST['type']) || empty($_POST['start']) || empty($_POST['end']) || empty($_POST['nbrplace']) || empty($_POST['country']) || empty($_POST['city']) || empty($_POST['cp']) || empty($_POST['price']) || empty($_POST['adress']))
{
    header('Location:addAnnonce.php?error=missingInput');
    exit();
} else {
    $title = htmlspecialchars(trim($_POST['title']));
    $price = htmlspecialchars(trim($_POST['price']));
    $type = htmlspecialchars(trim($_POST['type']));
    $start = htmlspecialchars(trim($_POST['start']));
    $end = htmlspecialchars(trim($_POST['end']));
    $nbrplace = htmlspecialchars(trim($_POST['nbrplace']));
    $adress = htmlspecialchars(trim($_POST['adress']));
    $city = htmlspecialchars(trim($_POST['city']));
    $cp = htmlspecialchars(trim($_POST['cp']));
$country = htmlspecialchars(trim($_POST['country']));
$id = $_SESSION['id'];

if (!empty($_POST['description'])) {
    $description = htmlspecialchars(trim($_POST['description']));
} else {
    $description = null;}

    if(empty($_FILES['image']['name'])){
        $imagePath = 'app/images/room-1.jpg';
        $image = null;
    }else{
        $image = $_FILES['image'];
    }

    if (!empty($_POST['adress2'])) {
        $adress2 = htmlspecialchars(trim($_POST['adress2']));
    } else {
        $adress2 = null;}
    

// Upload d'image
if ($image) {
    
    $valid_ext = ['jpg', 'jpeg', 'png'];
    $check_ext = strtolower(substr(strrchr($image['name'], '.'), 1));

    if (!in_array($check_ext, $valid_ext)) {
        header('Location:addAnnonce.php?error=wrongFormat');
        exit();
    }

    $imagePath = 'uploads/'.uniqid().'/'.$image['name'];

    mkdir(dirname($imagePath));

    if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
        if (!in_array($check_ext, $valid_ext)) {
            header('Location:addAnnonce.php?error=unknownError');
            exit();
        }
    }
}

// Check date
if (null !== $start && null !== $end && $start > $end) {
    header('Location:addAnnonce.php?error=dateError');
    exit();
}
try {
    // Ajout des infos dans la BDD
    $insertLogement = 'INSERT INTO logement (title, description, image, price, type, start, end, nbrplace, adress, adress2, city, cp, country, id_user) VALUES(:title, :description, :image, :price, :type, :start, :end, :nbrplace, :adress, :adress2, :city, :cp, :country, :id_user)';
    $reqInsertLogement = $connexion->prepare($insertLogement);

    $reqInsertLogement->bindValue(':title', $title, PDO::PARAM_STR);
    $reqInsertLogement->bindValue(':description', $description, PDO::PARAM_STR);
    $reqInsertLogement->bindValue(':image', $imagePath, PDO::PARAM_STR);
    $reqInsertLogement->bindValue(':price', $price);
    $reqInsertLogement->bindValue(':type', $type, PDO::PARAM_STR);
    $reqInsertLogement->bindValue(':start', $start);
    $reqInsertLogement->bindValue(':end', $end);
    $reqInsertLogement->bindValue(':nbrplace', $nbrplace);
    $reqInsertLogement->bindValue(':adress', $adress, PDO::PARAM_STR);
    $reqInsertLogement->bindValue(':adress2', $adress2, PDO::PARAM_STR);
    $reqInsertLogement->bindValue(':city', $city, PDO::PARAM_STR);
    $reqInsertLogement->bindValue(':cp', $cp, PDO::PARAM_STR);
    $reqInsertLogement->bindValue(':country', $country, PDO::PARAM_STR);
    $reqInsertLogement->bindValue(':id_user', $id);
    if ($reqInsertLogement->execute()) {
        header('Location:addAnnonce.php?success=addedAnnonce');
        exit();
    }else{
        echo 'ok';
        header('Location:addAnnonce.php?error=unknownError');
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}}
?>