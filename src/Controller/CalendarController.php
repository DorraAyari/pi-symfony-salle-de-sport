<?php

namespace App\Controller;

use App\Repository\CalendarRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class CalendarController extends AbstractController
{
    
    #[Route('/calendar', name: 'app_main_controller')]
    public function indexc(CalendarRepository $calendar): Response{
        $events = $calendar->findAll();
    $rdvs = [];

    foreach($events as $event){
        $rdvs[] = [
            'id' => $event->getId(),
            'start' => $event->getStart()->format('Y-m-d H:i:s'),
            'end' => $event->getEnd()->format('Y-m-d H:i:s'),
            'title' => $event->getTitle(),
            'description' => $event->getDescription(),
            'backgroundColor' => $event->getBackgroundColor(),
            'borderColor' => $event->getBorderColor(),
            'textColor' => $event->getTextColor(),
            'cours' => $event->getCours(),
            'salle' => $event->getSalle(),
        ];
    }

    $data = json_encode($rdvs);

    return $this->render('calendar/index.html.twig', compact('data'));
}
}
