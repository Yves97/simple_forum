
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= $page ?></title>
</head>
<body>
    <div class="main-card">
        <?php  include_once 'views/includes/header.php' ?>
        <section class="section-salon">
            <div class="container">
                <hr class="divider">
                <h3>Profil</h3>
                <div class="profil-banner d-flex align-items-center one">
                    <img src="assets/images/photo.png" alt="" class="img-fluid mr-5">
                    <div>
                        <p>Yves Amani</p>
                        <p>yveskouadio111@yahoo.fr</p>
                        <p>password</p>
                    </div>
                </div>
                <a href="#">
                    <div class="text-right mt-4">
                        <button class="btn-edit">Modifier</button>
                    </div>
                </a>
            </div>
        </section>

        <?php include_once 'views/includes/footer.php' ?>
    </div>
</body>
