<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <?php foreach ($articles as $article) { ?>
                    <div class="col-3">
                        <h1><?= $article->getArticle() ?></h1>
                    </div>
                <?php } ?>
                <div class="col-3">
                    <?= ($formArticle->create()) ?>
                </div>
            </div>
        </div>
    </div>
</div>