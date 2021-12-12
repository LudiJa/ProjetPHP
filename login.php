<?php
include_once "_navbar.php"; ?>

<body>

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg')">
        <div class="overlay"></div>
        <section class="ftco-section contact-section ftco-degree-bg">
            <p>username : admin </br> mdp : admin123</p>
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-6 pr-md-5">
                        <h2 class="h4">Login</h2>
                        <form action="login_post.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Your Username" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password"
                                    placeholder="Your Password" />
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Login" name="submit_login"
                                    class="btn btn-primary py-3 px-5" />
                            </div>
                        </form>
                    </div>

                    <!-- register -->
                    <?php 

if(isset($_GET["error"])){
    $alert = true;

    if($_GET['error'] == "missingInput"){
        $type = "danger";
        $message = "Tous les champs * sont requis";
    }
}

?>

                    <div class="col-md-6 pr-md-5">
                        <h2 class="h4">Register</h2>
                        <form action="register_post.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Your Userame"
                                    require />
                            </div>
                            <section class="d-flex">
                                <div class="mb-3 w-50 me-2">
                                    <input type="text" class="form-control" placeholder="Your Firstname"
                                        name="firstname" required>
                                </div>
                                <div class="mb-3 w-50">
                                    <input type="text" class="form-control" placeholder="Your Lastname" name="lastname"
                                        required>
                                </div>
                            </section>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Your Password"
                                    require />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your email"
                                    require />
                            </div>
                            <div class="form-group">
                                <input type="adress" class="form-control" name="adress" placeholder="Your adress"
                                    require />
                            </div>
                            <section class="d-flex">
                                <div class="mb-3 w-50 me-2">
                                    <input type="text" class="form-control" placeholder="City" name="city" required>
                                </div>
                                <div class="mb-3 w-50">
                                    <input type="text" class="form-control" placeholder="Postal Code" name="cp"
                                        required>
                                </div>
                            </section>
                            <div class="form-group">
                                <input type="country" class="form-control" name="country" placeholder="Your country"
                                    require />
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Register" name="submit_register"
                                    class="btn btn-primary py-3 px-5" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    </div>
</body>
<?php
include_once "_footer.php"; ?>