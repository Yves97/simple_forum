
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="input-group">
                                    <label for="pseudo">Pseudo</label>
                                    <input class="input-edit" type="text" name="pseudo" id="pseudo" value="<?= $user->pseudo ?>">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="input-group">
                                    <label for="pseudo">Email</label>
                                    <input class="input-edit" type="text" name="email" id="email" value="<?= $user->email ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="password">Mot de passe</label>
                            <input class="input-edit" type="text" name="password" id="password" value="<?= $user->password ?>">
                        </div>
                        <div class="input-group mb-5">
                            <label for="avatar">Photo de profil</label>
                            <input class="input-edit" type="file" name="avatar" id="avatar" value="<?= $user->avatar ?>">
                        </div>
                        <button type="submit" class="btn-edit" name="btnUpdate">Modifier</button>
                    </form>
                    <?php if(isset($error)): ?>
                        <?= '<p class="text-danger mt-3">'.$error.'</p>' ?>
                    <?php endif ?>
                </div>
                
            </div>
        </section>

        <?php include_once 'views/includes/footer.php' ?>
    </div>
</body>
