<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmSousCategorieController extends AbstractController
{
    #[Route('/adm/sous/categorie', name: 'app_adm_sous_categorie')]
    public function index(): Response
    {
        return $this->render('adm_sous_categorie/index.html.twig', [
            'controller_name' => 'AdmSousCategorieController',
        ]);
    }
}
