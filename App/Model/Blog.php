<?php

namespace App\Model;

class Article {
    private $idArticle;
    private $titre;
    private $infoSport;
    private $journaliste;

    public function __construct($titre,$infoSport, $journaliste){
        $this->titre = $titre;
        $this->infoSport = $infoSport;
        $this->journaliste = $journaliste;
    }

    public function getidArticle(){
        return $this->idArticle;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getInfoSport(){
        return $this->infoSport;
    }
    public function getJournaliste(){
        return $this->journaliste;
    }
    public function setidArticle($idArticle) {
        $this->idArticle = $idArticle;
    }
}