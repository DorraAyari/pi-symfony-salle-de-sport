<?php

namespace App\Controller;

use App\Entity\Coach;
<<<<<<< HEAD:src/Controller/CoachController.php
=======
use App\Entity\Image;
>>>>>>> fayrouz-pi:gestionsalledesport/src/Controller/CoachController.php
use App\Form\CoachType;
use App\Repository\CoachRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class CoachController extends AbstractController
{
    #[Route('/coach', name: 'app_coach')]
    public function index(CoachRepository $coachRepository): Response
    {
        $coach=$coachRepository->findAll();
        return $this->render('frontcoach/coach.html.twig', [
            'coachs' => $coach,
        ]);
    }
<<<<<<< HEAD:src/Controller/CoachController.php
    #[Route('/shows/{id}', name: 'shows')]
    public function show(CoachRepository $coachRepository,$id): Response
    {
        $coach=$coachRepository->find($id);
        return $this->render('coach/show.html.twig', [
            'coach' => $coach,
=======
    #[Route('/c', name: 'app_cours')]
    public function affiche(): Response
    {
        return $this->render('frontcoach/cours.html.twig', [
            'controller_name' => 'CoachController',
>>>>>>> fayrouz-pi:gestionsalledesport/src/Controller/CoachController.php
        ]);
    }

    #[Route('/read', name: 'readAll')]
    public function afficheall(CoachRepository $coachRepository): Response
    {
        $coach=$coachRepository->findAll();
        return $this->render('coach/read.html.twig', [
            'coachs' => $coach,
        ]);
    }
    #[Route('/ajouterS', name: 'ajouterS')]

    public function ajouter(Request $request , ManagerRegistry $doctrine): Response
    {
<<<<<<< HEAD:src/Controller/CoachController.php
        ////edirr
=======
>>>>>>> fayrouz-pi:gestionsalledesport/src/Controller/CoachController.php
       $coach = new Coach;
       $form = $this->createForm(CoachType::class,$coach);
       $form->handleRequest($request);
       if ($form ->IsSubmitted() && $form->isValid()){
        $image = $form->get('image')->getData();
<<<<<<< HEAD:src/Controller/CoachController.php
        if ($image) {
            // On boucle sur les images
            foreach($image as $image){

                 $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                try {

                    // On copie le fichier dans le dossier uploads
                    $image->move(
                        $this->getParameter('images_directory'),
                        $fichier
                    );
                }  catch (FileException $e) {
                    // handle exception
                // On copie le fichier dans le dossier uploads
            }
        }

                // On stocke l'image dans la base de données (son nom)
                $coach->setImage($fichier);
                
            }
 
        
=======

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
                $coach->setImage($fichier);
            }
 
 
>>>>>>> fayrouz-pi:gestionsalledesport/src/Controller/CoachController.php
      

        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($coach);
       //flush=push
       $em->flush();
<<<<<<< HEAD:src/Controller/CoachController.php

=======
>>>>>>> fayrouz-pi:gestionsalledesport/src/Controller/CoachController.php
       return $this->redirectToRoute('readAll', [
    ]);
       }
       return $this->renderForm('coach/ajouterS.html.twig', [
        'coach' => $form,
    ]);
       
    }
<<<<<<< HEAD:src/Controller/CoachController.php
    
    #[Route('/modifierS/{id}', name: 'modifierS')]

public function modifier(Request $request , ManagerRegistry $doctrine, Coach $coach): Response
{
    $form = $this->createForm(CoachType::class, $coach);
    $form->handleRequest($request);
    
    if ($form->IsSubmitted() && $form->isValid()) {
        $image = $form->get('image')->getData();

        if ($image) {
            foreach($image as $image){

            $fichier = md5(uniqid()) . '.' . $image->guessExtension();
            try {
                // On copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
            } catch (FileException $e) {
                // handle exception
                // On copie le fichier dans le dossier uploads
            }
        }
            // On stocke l'image dans la base de données (son nom)
            $coach->setImage($fichier);
        }

        // On stocke l'image dans la base de données (son nom)
        $em = $doctrine->getManager();
        // persist = ajouter
        $em->persist($coach);
        // flush = push
        $em->flush();

        return $this->redirectToRoute('readAll');
    }

    return $this->renderForm('coach/modifierS.html.twig', [
        'coach' => $form,

    ]);
}

=======
    #[Route('/modifierS/{id}', name: 'modifierS')]

    public function modifier(Request $request , ManagerRegistry $doctrine,Coach $coach): Response
    {
       $form = $this->createForm(CoachType::class,$coach);
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
            $coach->setImage($fichier);
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($coach);
       //flush=push
       $em->flush();
     

       return $this->redirectToRoute('readAll', [
    ]);
       }
       return $this->renderForm('coach/modifierS.html.twig', [
        'coach' => $form,

    ]);
       
    }
>>>>>>> fayrouz-pi:gestionsalledesport/src/Controller/CoachController.php
    #[Route('supprimerS/{id}', name: 'supprimerS')]

    public function supprimerS($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $coach =$doctrine->getRepository(Coach::class);
    $coach =  $coach->find($id);
    $em->remove($coach);
$em->flush();
return $this->redirectToRoute('readAll');

}
}
