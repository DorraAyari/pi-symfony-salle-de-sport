<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Cours;
use App\Entity\Image;
use App\Form\CoachType;
use App\Form\CoursType;
use App\Repository\CoachRepository;
use App\Repository\CoursRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class CoursController extends AbstractController
{
    #
    #[Route('/c', name: 'app_cours')]
    public function affiche(): Response
    {
        return $this->render('frontcoach/cours.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    #[Route('/readc', name: 'readc')]
    public function afficheall(CoursRepository $coursR): Response
    {
        $cours=$coursR->findAll();
        return $this->render('cours/index.html.twig', [
            'cours' => $cours,
        ]);
    }
    #[Route('/show/{id}', name: 'show')]
    public function show(CoursRepository $coursR,$id): Response
    {
        $cours=$coursR->find($id);
        return $this->render('cours/show.html.twig', [
            'cours' => $cours,
        ]);
    }
    #[Route('/ajouterc', name: 'ajouterc')]

    public function ajouter(Request $request , ManagerRegistry $doctrine): Response
    {
        ////edirr
       $cours = new Cours;
       $form = $this->createForm(CoursType::class,$cours);
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
                $cours->setImage($fichier);
            }
 
 
      

        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($cours);
       //flush=push
       $em->flush();
       return $this->redirectToRoute('readc', [
    ]);
       }
       return $this->renderForm('cours/ajouterc.html.twig', [
        'cours' => $form,
    ]);
       
    }
    #[Route('/modifierc/{id}', name: 'modifierc')]

    public function modifier(Request $request , ManagerRegistry $doctrine,Cours $cours): Response
    {
       $form = $this->createForm(CoursType::class,$cours);
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
            $cours->setImage($fichier);
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($cours);
       //flush=push
       $em->flush();
     

       return $this->redirectToRoute('readc', [
    ]);
       }
       return $this->renderForm('cours/modifierc.html.twig', [
        'cours' => $form,

    ]);
       
    }
    #[Route('supprimercc/{id}', name: 'supprimercc')]

    public function supprimerS($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $cours =$doctrine->getRepository(cours::class);
    $cours =  $cours->find($id);
    $em->remove($cours);
$em->flush();
return $this->redirectToRoute('readAc');

}
}
