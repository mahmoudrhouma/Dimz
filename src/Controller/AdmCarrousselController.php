<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmCarrousselController extends AbstractController
{
    #[Route('/adm/carroussel', name: 'app_adm_carroussel')]
    public function index(): Response
    {
        return $this->render('adm_carroussel/index.html.twig', [
            'controller_name' => 'AdmCarrousselController',
        ]);
    }
}
