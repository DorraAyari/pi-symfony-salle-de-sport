<?php

namespace App\Controller;

use App\Entity\Member;
use App\Form\MemberformType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PackController extends AbstractController
{
    #[Route('/pack', name: 'app_pack')]
    public function index(): Response
    {
        return $this->render('pack/Pack.html.twig', [
            'controller_name' => 'PackController',
        ]);
    }


}
