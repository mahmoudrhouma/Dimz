<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Form\MarqueType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class AdmMarqueController extends AbstractController
{
    #[Route('/adm/marque', name: 'app_adm_marque')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $marque = new Marque();

        $form = $this->createForm(MarqueType::class,$marque);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            
            $marque = $form->getData();
            $em->persist($marque);  // commit la data     
            $em->flush(); 
        }
            return $this->renderForm('adm_marque/index.html.twig', [

                'form' => $form,
    
            ]);
        
    }
}
