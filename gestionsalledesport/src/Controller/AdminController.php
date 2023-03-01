<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(Security $security): Response
    {
        if ($security->getUser()) {
            if (in_array("ROLE_ADMIN", $security->getUser()->getRoles())) {
                return $this->render('admin/base.html.twig', ['controller_name' => 'AdminController']);
            } else {
                return $this->redirectToRoute("app_admin_login");

            }
        } else {
            return $this->redirectToRoute("app_admin_login");
        }
    }

    #[Route('/login_admin', name: 'app_admin_login')]
    public function adminLogin(AuthenticationUtils $authenticationUtils): Response
    {
        /*if ($this->getUser()) {
            return $this->redirectToRoute('admin');
        }*/

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('admin/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout_admin', name: 'app_logout_admin')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
