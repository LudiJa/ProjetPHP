<?php
include_once "_navbar.php"; ?>

<body>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore
                            <br></strong> your amazing city</h1>
                    <p>Find great places to stay, eat,
                        shop, or visit from local experts</p>
                    <?php
    if (empty($_SESSION)) {
    ?>
                    <div>
                        <p><a href="login.php" class="search-submit btn btn-primary">Login </a> or <a href="login.php"
                                class="search-submit btn btn-primary">Register</a></p>

                    </div>
                    <?php }else{?>
                    <div class="block-17 my-4">
                        <form action="" method="post" class="d-block d-flex">
                            <div class="fields d-block d-flex">
                                <div class="textfield-search one-third">
                                    <input type="text" class="form-control" placeholder="Ex: food, service, hotel">
                                </div>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control" placeholder="Keyword search">
                                        <option value="">Where</option>
                                        <option value="">San Francisco USA</option>
                                        <option value="">Berlin Germany</option>
                                        <option value="">Lodon United Kingdom</option>
                                        <option value="">Paris Italy</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" class="search-submit btn btn-primary" value="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-destination">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Featured</span>
                    <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="destination-slider owl-carousel ftco-animate">
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/destination-1.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Paris, Italy</a></h3>
                                    <span class="listing">15 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/destination-2.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">San Francisco, USA</a></h3>
                                    <span class="listing">20 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/destination-3.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Lodon, UK</a></h3>
                                    <span class="listing">10 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/destination-4.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Lion, Singapore</a></h3>
                                    <span class="listing">3 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/destination-5.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Australia</a></h3>
                                    <span class="listing">3 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(images/destination-6.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Paris, Italy</a></h3>
                                    <span class="listing">3 Listing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
    </div>
    </div>
    </div>
    </div>

</body>

<?php 
include_once "_footer.php";
?>