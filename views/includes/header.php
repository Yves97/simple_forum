<!-- ce fichier contient le header du site -->
<header>
    <nav class="navbar mb-3">
        <?php if($_SESSION['id'] != null){ ?>
        <?php 
            $user = new Users($_SESSION['id']);
            echo "<a href='profil' class='d-flex align-items-center'>";
                echo '<img src="assets/images/photo.png" class="img-fluid img-profil mb-3" alt="photo de profile">';
                echo "<p class='ml-4'>".$user->pseudo."</p>";
            echo '</a>';
            echo '<a href="logout">';
            echo '<button class="btn-edit mb-3">Déconnection</button>';
            echo '</a>';
        } else{ }?>
        
        <a href="<?= $page="forum" ?>">
            <button class="btn-edit mb-3">Liste des forums</button>
        </a>
    </nav>
</header>