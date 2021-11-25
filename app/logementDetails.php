<?php
$auth = true;
include "_navbar.php";
include "_viewDetails.php";
?>


<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
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
                            <form class="fields">
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
                                    <div class="form-group">
                                        <input type="submit" value="Booking" class="btn btn-primary py-3">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">Related Location</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="destination">
                                    <a href="hotel-single.html" class="img img-2"
                                        style="background-image: url(images/hotel-1.jpg);"></a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                <p class="rate">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i>
                                                    <span>8 Rating</span>
                                                </p>
                                            </div>
                                            <div class="two">
                                                <span class="price per-price">$40<br><small>/night</small></span>
                                            </div>
                                        </div>
                                        <p>Far far away, behind the word mountains, far from the countries</p>
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span><i class="icon-map-o"></i> Miami, Fl</span>
                                            <span class="ml-auto"><a href="#">Book Now</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div> <!-- .col-md-8 -->
    </div>
    </div>
</section> <!-- .section -->




<?php
    include_once "_footer.php";
    ?>