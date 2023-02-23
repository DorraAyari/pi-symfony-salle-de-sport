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
        
        $qb = $calendar->createQueryBuilder('e')
        ->select('e.id', 'e.start', 'e.end', 'e.title', 'e.description', 'e.background_color', 'e.border_color', 'e.text_color', 'c.nom as nom', 's.nom as salle_nom', 'cr.nom as cours_nom')
        ->leftJoin('e.Coach', 'c')
        ->leftJoin('e.Salle', 's')
        ->leftJoin('e.Cours', 'cr');

    $events = $qb->getQuery()->getResult();

    $rdvs = [];

    foreach ($events as $event) {
        $rdvs[] = [
            'id' => $event['id'],
            'start' => $event['start']->format('Y-m-d H:i:s'),
            'end' => $event['end']->format('Y-m-d H:i:s'),
            'title' => $event['title'],
            'description' => $event['description'],
            'backgroundColor' => $event['background_color'],
            'borderColor' => $event['border_color'],
            'textColor' => $event['text_color'],
            'coach' => $event['nom'],
            'salle' => $event['salle_nom'],
            'cours' => $event['cours_nom'],
        ];
    }

    $data = json_encode($rdvs);

    return $this->render('calendar/index.html.twig', compact('data'));
}
}
