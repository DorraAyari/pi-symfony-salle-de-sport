<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StandardController extends AbstractController
{
    #[Route('/standard', name: 'app_standard')]
    public function index(): Response
    {
        return $this->render('standard/Standard.html.twig', [
            'controller_name' => 'StandardController',
        ]);
    }
}
