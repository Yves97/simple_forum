
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= $page ?></title>
</head>
<body>
    <div class="main-card d-flex justify-content-center align-items-center">
        <div class="box-form">
            <hr class="divider">
            <h3>Register</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <input class="input-edit" type="text" name="pseudo" placeholder="Pseudo" autocomplete="off">
                <input type="email" name="email" class="input-edit"  placeholder="Email" autocomplete="off">
                <input class="input-edit" type="password" name="password"  placeholder="Password">
                <div class="input-group">
                    <label for="avatar" class="mb-2">Ajouter une photo</label>
                    <input type="file" name="avatar" id="avatar" class="input-edit w-100 mb-3">
                </div>

                <button type="submit" class="btn-edit" name="btnRegister">S'inscrire</button>
                <span>J'ai déja un compte me <a href="<?= $page = 'login' ?>">Connecter</a></span>
            </form>
            <?php if(isset($error)): ?>
                <?= '<p class="text-danger mt-3 text-right">'.$error.'</p>' ?>
            <?php endif ?>
        </div>
    </div>
</body>
