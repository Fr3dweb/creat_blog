<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">InfoSport</th>
                        <th scope="col">Journaliste</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <th scope="row"><?= $article->getIdArticle() ?></th>
                            <td><?= $article->getTitre() ?></td>
                            <td><?= $article->getInfoSport() ?></td>
                            <td><?= $article->getJournaliste() ?></td>
                            <td><a href="<?= URL_ROOT . 'admin/article/' . $article->getIdArticle() ?>" class="btn btn-primary">VOIR</a></td>
                        </tr>
                        <tr></tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="<?= URL_ROOT . 'admin/article/add' ?>" class="btn btn-primary">Ajouter</a>
        </div>
    </div>
</div>