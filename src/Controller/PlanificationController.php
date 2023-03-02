<?php

namespace App\Controller;

use App\Entity\Calendar;
use App\Form\CalendarType;
use App\Repository\CalendarRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/planification')]
class PlanificationController extends AbstractController
{
    #[Route('/', name: 'app_planification_index', methods: ['GET'])]
    public function afficheall(CalendarRepository $calendarRepository, Request $request): Response
    {
       
        $searchTerm = $request->query->get('search');

        $calendar = $calendarRepository->findBySearch($searchTerm);
        return $this->render('planification/index.html.twig', [
            'calendars' => $calendar,
        ]);
    }
    
    #[Route('/new', name: 'app_planification_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CalendarRepository $calendarRepository): Response
    {
        $calendar = new Calendar();
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calendarRepository->save($calendar, true);

            return $this->redirectToRoute('app_planification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('planification/new.html.twig', [
            'calendar' => $form,

        ]);
    }

    #[Route('/{id}', name: 'app_planification_show', methods: ['GET'])]
    public function show(Calendar $calendar): Response
    {
        return $this->render('planification/show.html.twig', [
            'calendar' => $calendar,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_planification_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Calendar $calendar, CalendarRepository $calendarRepository): Response
    {
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calendarRepository->save($calendar, true);

            return $this->redirectToRoute('app_planification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('planification/edit.html.twig', [
     
            'calendar' => $form,
        ]);
    }

   
    #[Route('supprimerpl/{id}', name: 'app_planification_delete')]

    public function supprimercc($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $calendar =$doctrine->getRepository(Calendar::class);
    $calendar =  $calendar->find($id);
    $em->remove($calendar);
$em->flush();
return $this->redirectToRoute('app_planification_index');

}

}
