
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
                        <?php foreach($resultPost as $key => $value): ?>
                            <span><?= $value['title'] ?></span>
                            <p><?= $value['content'] ?></p>
                            <p class="text-right">Publié le <?= date_format(date_create( $value['date']),"d/m/Y H:i") ?></p>
                        <?php endforeach ?>
                    </div>

                    <?php foreach($resultComments as $key => $value): ?>
                        <div class="box-response mb-5">
                            <div class="user d-flex">
                                <img src="assets/images/photo.png" alt="" class="mr-3">
                                <div>
                                    <p><?= $value['pseudo'] ?></p>
                                </div>
                            </div>
                            <p><?= $value['response'] ?></p>
                        </div>
                    <?php endforeach ?>
                <div class="response">
                    <hr class="divider mt-5">
                    <h3>Votre reponse ici</h3>
                    <form action="">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <div>
                            <button type="submit" class="btn-edit" name="btnResponse">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php #include_once 'views/includes/footer.php' ?>
    </div>
</body>
