<?php

namespace App\Form;

use App\Service\Form;
use App\Model\Article;


class FormArticle
{
    public static function buildAddArticle()
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'admin/article/add')
            ->ajoutLabelFor('text', 'Titre :')
            ->ajoutInput('text', 'titre', ['titre' => 'article', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'infoSport')
            ->ajoutInput('text', 'infoSport', ['infoSport' => 'article', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'journaliste')
            ->ajoutInput('text', 'journaliste', ['journaliste' => 'article', 'class' => 'form-control'])
            ->ajoutBouton('Ajouter un article', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    public static function buildUpdateArticle(Article $article)
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'update/' . $article->getIdArticle())
            ->ajoutLabelFor('text', 'Titre :')
            ->ajoutInput('text', 'titre', ['titre' => 'article', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'infoSport')
            ->ajoutInput('text', 'infoSport', ['infoSport' => 'article', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'journaliste')
            ->ajoutInput('text', 'journaliste', ['journaliste' => 'article', 'class' => 'form-control'])
            ->ajoutBouton('Mettre a jour un article', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    public static function buildDeleteArticle($article)
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'Delete/' . $article->getIdArticle())
            ->ajoutLabelFor('text', 'Titre :')
            ->ajoutInput('text', 'titre', ['titre' => 'article', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'infoSport')
            ->ajoutInput('text', 'infoSport', ['infoSport' => 'article', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'journaliste')
            ->ajoutInput('text', 'journaliste', ['journaliste' => 'article', 'class' => 'form-control'])
            ->ajoutBouton('Supprimer un article', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }
}
