<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmAdresseController extends AbstractController
{
    #[Route('/adm/adresse', name: 'app_adm_adresse')]
    public function index(): Response
    {
        return $this->render('adm_adresse/index.html.twig', [
            'controller_name' => 'AdmAdresseController',
        ]);
    }
}
