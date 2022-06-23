<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmArticleController extends AbstractController
{
    #[Route('/adm/article', name: 'app_adm_article')]
    public function index(): Response
    {
        return $this->render('adm_article/index.html.twig', [
            'controller_name' => 'AdmArticleController',
        ]);
    }
}
