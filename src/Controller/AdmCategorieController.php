<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmCategorieController extends AbstractController
{
    #[Route('/adm/categorie', name: 'app_adm_categorie')]
    public function index(): Response
    {
        return $this->render('adm_categorie/index.html.twig', [
            'controller_name' => 'AdmCategorieController',
        ]);
    }
}
