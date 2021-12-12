<?php

$auth = true;
require 'includes/config.php';
require 'includes/connect.php';

$getId = explode('=', $_SERVER['HTTP_REFERER'])[1];

if (!($getId == $_POST['id'])) {
    header("Location:modifyAnnonce.php?id=$getId&error=malformedInput");
    exit();
}

    $title = htmlspecialchars(trim($_POST['title']));
    $price = htmlspecialchars(floatval($_POST['price']));
    $type = htmlspecialchars(trim($_POST['type']));
    $start = htmlspecialchars(trim($_POST['start']));
    $end = htmlspecialchars(trim($_POST['end']));
    $nbrplace = htmlspecialchars(floatval($_POST['nbrplace']));
    $adress = htmlspecialchars(trim($_POST['adress']));
    $adress2 = htmlspecialchars(trim($_POST['adress2']));
    $city = htmlspecialchars(trim($_POST['city']));
    $cp = htmlspecialchars(trim($_POST['cp']));
    $country = htmlspecialchars(trim($_POST['country']));
    $image_path = htmlspecialchars(trim($_POST['image_path']));
    $id = $_POST['id'];

    if (null !== $date_start && null !== $date_end && $date_end < $date_start) {
        header('Location:addAnnonce.php?error=pastAvailablity');
        exit();
    }

    if (empty($_FILES['image']['name'])) {
        $imageToUpload = $image_path;
        $image = null;
    } else {
        $image = $_FILES['image'];
    }

    if ($image) {
        if ('uploads/wait.jpg' != $image_path) {
            unlink($image_path);
            rmdir(dirname($image_path));
        }
        $valid_ext = ['jpg', 'jpeg', 'png'];
        $check_ext = strtolower(substr(strrchr($image['name'], '.'), 1));

        if (!in_array($check_ext, $valid_ext)) {
            header('Location:addAnnonce.php?error=wrongFormat');
            exit();
        }

        $imageToUpload = 'uploads/'.uniqid().'/'.$image['name'];

        mkdir(dirname($imageToUpload));

        if (!move_uploaded_file($image['tmp_name'], $imageToUpload)) {
            if (!in_array($check_ext, $valid_ext)) {
                header('Location:addAnnonce.php?error=unknownError');
                exit();
            }
        }
    }


    $modifyAnnonce = 'UPDATE logement SET title=:title, description=:description, image=:image, price=:price, type=:type, start=:start, end=:end, nbrplace=:nbrplace, adress=:adress, adress2=:adress2, city=:city, cp=:cp, country=:country WHERE id=:id';
    $reqModifyAnnonce = $connexion->prepare($modifyAnnonce);
    $reqModifyAnnonce->bindValue(':title', $title, PDO::PARAM_STR);
    $reqModifyAnnonce->bindValue(':description', $description, PDO::PARAM_STR);
    $reqModifyAnnonce->bindValue(':image', $imageToUpload, PDO::PARAM_STR);
    $reqModifyAnnonce->bindValue(':price', $price);
    $reqModifyAnnonce->bindValue(':type', $type, PDO::PARAM_STR);
    $reqModifyAnnonce->bindValue(':start', $start);
    $reqModifyAnnonce->bindValue(':end', $end);
    $reqModifyAnnonce->bindValue(':nbrplace', $nbrplace);
    $reqModifyAnnonce->bindValue(':adress', $adress, PDO::PARAM_STR);
    $reqModifyAnnonce->bindValue(':adress2', $adress2, PDO::PARAM_STR);
    $reqModifyAnnonce->bindValue(':city', $city, PDO::PARAM_STR);
    $reqModifyAnnonce->bindValue(':cp', $cp);
    $reqModifyAnnonce->bindValue(':country', $country, PDO::PARAM_STR);
    $reqModifyAnnonce->bindValue(':id', $id);
    
if ($reqModifyAnnonce->execute()) {
    header('Location:authAnnonce.php?success=modifyAnnonce');
    exit();
} else {
    header("Location:authAnnonce.php?id=$getId&error=unknownError");
    exit();
}