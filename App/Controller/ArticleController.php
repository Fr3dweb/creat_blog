<?php

namespace App\Controller;

use App\Model\Article;
use App\Form\FormArticle;
use App\Repository\IArticleRepository;
use App\Repository\ArticleRepository;
use App\Service\Input;
use App\Service\Redirect;
use App\Service\View;


class ArticleController
{
    use View;

    private IArticleRepository $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }

    public function invoke(): string
    {
        return $this->render(
            SITE_NAME . ' - admin article',
            'admin/index.php',
            [
                'articles' => $this->articleRepository->findAll()
            ]
        );
    }

    public function getArticleById($params)
    {
        $sport = $this->ArticleRepository->findById($params);
        return $this->render(
            SITE_NAME . ' - blog: ' . $article->design,
            'App/Model/article.php',
            [
                'formDeleteArticle' => FormArticles::buildDeleteArticle($article),
                'formArticle' => FormArticles::buildUpdateArticle($article),
                'articles' => $this->articleRepository->findAll()
            ]
        );
    }

    public function deleteArticleById($params)
    {
        $article = $this->ArticleRepository->findById($params);
        $this->ArticleRepository->remove($article);
        Redirect::to('admin/article');
    }

    public function updateArticleById($params)
    {
        if (Input::exists()) {
            $val = new Validation;
            $val->name('design')->value(Input::get('design'))->pattern('alpha')->required();
            if ($val->isSuccess()) {
                $article = $this->ArticleRepository->findById($params);
                $article->setDesign(Input::get('design'));
                $this->ArticleRepository->update($article);
                Redirect::to('admin/article');
            }
        }
    }

    public function addArticle()
    {
        if (Input::exists()) {
            $titre = Input::get('titre');
            $infoSport = Input::get('infoSport');
            $journaliste = Input::get('journaliste');
            $article = new Article($titre, $infoSport, $journaliste);
            $this->articleRepository->add($article);
            Redirect::to('admin/article');
        } else {
            return $this->render(
                SITE_NAME . ' - Add Article',
                'admin/new.php',
                [
                    'formArticle' => FormArticle::buildAddArticle(),
                ]
            );
        }
    }
}
