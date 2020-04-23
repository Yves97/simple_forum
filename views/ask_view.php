
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
            <h3>Poser votre question</h3>
            <form action="" method="POST">
                <input class="input-edit" type="text" name="title" placeholder="Ecrire votre titre ici" autocomplete="off">
                <textarea type="text" name="content" class="input-edit" col="10" rows="10" placeholder="Expliquez votre code ici" autocomplete="off"></textarea>                
                <button type="submit" class="btn-edit" name="btnPost">Poster</button>
                <span>Retour a <a href="<?= $page = 'forum' ?>">l'accueil</a></span>
            </form>
            <?php #if(isset($error)): ?>
                <?= '<p class="text-danger mt-3 text-right">'.$error.'</p>' ?>
            <?php #endif ?>
        </div>
    </div>
</body>
