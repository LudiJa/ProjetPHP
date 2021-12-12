<?php

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location:index.php');
}

if (empty($_SESSION)) {
    if (isset($auth)) {
        header('Location:login.php?auth');
        exit();
    }
    $user = null;
} else {
    $user = $_SESSION['user'];
}