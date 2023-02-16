<?php

namespace App\Controller;
use App\Entity\Client;
use App\Form\ClientformType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{

    #[Route('/client', name: 'app_client')]
    public function index(Request $request): Response
    {
        $Client = new Client();
        $form = $this->createForm(ClientformType::class, $Client,[ 'action' => '/standard',]);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Do something with the form data, for example:
            $message = sprintf(
                'You submitted: Surname="%s", Name="%s", Email="%s", Age="%d"',
                $data['Surname'],
                $data['Name'],
                $data['Email'],
                $data['Age']
            );
            $this->addFlash('success', $message);

            return $this->redirectToRoute('success');
        }

        return $this->render('client/Client.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
