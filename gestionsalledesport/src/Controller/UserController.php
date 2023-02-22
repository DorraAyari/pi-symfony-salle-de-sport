<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Error;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/terms', name: 'app_terms', methods: ['GET'])]
    public function terms(): Response
    {
        return $this->render('user/terms.html.twig');
    }

    #[Route('/profile', name: 'app_profile', methods: ['GET'])]
    public function show(Security $security): Response
    {
        return $this->render('user/profile.html.twig', [
            'user' => $security->getUser(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_profile_edit', methods: ['GET', 'POST'])]
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
            return $this->redirectToRoute('app_profile', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

}
