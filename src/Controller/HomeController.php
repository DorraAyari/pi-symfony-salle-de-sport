<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Security $security): Response
    {
        if ($security->getUser()) {
            if (in_array("ROLE_ADMIN", $security->getUser()->getRoles())) {
                return $this->redirectToRoute("app_admin");
            }
        }

        return $this->render('front/base.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
