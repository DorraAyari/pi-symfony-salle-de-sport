<?php

namespace App\Controller;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaymenttController extends AbstractController
{
    #[Route('/paymentt', name: 'app_paymentt')]
    public function index(): Response
    {
        return $this->render('paymentt/index.html.twig', [
            'controller_name' => 'PaymenttController',
        ]);
    }
    #[Route('/checkout', name: 'checkout')]
    public function checkout($stripe_SK): Response
    {   Stripe::setApiKey($stripe_SK);
       
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items'           => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                        'unit_amount'  => 2000,
                    ],
                    'quantity'   => 1,
                ]
            ],
            'mode'                 => 'payment',
            'success_url'          => $this->generateUrl('success_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url'           => $this->generateUrl('cancel_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

        return $this->redirect($session->url, 303);
    }
    #[Route('/success-url', name: 'success_url')]
    public function successUrl(): Response
    {
        return $this->render('paymentt/success.html.twig', []);
    }

    #[Route('/cancel-url', name: 'cancel_url')]
    public function cancelUrl(): Response
    {
        return $this->render('paymentt/cancel.html.twig', []);
    }
}
