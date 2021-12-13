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
                    <div>
                        <p><a href="logement.php" class="search-submit btn btn-primary">View our rental ad ! </a></p>

                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

</body>

<?php 
include_once "_footer.php";
?>