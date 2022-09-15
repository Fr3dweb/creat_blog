<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Service\View;
use App\Form\FormArticle;


class HomeController


{
    use View;

    private ArticleRepository $articlesRepository;

    public function __construct()
    {
        $this->articlesRepository = new ArticleRepository();
    }

    public function invoke(): string
    {
        return $this->render(
            SITE_NAME . ' - HomePage',
            'home.php',
            [
                'articles' => $this->articlesRepository->findAll(),
            ]
        );
    }
}
