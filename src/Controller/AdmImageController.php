<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmImageController extends AbstractController
{
    #[Route('/adm/image', name: 'app_adm_image')]
    public function index(): Response
    {
        return $this->render('adm_image/index.html.twig', [
            'controller_name' => 'AdmImageController',
        ]);
    }
}
