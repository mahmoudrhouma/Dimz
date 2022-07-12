<?php

namespace App\Controller; 

use App\Entity\Article;
use App\Form\ArticleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmArticleController extends AbstractController
{
       
    #[Route('/adm/article', name: 'app_adm_article')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $article = $form->getData();
            $em->persist($article);  // commit la data     
            $em->flush();               // push ds la BD
            
            $this->addFlash('success','article ajoutée'); // afficher le msg OK après avoir telecharger l'image
            return $this->redirectToRoute('app_back_office'); // afficher le bachoffice après avoir envoyer le formulaire

        }

        return $this->renderForm('adm_article/index.html.twig', [

            'form' => $form,

        ]);
    }
}
