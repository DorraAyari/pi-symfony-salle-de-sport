<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class CoursController extends AbstractController
{
    #[Route('/cours', name: 'app_cours')]
    public function index(CoursRepository $coursRepository): Response
    {
        $cours=$coursRepository->findAll();

        return $this->render('cours/index.html.twig', [
            'cours' => $cours,
        ]);
    }
    #[Route('/showc/{id}', name: 'showc')]
    public function show(CoursRepository $coursRepository,$id): Response
    {
        $cours=$coursRepository->find($id);
        return $this->render('cours/show.html.twig', [
            'cours' => $cours,
        ]);
    }
    #[Route('/readc', name: 'readc')]
    public function afficheall(CoursRepository $coursRepository): Response
    {
        $cours=$coursRepository->findAll();
        return $this->render('cours/readc.html.twig', [
            'cours' => $cours,
        ]);
    }
    #[Route('/ajouterc', name: 'ajouterc')]

    public function ajouter(Request $request , ManagerRegistry $doctrine): Response
    {
       $cours = new Cours;

       $form = $this->createForm(CoursType::class, $cours);
       $form->handleRequest($request);
     
    if ($form->isSubmitted() && $form->isValid()) {
        $image = $form->get('image')->getData();
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
                $cours->setImage($fichier);
    }
        $em = $doctrine->getManager();
        $em->persist($cours);
        $em->flush();
       return $this->redirectToRoute('readc', [
    ]);
       }
       return $this->renderForm('cours/ajouterc.html.twig', [
        'cours' => $form,
    ]);
       
    }
    #[Route('/modifierc/{id}', name: 'modifierc')]

    public function modifier(Request $request , ManagerRegistry $doctrine, Cours $cours): Response
    {    

        $form = $this->createForm(CoursType::class, $cours);
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
                $cours->setImage($fichier);
            }
    
    
            // On stocke l'image dans la base de données (son nom)
            $em = $doctrine->getManager();
            // persist = ajouter
            $em->persist($cours);
            // flush = push
            $em->flush();
    
            return $this->redirectToRoute('readc');
        }
    
        return $this->renderForm('cours/modifierc.html.twig', [
            'cours' => $form,

        ]);
    }
    #[Route('supprimerc/{id}', name: 'supprimerc')]

    public function supprimercc($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $cours =$doctrine->getRepository(Cours::class);
    $cours =  $cours->find($id);
    $em->remove($cours);
$em->flush();
return $this->redirectToRoute('readc');

}
}
