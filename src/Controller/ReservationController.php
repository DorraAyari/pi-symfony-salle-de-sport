<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;


class ReservationController extends AbstractController
{
    public function myAction(EntityManagerInterface $entityManager)
    {
        // Get the ObjectManager instance
        $objectManager = $this->getDoctrine()->getManager();

        // Use the ObjectManager to persist, update or delete objects in the database
        $myEntity = new Reservation();
        $objectManager->persist($myEntity);
        $objectManager->flush();
    }
    #[Route('/readres', name: 'readres')]
    public function afficheall(ReservationRepository $reservationRepository): Response
    {
        $reservation=$reservationRepository->findAll();
        return $this->render('reservation/readres.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/ajouterres', name: 'ajouterres')]

    public function ajouter(Request $request , ManagerRegistry $doctrine,Security $security): Response
    {
        $reservation = new reservation();
        $user = $security->getUser();
        
        $reservation->setUser($user);
       
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
       if ($form ->IsSubmitted() && $form->isValid()){
       

        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($reservation);
       //flush=push
       $em->flush();
       return $this->redirectToRoute('readres', [
    ]);
       }
       return $this->renderForm('reservation/ajouterres.html.twig', [
        'res' => $form,
    ]);
       
    }
    #[Route('/modifierres/{id}', name: 'modifierres')]

    public function modifier(Request $request , ManagerRegistry $doctrine,Reservation $res): Response
    {
       $form = $this->createForm(ReservationRepository::class,$res);
       $form->handleRequest($request);
       if ($form ->IsSubmitted()){
       
            // On stocke l'image dans la base de données (son nom)
           
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($res);
       //flush=push
       $em->flush();
     

       return $this->redirectToRoute('readres', [
    ]);
       }
       return $this->renderForm('reservation/editres.html.twig', [
        'res' => $form,

    ]);
       
    }
    #[Route('supprimerres/{id}', name: 'supprimerres')]

    public function supprimerS($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $res =$doctrine->getRepository(ReservationRepository::class);
    $res =  $res->find($id);
    $em->remove($res);
$em->flush();
return $this->redirectToRoute('readres');

}
}