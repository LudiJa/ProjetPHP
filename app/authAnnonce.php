<?php
$auth = true;
include_once "_navbar.php";
include "_viewLogement.php";
include '_userDetails.php';

$logements = $connexion->query("SELECT logement.*, user.username FROM logement INNER JOIN user on id_user = user.id WHERE user.id = {$_SESSION['id']}");
?>

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg')">
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <h2 class="text-center">Mon compte</h2>

                <section class="ftco-section ftco-degree-bg">
                    <div class="container">
                        <div class="row">

                            <!-- content -->
                            <div class="col-lg-9">
                                <div class="row">
                                    <?php
        foreach($logements as $logement){
        ?>
                                    <div class="col-md-4 ftco-animate">
                                        <div class="destination">
                                            <img src="<?php echo $logement['image'];?>" class="d-block w-100 img-fluid"
                                                style="object-fit:contain; height:50%;" />
                                            <div class="text p-3">
                                                <div class="d-flex">
                                                    <div class="one">
                                                        <h3><?php echo $logement['title']; ?></h3>

                                                    </div>
                                                    <div class="two">
                                                        <span class="price per-price"><?php echo $logement['price']; ?>
                                                            €</span>
                                                    </div>
                                                </div>
                                                <p><?php echo $logement['type']; ?></p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o">
                                                        </i><?php echo $logement['city']; ?>,
                                                        <?php echo $logement['country']; ?></span>
                                                    <?php if ($logement['avaibility'] == 1 ) { ?><span
                                                        class="ml-auto"><a
                                                            href="logementDetails.php?id=<?php echo $logement['id']; ?>">Book
                                                            Now</a></span>
                                                    <?php  }else{ ?> <span class="ml-auto">Not
                                                        available</span>
                                                    <?php } ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>


                        </div>
                    </div>
                    <a href="page-annonces.php" class="btn btn-primary d-block py-3 px-5 mx-auto">Retour aux
                        annonces</a>
                </section>
            </div>
        </div>
    </section>
</div>


<?php include "_footer.php"?>