<?php

namespace App\Controller;

use App\Entity\Package;
use App\Form\Package2Type;
use App\Repository\PackageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;


class PackageadminController extends AbstractController
{
    #[Route('/package', name: 'package')]
    public function index(PackageRepository $packageRepository): Response
    {
        $package=$packageRepository->findAll();
        return $this->render('packageadmin/readadmin.html.twig', [
            'package' => $package,
        ]);
    }
    #[Route('modifierpck/{id}', name: 'modifierpck')]

    public function modifier(Request $request , ManagerRegistry $doctrine,Package $package): Response
    {
       $form = $this->createForm(Package2Type::class,$package);
       $form->handleRequest($request);
       if ($form ->IsSubmitted()){

       
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($package);
       //flush=push
       $em->flush();
     

       return $this->redirectToRoute('package', [
    ]);
       }
       return $this->renderForm('packageadmin/modifieradmin.html.twig', [
        'package' => $form,

    ]);
       
    }
    #[Route('Supprimerp/{id}', name: 'supprimerpck')]

    public function supprimerpck($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $package =$doctrine->getRepository(Package::class);
    $package =  $package->find($id);
    $em->remove($package);
$em->flush();
return $this->redirectToRoute('package');

}
}