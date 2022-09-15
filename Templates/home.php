<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <?php foreach ($articles as $article) { ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $article->getTitre() ?></h5>
                                <p class="card-text"><?= $article->getInfoSport() ?></p>
                                <button class="btn btn-primary"><?= $article->getJournaliste() ?></button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>