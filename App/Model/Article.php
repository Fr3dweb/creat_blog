<?php

namespace App\Model;

class Article
{
    private int $idArticle;
    private string $titre;
    private string $infoSport;
    private string $journaliste;

    public function __construct($titre, $infoSport, $journaliste)
    {
        $this->titre = $titre;
        $this->infoSport = $infoSport;
        $this->journaliste = $journaliste;
    }

    public function getIdArticle(): int
    {
        return $this->idArticle;
    }
    public function getTitre(): string
    {
        return $this->titre;
    }
    public function getInfoSport(): string
    {
        return $this->infoSport;
    }
    public function getJournaliste(): string
    {
        return $this->journaliste;
    }
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }
}
