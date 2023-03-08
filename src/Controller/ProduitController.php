<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ProduitController extends AbstractController
{
    
    #[Route('/produit', name: 'app_produit')]
    public function afficheall(ProduitRepository $produitR): Response
    {
        $produit=$produitR->findAll();
        return $this->render('produit_admin/readp.html.twig', [
            'produit' => $produit,
        ]);
    }
    #[Route('/shows/{id}', name: 'shows')]
    public function show(ProduitRepository $produitR,$id): Response
    {
        $produit=$produitR->find($id);
        return $this->render('produit_admin/show.html.twig', [
            'produit' => $produit,
        ]);
    }
    #[Route('/listprod', name: 'lisproduit')]
    public function index(ProduitRepository $produitRepository): Response
    {
        $produit=$produitRepository->findAll();
        return $this->render('produit/produit.html.twig', [
            'produit' => $produit,
            
        ]);
    }


    #[Route('/addproduit', name: 'addproduit')]
 public function addprod(Request $request , ManagerRegistry $doctrine): Response
 {
     ////edirr
    $produit = new Produit;
    $form = $this->createForm(ProduitType::class,$produit);
    $form->handleRequest($request);
    if ($form ->IsSubmitted() && $form->isValid()){
     $image = $form->get('image')->getData();

         // On boucle sur les images
         foreach($image as $image){
             // On génère un nouveau nom de fichier
             $fichier = md5(uniqid()) . '.' . $image->guessExtension();

             // On copie le fichier dans le dossier uploads
             $image->move(
                 $this->getParameter('images_directory'),
                 $fichier
             );

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


    #[Route('/modifierp/{id}', name: 'modifierp')]

    public function modifier(Request $request , ManagerRegistry $doctrine,Produit $produit): Response
    {
       $form = $this->createForm(ProduitType::class,$produit);
       $form->handleRequest($request);
       if ($form ->IsSubmitted()){
        $image = $form->get('image')->getData();

        // On boucle sur les images
        foreach($image as $image){
            // On génère un nouveau nom de fichier
            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            try {
            // On copie le fichier dans le dossier uploads
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );
        }  catch (FileException $e) {
            // handle exception
        }
    }
            // On stocke l'image dans la base de données (son nom)
            $produit->setImage($fichier);
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($produit);
       //flush=push
       $em->flush();
     

       return $this->redirectToRoute('app_produit', [
    ]);
       }
       return $this->renderForm('produit_admin/modifierp.html.twig', [
        'produit' => $form,

    ]);
       
    }


    #[Route('/supprimerp/{id}', name: 'supprimerp')]

    public function supprimerp($id , ManagerRegistry $doctrine): Response
    {
        $em=$doctrine->getManager();
        $produit =$doctrine->getRepository(Produit::class);
        $produit =  $produit->find($id);
        $em->remove($produit);
    $em->flush();
    return $this->redirectToRoute('app_produit');
    
    }


    





}
