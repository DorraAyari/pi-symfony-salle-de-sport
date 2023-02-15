<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Image;
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
    #[Route('/c', name: 'app_cours')]
    public function affiche(): Response
    {
        return $this->render('frontcoach/cours.html.twig', [
            'controller_name' => 'CoachController',
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
       $coach = new Coach;
       $form = $this->createForm(CoachType::class,$coach);
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
                $coach->setImage($fichier);
            }
 
 
      

        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($coach);
       //flush=push
       $em->flush();
       return $this->redirectToRoute('readAll', [
    ]);
       }
       return $this->renderForm('coach/ajouterS.html.twig', [
        'coach' => $form,
    ]);
       
    }
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
