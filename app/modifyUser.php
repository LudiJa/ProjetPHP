<?php

$auth = true;
include_once '_navbar.php';
include_once '_userDetails.php';

?>

<section class="d-flex justify-content-between align-items-center">
    <form action="modifyUser_post.php" method="post" class="w-100 mx-auto p-5 mt-5 shadow rounded bg-white">
        <div class="w-50">
            <div class="mb-3">
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $user['lastname']; ?>">
            </div>

            <div class="mb-3">
                <label for="firstname" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $user['firstname']; ?>">
            </div>

            <div class="mb-3">
                <label for="adress" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adress" value="<?php echo $user['adress']; ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>">
            </div>

            <div class="d-flex justify-content-center my-4">
                <button type="submit" class="btn btn-primary py-3 px-5">Modifier</button>
            </div>
        </div>
    </form>
</section>


<?php

include_once '_footer.php';
?>