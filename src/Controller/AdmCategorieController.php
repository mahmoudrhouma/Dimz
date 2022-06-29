<?php

namespace App\Controller;

use App\Form\CategorieType;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AdmCategorieController extends AbstractController
{
    #[Route('/adm/categorie', name: 'app_adm_categorie')]
    public function index(Request $request ): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $categorie = $form->getData();
            //dd( $categorie->getLibelle());
            dd ($categorie);
        }


        return $this->renderForm('adm_categorie/index.html.twig', [
            'form'=> $form ,
        ]);
    }
}
