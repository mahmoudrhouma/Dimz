<?php

namespace App\Controller;

use App\Entity\Carroussel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CarrousselType;
use Doctrine\ORM\EntityManagerInterface;

class AdmCarrousselController extends AbstractController
{
    #[Route('/adm/carroussel', name: 'app_adm_carroussel')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $carroussel = new Carroussel();

        $form = $this->createForm(CarrousselType::class, $carroussel);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

         $carroussel = $form->getData();        
         $image = $form->get('image')->getData(); // recupérer l'image pas ds l'entité
         $imageName = md5(uniqid()).'.'.$image->guessExtension(); // fomater le nom pour eviter les espaces...
         $image->move( //deplacer l'image
            $this->getParameter('carroussel_directory'), // ds le nouveau direct
            $imageName // lui donner le nouveau nom
         );
         $form->getData()->setImageUrl($imageName); // remplir le champs URL qu'on a ignoré du formulaire mais il faut le remplir ds la BD
         
        // dd($form->getData());       
        // dd($categorie->getLibelle());
      
        $em->persist($carroussel);  // commit la data     
        $em->flush();               // push ds la BD
         
        $this->addFlash('success','Akahaw nayek'); // afficher le msg OK après avoir telecharger l'image
        return $this->redirectToRoute('app_back_office'); // afficher le bachoffice après avoir envoyer le formulaire


        }
        
        return $this->render('adm_carroussel/index.html.twig', [
            'form' => $form->createView(),
            
        ]);
    }
}
