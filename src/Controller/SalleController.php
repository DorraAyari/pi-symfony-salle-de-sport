<?php

namespace App\Controller;

use App\Entity\Salle;
use App\Form\SalleType;
use App\Repository\SalleRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\NodeVisitor\SafeAnalysisNodeVisitor;

#[Route('/salle')]
class SalleController extends AbstractController
{
    #[Route('/', name: 'app_salle_index', methods: ['GET'])]
    public function index(SalleRepository $salleRepository): Response
    {
        return $this->render('salle/index.html.twig', [
            'salles' => $salleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_salle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SalleRepository $salleRepository): Response
    {
        $salle = new Salle();
        $form = $this->createForm(SalleType::class, $salle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $salleRepository->save($salle, true);

            return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('salle/new.html.twig', [
            'salle' => $form,

        ]);
    }

    #[Route('/{id}', name: 'app_salle_show', methods: ['GET'])]
    public function show(Salle $salle): Response
    {
        return $this->render('salle/show.html.twig', [
            'salle' => $salle,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_salle_edit')]

public function edit(Request $request , ManagerRegistry $doctrine,  Salle $salle): Response
{
    $form = $this->createForm(SalleType::class, $salle);
    $form->handleRequest($request);
    
    if ($form->IsSubmitted() && $form->isValid()) {

        // On stocke l'image dans la base de données (son nom)
        $em = $doctrine->getManager();
        // persist = ajouter
        $em->persist($salle);
        // flush = push
        $em->flush();


            return $this->redirectToRoute('app_salle_index');
        }

        return $this->renderForm('salle/edit.html.twig', [
            'salle' => $form,

        ]);
    }
    #[Route('/{id}/delete', name: 'app_salle_delete')]

    public function supprimerS($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $salle =$doctrine->getRepository(Salle::class);
    $salle =  $salle->find($id);
    $em->remove($salle);
$em->flush();
return $this->redirectToRoute('app_salle_index');

}
}
