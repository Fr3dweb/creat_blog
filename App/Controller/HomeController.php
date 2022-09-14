<?php

namespace App\Controller;

use App\Model\Article;
// use App\Form\FormCitation;
use App\Repository\ArticleRepository;
// use App\Service\Input;
// use App\Service\Redirect;
// use App\Service\Validation;
// use App\Service\View;




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
                'formCitation' => FormArticles::buildAddArticle(),
                'citations' => $this->articlesRepository->fetchAll(),
            ]);
    }

    public function addArticle()
    {
        if (Input::exists()) {
            $val = new Validation;
            $val->name('article')->value(Input::get('article'))->required();
            $val->name('journaliste')->value(Input::get('journaliste'))->required();
            if ($val->isSuccess()) {
                $article = Input::get('article');
                $journaliste = Input::get('journaliste');
                $article = new Citation($article, $journaliste);
                $this->articlesRepository->add($article);
                Redirect::to('/');
            }
        }
        Redirect::to('/');

    }
}