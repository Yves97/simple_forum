<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= $page ?></title>
</head>
<body>
    <div class="main-card p-4">
        <?php include_once 'views/includes/header.php' ?>
        <hr class="divider">
        <h3>Forum Admin</h3>
        <p class="mb-5">Utilisateur : <span class="secondary-color"><?= $user->pseudo ?></span></p>
        <h3 class="title-post display-3 mb-5">Liste de mes posts</h3>
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Titres</th>
                    <th>Date d'ajout</th>
                    <!-- <th>Nombre d'intervenants</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($post as $key => $value): ?>
                    <tr>
                        <td><?= $value['title'] ?></td>
                        <td><?= date_format(date_create( $value['date']),"d/m/Y à H:i") ?></td>
                        <!-- <td>
                            <span class="badge bg-secondary-color text-white">3</span>
                        </td> -->
                        <td>
                            <button class="btn-edit bg-danger text-white" data-toggle="modal" data-target='#<?= $value['id'] ?>'>Supprimer</button>
                            <!-- Modal -->
                            <div class="modal fade" id="<?= $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Etes vous sur de vouloir supprimer ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?= $value['title'] ?>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="delete-post?postid=<?= $value['id'] ?>">
                                                <button type="button" class="btn btn-success">Oui</button>
                                            </a>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Non</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="#">
                                <button class="btn-edit">Modifier</button>
                            </a> -->
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            
        </table>
    </div>
</body>
