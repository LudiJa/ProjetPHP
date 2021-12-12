<?php
$auth = true;
include_once "_navbar.php";
$alert = false;

if(isset($_GET["error"])){
    $alert = true;

    if($_GET['error'] == "missingInput"){
        $type = "danger";
        $message = "Tous les champs * sont requis";
    }
    if($_GET['error'] == "dateError"){
        $type = "danger";
        $message = "La date de début ne peut pas être supérieur à la date de fin de location ";
    }
    if($_GET['error'] == "unknownError"){
        $type = "warning";
        $message = "Une erreur s'est produite, réessayer ultérieurement.";
    }
    if($_GET['error'] == "tooBig"){
        $type = "warning";
        $message = "L'image est trop lourde , elle doit être < 10Mo";
    }
    if($_GET['error'] == "wrongFormat"){
        $type = "warning";
        $message = "L'image est au mauvais format : Les formats acceptés sont jpg,png,jpeg";
    }
}

if (isset($_GET['success'])) {
    $alert = true;
    if ('addedAnnonce' == $_GET['success']) {
        $type = 'success';
        $message = 'Votre annonce a été ajouté !';
    }
}
?>

<div class="hero-wrap h-1000" style="background-image: url('images/bg_3.jpg')">
    <section class="ftco-section">
        <div class="container">
            <form action="addAnnonce_post.php" method="POST" class="w-100 mx-auto p-4 mt-5 shadow rounded bg-white"
                enctype="multipart/form-data">

                <?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>
                <h2 class="text-center">Publish rental ad </h2>
                <div class="mb-3">
                    <label for="title" class="form-label">Title *</label>
                    <input type="text" class="form-control" placeholder="Studio pour jeune étudiant" name="title"
                        required>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="type" class="form-label">Type de bien *</label>
                        <div class="select-wrap one-third">
                            <select class="form-control" placeholder="Choose your type" name="type" required>
                                <option value="Chambre">Chambre</option>
                                <option value="T1">T1</option>
                                <option value="T2">T2</option>
                                <option value="T3">T3</option>
                                <option value="Maison">Maison</option>
                                <option value="Chalet">Chalet</option>
                                <option value="Auberge de jeunesse - dortoir">Auberge de jeunesse - dortoir</option>
                                <option value="Auberge de jeunesse - chambre">Auberge de jeunesse - chambre</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" rows="3" name="description" maxlength="1500" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="adress" class="form-label">Adresse *</label>
                        <input type="text" class="form-control" placeholder="Bordeaux" name="adress" required>
                    </div>

                    <div class="mb-3">
                        <label for="adress2" class="form-label">Complement</label>
                        <input type="text" class="form-control" placeholder="Bordeaux" name="adress2">
                    </div>

                    <section class="d-flex">
                        <div class="mb-3 w-50">
                            <label for="city" class="form-label">Ville *</label>
                            <input type="text" class="form-control" placeholder="Bordeaux" name="city" required>
                        </div>
                        <div class="mb-3 w-50">
                            <label for="cp" class="form-label">Code Postal *</label>
                            <input type="number" class="form-control" placeholder="33400" name="cp" required>
                        </div>
                    </section>
                    <div class="mb-3">
                        <label for="country" class="form-label">Pays *</label>
                        <input type="text" class="form-control" placeholder="France" name="country" required>
                    </div>

                    <section class="d-flex">
                        <div class="mb-3 w-50">
                            <label for="nbrplace" class="form-label">Nombre de places *</label>
                            <input type="number" class="form-control" placeholder="2" name="nbrplace" required>
                        </div>
                        <div class="mb-3 w-50">
                            <label for="price" class="form-label">Prix *</label>
                            <input type="number" class="form-control" placeholder="500" name="price" required>
                        </div>

                    </section>

                    <div class="mb-3 d-flex justify-content-between">
                        <div class="w-50">
                            <label for="start" class="form-label">Disponible à partir du partir du : *</label>
                            <input type="date" class="form-control" placeholder="01-01-2050" name="start" required>
                        </div>

                        <div class="w-50">
                            <label for="end" class="form-label">Jusqu'au : * </label>
                            <input type="date" class="form-control" placeholder="01-01-2050" name="end" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" id="image" accept=".png,.jpg,.jpeg" name="image">
                    </div>

                    <div class="d-flex justify-content-center my-4">
                        <input type="submit" value="Poster l'annonce" name="submit_register"
                            class="btn btn-primary py-3 px-5" />
                    </div>
            </form>
        </div>
        <a href="account.php" class="btn btn-primary d-block py-3 px-5 mx-auto mt-5">Back to my account</a>
</div>
</div>

<?php include "_footer.php"?>