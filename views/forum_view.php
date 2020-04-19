
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
                <?php foreach($allPost as $key => $value): ?>
                    <div class="box-main-question">
                        <a href="<?= $page = 'tchat?id='.$value['user_id'].'&title='.$value['title']  ?>">
                            <span><?= $value['title'] ?></span>
                        </a>
                        <p><?= $value['content'] ?></p>
                    </div>
                <?php endforeach ?>
                    <!-- <div class="box-response mb-5">
                        <div class="user d-flex">
                            <img src="assets/images/photo.png" alt="" class="mr-3">
                            <div>
                                <p>N'Goran Koffi</p>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat laboriosam fuga itaque iure quo odio quis nostrum, sit praesentium maiores dolorem nam vitae! Soluta numquam deserunt nostrum qui repellendus aspernatur?</p>
                    </div> -->
                <!-- <div class="response">
                    <hr class="divider mt-5">
                    <h3>Votre reponse ici</h3>
                    <form action="">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <div>
                            <button type="submit" class="btn-edit">Envoyer</button>
                        </div>
                    </form>
                </div> -->
            </div>
        </section>

        <?php #include_once 'views/includes/footer.php' ?>
    </div>
</body>