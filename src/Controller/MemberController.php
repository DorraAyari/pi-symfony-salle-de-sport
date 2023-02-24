<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Image;
use App\Entity\Member;
use App\Form\CoachType;
use App\Form\MemberformType;
use App\Repository\CoachRepository;
use App\Repository\MemberRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class MemberController extends AbstractController
{
   
   
    #[Route('/member', name: 'app_member_index')]
    public function index(MemberRepository $members): Response
    {        $members=$members->findAll();

        return $this->render('member/index.html.twig', [

            'members' => $members,
        ]);
    }

    #[Route('/new', name: 'app_member_new')]

    public function ajouter(Request $request , ManagerRegistry $doctrine): Response
    {
        ////edirr
       $member = new Member;
       $form = $this->createForm(MemberformType::class,$member);
       $form->handleRequest($request);
       if ($form ->IsSubmitted() && $form->isValid()){
       
 
      

        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($member);
       //flush=push
       $em->flush();
       return $this->redirectToRoute('app_member_index');
    }

    return $this->renderForm('member/new.html.twig', [
        
        'member' => $form,

    ]);
    }
   

    #[Route('supprimer/{id}', name: 'supprimer')]

    public function supprimerS($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $member =$doctrine->getRepository(Member::class);
    $member =  $member->find($id);
    $em->remove($member);
$em->flush();
return $this->redirectToRoute('app_member_index');

}
}