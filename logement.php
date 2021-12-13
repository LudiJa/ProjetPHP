<?php
$auth = true;
include "_navbar.php";
include "_viewLogement.php";
include "_search.php";
include '_userDetails.php';

$logements = $connexion->query("SELECT logement.*, user.username FROM logement INNER JOIN user on id_user = user.id WHERE user.id <> {$_SESSION['id']}");
?>

<div class="hero-wrap h-50" style="background-image: url('images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
            data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="index.html">Home</a></span> <span>Hotel</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4">Find your location</h3>
                    <form action="" method="GET">
                        <div class="fields">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Rechercher" id="search"
                                    name="search">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>


                    </form>
                </div>

                <!-- content -->
            </div>
            <div class="col-lg-9">
                <?php 
    if(!empty($search)){
        echo "<h3>Résultats de la recherche : </h3>";
        if (empty($logements)) {
            echo 'Aucun résultat trouvé.';
        }    
        echo "<a href='logement.php'> Retourner aux logements</a>";
    }
    ?><div class="row">
                    <?php
        foreach($logements as $logement){
        ?>
                    <div class="col-md-4 ">
                        <div class="destination">
                            <img src="<?php echo $logement['image'];?>" class="d-block img-fluid"
                                style="object-fit:cover" />
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><?php echo $logement['title']; ?></h3>

                                    </div>
                                    <div class="two">
                                        <span class="price per-price"><?php echo $logement['price']; ?> €</span>
                                    </div>
                                </div>
                                <p><?php echo $logement['type']; ?></p>
                                <hr>
                                <p class="bottom-area d-flex flex-column">
                                    <span><i class="icon-map-o"> </i><?php echo $logement['city']; ?>,
                                        <?php echo $logement['country']; ?></span>
                                    <?php if ($logement['avaibility'] == 1 ) { ?><span class="ml-auto"><a
                                            href="logementDetails.php?id=<?php echo $logement['id']; ?>">Book
                                            Now</a></span>
                                    <?php  }else{ ?> <span class="ml-auto bg-secondary text-white rounded">Not
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
    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>


<?php
    include_once "_footer.php";
    ?>