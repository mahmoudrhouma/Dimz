<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmUserController extends AbstractController
{
    #[Route('/adm/user', name: 'app_adm_user')]
    public function index(): Response
    {
        return $this->render('adm_user/index.html.twig', [
            'controller_name' => 'AdmUserController',
        ]);
    }
}
