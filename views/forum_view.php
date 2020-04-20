
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
                        <a href="<?= $page = 'tchat?id='.$value['user_id'].'&title='.$value['title'].'&postId='.$value['id']  ?>">
                            <span><?= $value['title'] ?></span>
                        </a>
                        <p><?= $value['content'] ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </section>
        <?php include_once 'views/includes/footer.php' ?>
    </div>
</body>
