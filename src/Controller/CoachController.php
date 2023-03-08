<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Coach;
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
    #[Route('/shows/{id}', name: 'shows')]
    public function show(CoachRepository $coachRepository,$id): Response
    {
        $coach=$coachRepository->find($id);
        return $this->render('coach/show.html.twig', [
            'coach' => $coach,
        ]);
    }
//-----------------------------------PDF:-------------------------------------------
#[Route('/coach/pdf', name: 'coach_pdf')]
public function pdf(CoachRepository $coachRepository): Response
{
    // Configuration de dompdf
    $pdfOptions= new Options();
    $pdfOptions->set('defaultFont','Arial');

    // initialisation pdf
    $dompdf=new Dompdf($pdfOptions);

    //retreive the events data from the database
    $coach = $coachRepository->findAll();

    //render the eventst from the database
    $html=$this->renderView('coach/pdf.html.twig',[
        'coach' => $coach,
    ]);
    //load html
    $dompdf->loadHtml($html);

    //setup the paper format
    $dompdf->setPaper('A4','Portrait');

    //render pdf as html content
    $dompdf->render();


    //save pdf as listedeparticipant pdf
    $pdfContent = $dompdf->output();
    
    // Create a response object
    $response = new Response();
    
    // Set the content type
    $response->headers->set('Content-Type', 'application/pdf');
    
    // Set the content of the response to the generated pdf content
    $response->setContent($pdfContent);
    
    // Set the content disposition header for file download
    $response->headers->set('Content-Disposition', 'attachment;filename="listecoach.pdf"');
    
    // Return the response object
    return $response;

}
    #[Route('/read', name: 'readAll')]
    public function readAll(Request $request, CoachRepository $coachRepository): Response
    {
        
       
        $coachName = $request->query->get('coach');
    
        $coachs = $coachRepository->findAll();
        
        if ($coachName) {
            $coachs = $coachRepository->findByNom($coachName);
        }
        
      
    
        return $this->render('coach/read.html.twig', [
            'coachs' => $coachs,
        ]);
    }
    

    #[Route('/ajouterS', name: 'ajouterS')]

    public function ajouter(Request $request , ManagerRegistry $doctrine): Response
    {
        ////edirr
       $coach = new Coach;
       $form = $this->createForm(CoachType::class,$coach);
       $form->handleRequest($request);
       if ($form ->IsSubmitted() && $form->isValid()){
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
