<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmLigneCommandeController extends AbstractController
{
    #[Route('/adm/ligne/commande', name: 'app_adm_ligne_commande')]
    public function index(): Response
    {
        return $this->render('adm_ligne_commande/index.html.twig', [
            'controller_name' => 'AdmLigneCommandeController',
        ]);
    }
}
