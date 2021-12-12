<?php
$auth = true;
include_once "_navbar.php";
include_once "_userDetails.php"

?>
<div class="hero-wrap h-1000" style="background-image: url('images/bg_3.jpg')">
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <form action="modifyUser_post.php" method="post" class="w-100 mx-auto p-5 my-5 shadow rounded bg-white">
                    <h2 class="text-center">My account</h2>

                    <section class="d-flex justify-content-between align-items-center">
                        <div class="w-50">

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username"
                                    value="<?php echo $user['username'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="lastname" class="form-label">Lastname</label>
                                <input type="text" class="form-control" name="lastname"
                                    value="<?php echo $user['lastname'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" class="form-control" name="firstname"
                                    value="<?php echo $user['firstname'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="adress" class="form-label">Adress</label>
                                <input type="text" class="form-control" name="adress"
                                    value="<?php echo $user['adress'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" value="<?php echo $user['city'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" name="country"
                                    value="<?php echo $user['country'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    value="<?php echo $user['email'];?>">
                            </div>

                            <div class="d-flex justify-content-center my-4">
                                <button type="submit" class="btn btn-primary py-3 px-5">Modify</button>
                            </div>
                        </div>
                </form>

                <div class="w-25 p-2">
                    <div class="d-flex justify-content-end mb-5">
                        <a href="addAnnonce.php" class="btn btn-primary py-3 px-5 text-decoration-none rounded">Publier
                            une
                            annonce</a>
                    </div>
                    <div class="d-flex justify-content-end mb-5">
                        <a href="authAnnonce.php" class="btn btn-primary py-3 px-5 text-decoration-none rounded">Voir
                            mes
                            annonces</a>
                    </div>
                    <div class="d-flex justify-content-end mb-5">
                        <a href="#" class="btn btn-primary py-3 px-5 text-decoration-none rounded">Consulter
                            mes
                            réservations</a>
                    </div>
                </div>
    </section>

    <a href="logement.php" class="btn btn-primary d-block py-3 px-5 mx-auto">Retour aux
        annonces</a>
</div>
</div>
</section>
</div>
<?php include "_footer.php"?>