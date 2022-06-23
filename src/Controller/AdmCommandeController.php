<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmCommandeController extends AbstractController
{
    #[Route('/adm/commande', name: 'app_adm_commande')]
    public function index(): Response
    {
        return $this->render('adm_commande/index.html.twig', [
            'controller_name' => 'AdmCommandeController',
        ]);
    }
}
