<?php

namespace App\Repository;

use App\Model\Article;
use App\Repository\IArticleRepository;
use App\Service\Database;
use PDO;

class ArticleRepository extends Database implements IArticleRepository
{


    public function add(Article $article)
    {
        $stmt = $this->db->prepare("INSERT INTO article (journaliste, infoSport, titre) 
        VALUES (:journaliste, :infoSport, :titre)");
        $stmt->bindValue(':title', $article->getTitre());
        $stmt->bindValue(':journaliste', $article->getJournaliste());
        $stmt->bindValue(':infoSport', $article->getInfoSport());
        $stmt->execute();
        $stmt = null;
    }


    public function findAll()
    {
        $stmt = $this->db->prepare('SELECT * FROM article');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arr = $stmt->fetchAll();

        $stmt = null;
        $articles = [];
        foreach ($arr as $article) {
            $p = new Article($article['journaliste'], $article['infoSport'], $article['titre']);
            $p->setId($article['id']);
            $articles[] = $p;
        }
        return $articles;
    }
}
