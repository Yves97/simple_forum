
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
                <h3>Modification Profil</h3>
                <div class="profil-banner mt-5">
                    <form action="">
                        <div class="row mb-3">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="input-group">
                                    <label for="pseudo">Pseudo</label>
                                    <input class="input-edit" type="text" name="" id="pseudo" placeholder="amani yves">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="input-group">
                                    <label for="pseudo">Mot de passe</label>
                                    <input class="input-edit" type="text" name="" id="pseudo" placeholder="12047">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-5">
                            <label for="pseudo">Email</label>
                            <input class="input-edit" type="text" name="" id="email" placeholder="yveskouadio111@yahoo.fr">
                        </div>
                        <button type="submit" class="btn-edit">Modifier</button>
                    </form>
                </div>
                
            </div>
        </section>

        <?php include_once 'views/includes/footer.php' ?>
    </div>
</body>
