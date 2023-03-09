<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends AbstractController
{

    #[Route('/admin/profile', name: 'app_profile_admin', methods: ['GET'])]
    public function show(Security $security): Response
    {
        return $this->render('admin/profile.html.twig', [
            'user' => $security->getUser(),
        ]);
    }

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

    #[Route('/admin/{id}/edit', name: 'app_profile_edit_admin', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user)
            ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // fonction upload image
            try {
                $image = $form->get('image')->getData();
                $uploads_directory = $this->getParameter('images_directory');
                $filename = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move($uploads_directory, $filename);
                $user->setPhoto($filename);
            } catch (Error $e) {

            }

            $userRepository->save($user, true);
            return $this->redirectToRoute('app_profile_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
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

    #[Route('/stats', name: 'app_stats')]
    public function stat(): Response
    {
        $packages = $this->getDoctrine()->getRepository(Package::class)->findAll();

        return $this->render('packageadmin/packagestat.html.twig', [
            'controller_name' => 'AdminController',
            'packages' => $packages,
        ]);
    }
    #[Route('/statsres', name: 'app_statsres')]

public function stats(): Response
{
    $reservations = $this->getDoctrine()
        ->getRepository(Reservation::class)
        ->findAll();

    // Count the number of reservations per day
    $stats = [];
    foreach ($reservations as $reservation) {
        $day = $reservation->getDay()->format('Y-m-d');
        if (!isset($stats[$day])) {
            $stats[$day] = 0;
        }
        $stats[$day]++;
    }

    // Format the data for use by Chart.js
    $labels = array_keys($stats);
    $data = array_values($stats);

    // Render the chart using Twig
    return $this->render('reservationadmin/reservationstat.html.twig', [
        'labels' => json_encode($labels),
        'data' => json_encode($data),
    ]);
}

}
