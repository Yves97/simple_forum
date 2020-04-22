
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
                    <div class="box-main-question">
                        <?php foreach($userPost as $key => $value): ?>
                            <span class="title"><?= $value['title'] ?></span>
                            <p><?= $value['content'] ?></p>
                            <div class="text-right">
                                <small class="text-right">Publié le <?= date_format(date_create( $value['date']),"d/m/Y H:i") ?> Par  <span class="pseudo"><?= $value['pseudo'] ?></span></small>
                            </div>
                            <?php endforeach ?>
                    </div>

                    <?php foreach($resultComments as $key => $value): ?>
                        <div class="box-response mb-5">
                            <div class="user d-flex">
                                <img src="assets/images/avatar/<?= $value['avatar'] ?>" alt="" class="mr-3">
                                <div>
                                    <p><?= $value['pseudo'] ?></p>
                                </div>
                            </div>
                            <p><?= $value['response'] ?></p>
                            <div class="text-right">
                                <small class="text-right">Répondu le <?= date_format(date_create( $value['date_add']),"d/m/Y H:i") ?></small>
                            </div>
                        </div>
                    <?php endforeach ?>
                <div class="response">
                    <hr class="divider mt-5">
                    <h3>Votre reponse ici</h3>
                    <?php if(isset($error)): ?>
                        <?= '<p class="text-danger">'.$error.'</p>' ?>
                    <?php endif ?>
                    <form action="" method="POST">
                        <textarea name="response" id="" cols="30" rows="10"></textarea>
                        <div>
                        <?php if($_SESSION['id'] != null){ ?>
                        <?= "<button type='submit' class='btn-edit' name='btnResponse'>Envoyer</button>";}  else{ ?>
                        <?=  "<a href='login' class='btn-edit'>Envoyer</a>"; }?>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php #include_once 'views/includes/footer.php' ?>
    </div>
</body>
