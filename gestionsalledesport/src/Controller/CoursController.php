<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Form\Cours1Type;
use App\Repository\CoursRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/cours')]
class CoursController extends AbstractController
{
    #[Route('/', name: 'app_cours_index', methods: ['GET'])]
    public function index(CoursRepository $coursRepository): Response
    {
        return $this->render('cours/index.html.twig', [
            'cour' => $coursRepository->findAll(),

        ]);
    }



    #[Route('/new', name: 'app_cours_new', methods: ['GET', 'POST'])]

    public function ajouter(Request $request , ManagerRegistry $doctrine): Response
    {
       $cour = new Cours;
       $form = $this->createForm(Cours1Type::class,$cour);
       $form->handleRequest($request);
       if ($form ->IsSubmitted()){
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
                $cour->setImage($fichier);
            }
 
 
      

        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($cour);
       //flush=push
       $em->flush();
       return $this->redirectToRoute('app_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cours/new.html.twig', [
            'cour' => $cour,
            'form' => $form,
         

        ]);
       
    }
    #[Route('/{id}/edit', name: 'app_cours_edit', methods: ['GET', 'POST'])]

    public function modifier(Request $request , ManagerRegistry $doctrine, Cours $cour): Response
    {
       $form = $this->createForm(Cours1Type::class,$cour);
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
            $cour->setImage($fichier);
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($cour);
       //flush=push
       $em->flush();
     
       return $this->redirectToRoute('app_cours_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('cours/edit.html.twig', [
        'cour' => $cour,
        'form' => $form,
    ]);
}

    #[Route('/{id}', name: 'app_cours_show', methods: ['GET'])]
    public function show(Cours $cour): Response
    {
        return $this->render('cours/profile.html.twig', [
            'cour' => $cour,
        ]);
    }

  

    #[Route('/{id}', name: 'app_cours_delete', methods: ['POST'])]
    public function delete(Request $request, Cours $cour, CoursRepository $coursRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cour->getId(), $request->request->get('_token'))) {
            $coursRepository->remove($cour, true);
        }

        return $this->redirectToRoute('app_cours_index', [], Response::HTTP_SEE_OTHER);
    }
}
