<?php
try {
    $search = null;

    $logements = $connexion->query('SELECT * FROM logement')->fetchAll();

    if (isset($_GET['search'])) {
        $search = htmlspecialchars(trim($_GET['search']));
        $sql = 'SELECT * FROM logement WHERE title LIKE :search OR type LIKE :search OR country LIKE :search OR city LIKE :search';
        $reqLines = $connexion->prepare($sql);
        $reqLines->bindValue(':search', "%$search%");
        $reqLines->execute();
        $logements = $reqLines->fetchAll();
    }
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>