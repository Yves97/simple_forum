
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
            <h3>Login</h3>
            <form action="" method="POST">
                <input name="email" class="input-edit" type="text" placeholder="Email">
                <input name="password" class="input-edit" type="password" id="" placeholder="Password">
                <button type="submit" class="btn-edit mr-2" name="btnLogin">Se connecter</button>
                <span>Je n'ai pas de compte <a href="<?= $page = 'register' ?>">M'inscrire</a></span>
                <?php if(isset($error)){
                    echo '<p class="text-danger mt-3">'.$error.'</p>';
                } ?>
            </form>
        </div>
    </div>
</body>
