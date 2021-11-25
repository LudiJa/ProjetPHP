<?php
include_once "_navbar.php";

?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg')">
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <form action="#" class="w-100 mx-auto p-5 mt-5 shadow rounded bg-white">
                    <h2 class="text-center">Mon compte</h2>

                    <section class="d-flex justify-content-between align-items-center">
                        <div class="w-50">
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="lastname">
                            </div>

                            <div class="mb-3">
                                <label for="firstname" class="form-label">Prenom</label>
                                <input type="text" class="form-control" name="firstname">
                            </div>

                            <div class="mb-3">
                                <label for="adress" class="form-label">Adresse</label>
                                <input type="text" class="form-control" name="adress">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="d-flex justify-content-center my-4">
                                <a href="modifyUser.php" class="btn btn-primary py-3 px-5">Modifier</a>
                            </div>
                        </div>

                        <div class="w-25 p-2">
                            <div class="d-flex justify-content-end mb-5">
                                <a href="addAnnonce.php"
                                    class="btn btn-primary py-3 px-5 text-decoration-none rounded">Publier
                                    une
                                    annonce</a>
                            </div>
                            <div class="d-flex justify-content-end mb-5">
                                <a href="authAnnonce.php"
                                    class="btn btn-primary py-3 px-5 text-decoration-none rounded">Voir mes
                                    annonces</a>
                            </div>
                            <div class="d-flex justify-content-end mb-5">
                                <a href="#" class="btn btn-primary py-3 px-5 text-decoration-none rounded">Consulter
                                    mes
                                    réservations</a>
                            </div>
                        </div>
                    </section>

                    <a href="page-annonces.php" class="btn btn-primary d-block py-3 px-5 mx-auto">Retour aux
                        annonces</a>
                </form>
            </div>
        </div>
    </section>
</div>

</body>
<?php include "_footer.php"?>