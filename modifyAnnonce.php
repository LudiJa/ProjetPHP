<?php
$auth = true;
include_once '_navbar.php';

include_once '_viewDetails.php';

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
        $message = 'Votre annonce a été modifié !';
    }
}
?>

<div class="hero-wrap h-1000" style="background-image: url('images/bg_3.jpg')">
    <section class="ftco-section">
        <div class="container">
            <div class="container shadow rounded bg-white p-4 mt-5">
                <form action="modifyAnnonce_post.php" method="post" class="w-100 mx-auto" enctype="multipart/form-data">
                    <h2 class="text-center">Modify rental ad</h2>

                    <div>
                        <form action="delete_post.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $logement['id']; ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>

                    <img src="<?php echo $logement['image']; ?>" alt="rental image" class="img-fluid mb-3">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" class="form-control" value="<?php echo $logement['title'];?>" name="title">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="type" class="form-label">Type de bien *</label>
                            <div class="select-wrap one-third">
                                <select class="form-control" name="type">
                                    <option value="<?php echo $logement['type'];?>"><?php echo $logement['type'];?>
                                    </option>
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
                            <textarea class="form-control" rows="3" name="description"
                                maxlength="1500"><?php echo $logement['description'];?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="adress" class="form-label">Adresse *</label>
                            <input type="text" class="form-control" value="<?php echo $logement['adress'];?>"
                                name="adress">
                        </div>

                        <div class="mb-3">
                            <label for="adress2" class="form-label">Complement</label>
                            <input type="text" class="form-control" value="<?php echo $logement['adress2'];?>"
                                name="adress2">
                        </div>

                        <section class="d-flex">
                            <div class="mb-3 w-50">
                                <label for="city" class="form-label">Ville *</label>
                                <input type="text" class="form-control" value="<?php echo $logement['city'];?>"
                                    name="city">
                            </div>
                            <div class="mb-3 w-50">
                                <label for="cp" class="form-label">Code Postal *</label>
                                <input type="number" class="form-control" value="<?php echo $logement['cp'];?>"
                                    name="cp">
                            </div>
                        </section>
                        <div class="mb-3">
                            <label for="country" class="form-label">Pays *</label>
                            <input type="text" class="form-control" value="<?php echo $logement['country'];?>"
                                name="country">
                        </div>

                        <section class="d-flex">
                            <div class="mb-3 w-50">
                                <label for="nbrplace" class="form-label">Nombre de places *</label>
                                <input type="number" class="form-control" value="<?php echo $logement['nbrplace'];?>"
                                    name="nbrplace">
                            </div>
                            <div class="mb-3 w-50">
                                <label for="price" class="form-label">Prix *</label>
                                <input type="number" class="form-control" value="<?php echo $logement['price'];?>"
                                    name="price">
                            </div>

                        </section>

                        <div class="mb-3 d-flex justify-content-between">
                            <div class="w-50">
                                <label for="start" class="form-label">Disponible à partir du partir du : *</label>
                                <input type="date" class="form-control" value="<?php echo $logement['start'];?>"
                                    name="start">
                            </div>

                            <div class="w-50">
                                <label for="end" class="form-label">Jusqu'au : * </label>
                                <input type="date" class="form-control" value="<?php echo $logement['end'];?>"
                                    name="end">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image" accept=".png,.jpg,.jpeg" name="image">
                            <input class="form-control" type="hidden" id="formFile" name="image_path"
                                value="<?php echo $logement['image']; ?>">
                        </div>

                        <div class="d-flex justify-content-center my-4">
                            <input type="hidden" name="id" value="<?php echo $logement['id']; ?>">
                            <button type="submit" class="btn btn-primary py-3 px-5">Edit rental ad</button>
                        </div>
                </form>
            </div>
        </div>
        <a href="authAnnonce.php" class="btn btn-primary d-block py-3 px-5 mx-auto mt-5">Back to my rental ad</a>
</div>
</div>

<?php include "_footer.php"?>