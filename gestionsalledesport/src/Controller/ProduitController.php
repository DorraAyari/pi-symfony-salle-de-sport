<?php

namespace App\Controller;
use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\ProduitType;
class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    
    #[Route('/addproduit', name: 'addproduit')]

    public function addprod(Request $request , ManagerRegistry $doctrine): Response
 {
    $produit = new Produit;
    $form = $this->createForm(ProduitType::class,$produit);
    $form->handleRequest($request);
    if ($form ->IsSubmitted()&& $form->isValid()){
     $image = $form->get('image')->getData();

     // On boucle sur les images
     foreach($image as $image){
         // On génère un nouveau nom de fichier
         $fichier = md5(uniqid()) . '.' . $image->guessExtension();

         // On copie le fichier dans le dossier uploads
         $image->move(
             $this->getParameter('images_directory'), $fichier);

         // On stocke l'image dans la base de données (son nom)
         $produit->setImage($fichier);
     }
     
     $em=$doctrine->getManager();
    //persist=ajouter
    $em->persist($produit);
    //flush=push
    $em->flush();
    return $this->redirectToRoute('app_produit', [
 ]);
    }
    return $this->render('produit_admin/addproduitadmin.html.twig', [
     'produit' => $form->createView(),
     
 ]);
 }






}
