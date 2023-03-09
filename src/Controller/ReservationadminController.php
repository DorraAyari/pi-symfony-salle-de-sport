<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;



class ReservationadminController extends AbstractController
{
    #[Route('/res', name: 'res')]
    public function afficheall(ReservationRepository $reservationRepository): Response
    {
        $reservation=$reservationRepository->findAll();
        return $this->render('reservationadmin/readresadmin.html.twig', [
            'reservation' => $reservation,
        ]);
    }       
    
    #[Route('/modifierresa/{id}', name: 'modifierresa')]

    public function modifier(Request $request , ManagerRegistry $doctrine,Reservation $res): Response
    {
       $form = $this->createForm(ReservationType::class,$res);
       $form->handleRequest($request);
       if ($form ->IsSubmitted()){
       
            // On stocke l'image dans la base de données (son nom)
           
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($res);
       //flush=push
       $em->flush();
     

       return $this->redirectToRoute('res', [
    ]);
       }
       return $this->renderForm('reservationadmin/modifierreas.html.twig', [
        'res' => $form,

    ]);
       
    }
    #[Route('supprimerresa/{id}', name: 'supprimerresa')]

    public function supprimerS($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $res =$doctrine->getRepository(Reservation::class);
    $res =  $res->find($id);
    $em->remove($res);
$em->flush();
return $this->redirectToRoute('res');

}
}