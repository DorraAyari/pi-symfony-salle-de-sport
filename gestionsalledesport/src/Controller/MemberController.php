<?php

namespace App\Controller;

use App\Entity\Member;

use App\Form\MemberformType;
use App\Repository\MemberRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/member')]
class MemberController extends AbstractController
{  #[Route('/Member', name: 'app_member')]
    public function form(Request $request): Response
    {
        $Member = new Member();
        $form = $this->createForm(MemberformType::class, $Member,[ 'action' => '/standard',]);

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

        } return $this->render('member/index.html.twig', [
        'form' => $form->createView(),
    ]);}
    
    #[Route('/', name: 'app_member_index', methods: ['GET'])]
    public function index(MemberRepository $memberRepository): Response
    {
        return $this->render('member/index.html.twig', [
            'members' => $memberRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_member_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MemberRepository $memberRepository): Response
    {
        $member = new Member();
        $form = $this->createForm(MemberformType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $memberRepository->save($member, true);

            return $this->redirectToRoute('app_member_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('member/new.html.twig', [
            'member' => $member,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_member_show', methods: ['GET'])]
    public function show(Member $member): Response
    {
        return $this->render('member/profile.html.twig', [
            'member' => $member,
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
     

       return $this->redirectToRoute('app_member_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('member/edit.html.twig', [
        'member' => $member,
        'form' => $form,
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
