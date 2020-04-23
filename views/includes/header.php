<!-- ce fichier contient le header du site -->
<header>
    <nav class="navbar mb-3">
        <?php if($_SESSION['id'] != null){ 
            $user = new Users($_SESSION['id']);
        ?>
            <a href='profil' class='d-flex align-items-center'>
                <img src="assets/images/avatar/<?= $user->avatar?>" class="img-fluid img-profil mb-3" alt="avatar">
                <p class='ml-4'><?= $user->pseudo ?></p>
            </a>
            <a href="ask">
                <button class="btn-edit mb-3">Poser une question</button>
            </a>
            <?php if($user != null){ ?>
                <a href="logout">
                    <button class="btn-edit mb-3">Déconnection</button>
                </a>
            <?php } else{} ?>
        <?php } else{ }?>
        <a href="<?= $page="forum" ?>">
            <button class="btn-edit mb-3">Liste des forums</button>
        </a>
        <a href="<?= $page="login" ?>">
            <button class="btn-edit mb-3">Se connecter</button>
        </a>
    </nav>
</header>