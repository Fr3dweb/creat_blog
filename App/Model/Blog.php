<?php

namespace App\Model;

class article {
    private $idArticle;
    private $titre;
    private $contenu;

    public function __construct($titre,$contenu){
        $this->titre = $titre;
        $this->contenu = $contenu;
    }

    public function getidArticle(){
        return $this->idArticle;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getContenu(){
        return $this->contenu;
    }
    public function setidArticle($idArticle) {
        $this->idArticle = $idArticle;
    }
}