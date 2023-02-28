<?php

namespace App\Controller;

use App\Entity\Image;
use App\Entity\Package;
use App\Form\Package2Type;
use App\Repository\PackageRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class PackgController extends AbstractController
{
    #[Route('/readpk', name: 'readpk')]
    public function afficheall(PackageRepository $packageRepository): Response
    {
        $package=$packageRepository->findAll();
        return $this->render('package/readp.html.twig', [
            'package' => $package,
        ]);
    }

    #[Route('/ajouterp', name: 'ajouterpk')]

    public function ajouter(Request $request , ManagerRegistry $doctrine): Response
    {
      
        $package = new Package();
        $form = $this->createForm(Package2Type::class, $package);
        $form->handleRequest($request);
       if ($form ->IsSubmitted() && $form->isValid()){
       

        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($package);
       //flush=push
       $em->flush();
       return $this->redirectToRoute('readpk', [
    ]);
       }
       return $this->renderForm('package/ajouterp.html.twig', [
        'package' => $form,
    ]);
       
    }
    #[Route('/modifierpk/{id}', name: 'modifierpk')]

    public function modifier(Request $request , ManagerRegistry $doctrine,Package $package): Response
    {
       $form = $this->createForm(Package2Type::class,$package);
       $form->handleRequest($request);
       if ($form ->IsSubmitted()){
       
            // On stocke l'image dans la base de données (son nom)
           
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($package);
       //flush=push
       $em->flush();
     

       return $this->redirectToRoute('readpk', [
    ]);
       }
       return $this->renderForm('package/editpk.html.twig', [
        'package' => $form,

    ]);
       
    }
    #[Route('supprimerpk/{id}', name: 'supprimerpk')]

    public function supprimerS($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $package =$doctrine->getRepository(Package::class);
    $package =  $package->find($id);
    $em->remove($package);
$em->flush();
return $this->redirectToRoute('readpk');

}
}
