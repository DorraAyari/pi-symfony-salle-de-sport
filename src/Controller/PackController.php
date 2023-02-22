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
    #[Route('/modifier/{id}', name: 'modifier')]

    public function modifier(Request $request , ManagerRegistry $doctrine,Member $member): Response
    {
       $form = $this->createForm(MemberformType::class,$member);
       $form->handleRequest($request);
       if ($form ->IsSubmitted()){
                $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($member);
       //flush=push
       $em->flush();
     

       return $this->redirectToRoute('app_member_index');
    }

    return $this->renderForm('frontcoach/edit.html.twig', [
     
        'member' => $form,

    ]);
       
    }


}
