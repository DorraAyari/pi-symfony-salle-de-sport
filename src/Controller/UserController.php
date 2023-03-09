<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Error;
use Exception;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
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

    #[Route('/forgot_password', name: 'app_forgot_password', methods: ['GET', 'POST'])]
    public function forgotPassword(Request $request, UserRepository $userRepository): Response
    {
        $resetCode = rand(1000, 9999);

        $form = $this->createFormBuilder()
            ->add('email', TextType::class)
            ->getForm()
            ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get("email")->getData();

            if ($userRepository->findOneBy(["email" => $email])) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    try {
                        $transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
                        $transport->setUsername('pidev.app.esprit@gmail.com')->setPassword('jgtowstoofacenvr');
                        $mailer = new Swift_Mailer($transport);
                        $message = new Swift_Message('Forgot password');
                        $message->setFrom(array('pidev.app.esprit@gmail.com' => 'Forgot password'))
                            ->setTo(array($email))
                            ->setBody("<h1>Votre code de reinitialisation de mot de passe est : " . $resetCode . "</h1>", 'text/html');
                        $mailer->send($message);
                    } catch (Exception $exception) {
                        dd("emailSenderError");
                    }
                }

                return $this->redirectToRoute('app_forgot_password_reset_code',
                    [
                        "email" => $form->get('email')->getData(),
                        "resetCode" => $resetCode
                    ], Response::HTTP_SEE_OTHER
                );
            } else {
                $request->getSession()
                    ->getFlashBag()
                    ->add('error', "Email n'existe pas");
                return $this->redirectToRoute('app_forgot_password', [], Response::HTTP_SEE_OTHER
                );
            }
        }

        return $this->renderForm('user/forgot_password/forgot_password.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/forgot_password_reset_code', name: 'app_forgot_password_reset_code', methods: ['GET', 'POST'])]
    public function forgotPasswordResetCode(Request $request): Response
    {

        $form = $this->createFormBuilder()
            ->add('resetCode', TextType::class)
            ->getForm()
            ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('resetCode')->getData() == $request->get('resetCode')) {
                $email = $request->get("email");

                return $this->redirectToRoute(
                    'app_forgot_password_save_password',
                    ["email" => $email],
                    Response::HTTP_SEE_OTHER
                );
            } else {
                $request->getSession()
                    ->getFlashBag()
                    ->add('error', "Reset code invalid");
                return $this->redirectToRoute('app_forgot_password_reset_code',
                    [
                        "email" => $request->get("email"),
                        "resetCode" => $request->get("resetCode")
                    ], Response::HTTP_SEE_OTHER
                );
            }
        }

        return $this->renderForm('user/forgot_password/forgot_password_reset_code.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/forgot_password_save_password', name: 'app_forgot_password_save_password', methods: ['GET', 'POST'])]
    public function forgotPasswordSavePassword(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserRepository $userRepository): Response
    {
        $form = $this->createFormBuilder()
            ->add('plainPassword', TextType::class)
            ->add('plainPasswordConfirmation', TextType::class)
            ->getForm()
            ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('plainPassword')->getData() == $form->get('plainPasswordConfirmation')->getData()) {
                $user = $userRepository->findOneBy(["email" => $request->get("email")]);
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
                $userRepository->save($user, true);

                return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
            } else {
                $request->getSession()
                    ->getFlashBag()
                    ->add('error', "Password and confirmation don't match");
                return $this->redirectToRoute(
                    'app_forgot_password_save_password',
                    ["email" => $request->get("email")],
                    Response::HTTP_SEE_OTHER
                );
            }
        }

        return $this->renderForm('user/forgot_password/forgot_password_save_password.html.twig', [
            'form' => $form,
        ]);
    }
}
