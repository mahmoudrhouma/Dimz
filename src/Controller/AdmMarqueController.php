<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmMarqueController extends AbstractController
{
    #[Route('/adm/marque', name: 'app_adm_marque')]
    public function index(): Response
    {
        return $this->render('adm_marque/index.html.twig', [
            'controller_name' => 'AdmMarqueController',
        ]);
    }
}
