<?php

namespace App\Controller; 

use App\Entity\Categorie;
use App\Form\CategorieType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdmCategorieController extends AbstractController

{

    #[Route('/adm/categorie', name: 'app_adm_categorie')]

    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $Categorie = new Categorie();

        $form = $this->createForm(CategorieType::class,$Categorie);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            
         $categorie = $form->getData();
        // dd($categorie->getLibelle());
        $em->persist($Categorie);  // commit la data     
        $em->flush();               // push ds la BD
        
        $this->addFlash('success','sayabni'); // afficher le msg OK après avoir telecharger l'image
        return $this->redirectToRoute('app_back_office'); // afficher le bachoffice après avoir envoyer le formulaire

        }

        return $this->renderForm('adm_categorie/index.html.twig', [

            'form' => $form,

        ]);

    }

}