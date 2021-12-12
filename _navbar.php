<?php
require "includes/config.php";
require "includes/connect.php";
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Stuliday</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Stuliday.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>


                    <?php
                        if(!empty($_SESSION)){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="anonce" href="logement.php">Annonces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="acount" href="account.php">Mon compte</a>
                    </li>
                    <li class="nav-item cta">
                        <a class="nav-link" aria-current="logout" href="?logout">Logout</a>
                    </li>
                    <?php }else{?>
                    <li class="nav-item cta"><a href="login.php" class="nav-link"><span>Login/Register</span></a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>