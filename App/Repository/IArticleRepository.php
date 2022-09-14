<?php

namespace App\Repository;

use App\Model\Article;

interface IBlogRepository
{
    public function add(Article $article);

    //public function remove();

    public function findAll();

    //public function update();
}
