<!-- ce fichier contient le header du site -->
<header>
    <nav class="navbar mb-3">
        <?php if($_SESSION['id'] != null){ 
            $user = new Users($_SESSION['id']);
        ?>
            <a href='profil' class='d-flex align-items-center order-1'>
                <img src="assets/images/avatar/<?= $user->avatar?>" class="img-fluid img-profil mb-3" alt="avatar">
                <p class='ml-4 secondary-color'><?= $user->pseudo ?></p>
            </a>
            <a href="ask" class="order-3">
                <button class="btn-edit mb-3">Poser une question</button>
            </a>
            <a href="dashboard" class="order-2">
                <button class="btn-edit mb-3">Mon espace admin</button>
            </a>
            <?php if($user != null){ ?>
                <a href="logout" class="order-5">
                    <button class="btn-edit mb-3">Déconnection</button>
                </a>
            <?php } else{} ?>
        <?php } else{ }?>
        <a href="<?= $page="forum" ?>" class="order-3">
            <button class="btn-edit mb-3">Liste des forums</button>
        </a>
        <a href="<?= $page="login" ?>" class="order-4">
            <button class="btn-edit mb-3">Se connecter</button>
        </a>
    </nav>
</header>