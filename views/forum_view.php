
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
                        <a href="<?= $page = 'tchat?id='.$value['id'] ?>">
                            <span class="title"><?= $value['title'] ?></span>
                        </a>
                        <p><?= $value['content'] ?></p>
                        <div class="text-right">
                            <small>Publié le <?= date_format(date_create( $value['date']),"d/m/Y à H:i") ?> Par  <span class="pseudo"><?= $value['pseudo'] ?></span></small>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </section>
        <?php include_once 'views/includes/footer.php' ?>
    </div>
</body>
