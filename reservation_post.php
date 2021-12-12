<?php

$id = $_GET['id'];

$reqReservation = 'UPDATE location SET reserved = :reserved WHERE id =:id';
$editReservation = $connexion->prepare($reqReservation);
$editReservation->binvalue(':reserved', true);
$editReservation->binvalue(':id', $id);

$editReservation->execute();
?>

<!-- dans le détail de l'annonce
<?php
if($logement['reserved']) {
echo '<button>Reservé</button>'
    } else { ?>
<form action="reservation_post.php" method="get">
    <input type="hidden" name="id" value="<?php echo $logement['id']; ?>">
    <button type="submit">Réserver</button>
</form>
} -->