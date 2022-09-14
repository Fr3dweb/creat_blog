<?php

namespace App\Controller\Front;

use App\Entity\Citation;
// use App\Form\FormCitation;
use App\Repository\CitationRepository;
// use App\Service\Input;
// use App\Service\Redirect;
// use App\Service\Validation;
// use App\Service\View;

class HomeController
{
    use View;

    private CitationRepository $citationsRepository;

    public function __construct()
    {
        $this->citationsRepository = new CitationRepository();
    }

    public function invoke(): string
    {
        return $this->render(
            SITE_NAME . ' - HomePage',
            'home.php',
            [
                'formCitation' => FormCitation::buildAddCitation(),
                'citations' => $this->citationsRepository->fetchAll(),
            ]);
    }

    public function addCitation()
    {
        if (Input::exists()) {
            $val = new Validation;
            $val->name('citation')->value(Input::get('citation'))->required();
            $val->name('auteur')->value(Input::get('auteur'))->required();
            if ($val->isSuccess()) {
                $citation = Input::get('citation');
                $auteur = Input::get('auteur');
                $citation = new Citation($citation, $auteur);
                $this->citationsRepository->add($citation);
                Redirect::to('/');
            }
        }
        Redirect::to('/');

    }
}