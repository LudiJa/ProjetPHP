<?php
$auth = true;
include "_navbar.php";
include "_viewDetails.php";
?>


<div id="hero" class="hero-wrap" style="background-image: url('images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" style="height: 40vh"
            data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2 mb-3 bread"><a href="index.php">Home</a></span> <span class="mr-2"><a
                            href="logement.php">Logement</a></span> <span>Logement details</span></p>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <img src="<?php echo $logement['image'];?>" />
                    </div>
                    <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                        <h2><?php echo $logement['title']; ?></h2>
                        <p>
                            <span class="loc"><a href="#"><i class="icon-map"></i> <?php echo $logement['adress']; ?>
                                    <?php echo $logement['adress2']; ?> ,
                                    <?php echo $logement['cp']; ?> <?php echo $logement['city']; ?>,
                                    <?php echo $logement['country']; ?></a></span>

                        </p><span>Available from <?php echo $logement['start']; ?> to
                            <?php echo $logement['end']; ?></span>

                        <p class="mt-5 mb-5"><?php echo $logement['description']; ?></p>
                        <div class="d-md-flex mt-5 mb-5">
                            <p><?php echo $logement['nbrplace']; ?> places disponibles !</p>
                            <p class="ml-md-5">
                                <?php echo $logement['price']; ?> € par personne</p>
                        </div>

                        <div class="col-md-12 ftco-animate mb-5 mt-4">
                            <h4 class="mb-5">Want to booking ? </h4>
                            <form action="booking_post.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="select-wrap one-third">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control" placeholder="Guest">
                                                    <option value="0">Number of guest</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 ">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary py-3">Booking</button>
                                    </div>
                                </div>
                            </form>
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