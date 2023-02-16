<?php

namespace App\Controller;

use App\Entity\ReponseReclamation;
use App\Form\ReponseReclamationType;
use App\Repository\ReponseReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reponse/reclamation')]
class ReponseReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reponse_reclamation_index', methods: ['GET'])]
    public function index(ReponseReclamationRepository $reponseReclamationRepository): Response
    {
        return $this->render('reponse_reclamation/index.html.twig', [
            'reponse_reclamations' => $reponseReclamationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reponse_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReponseReclamationRepository $reponseReclamationRepository): Response
    {
        $reponseReclamation = new ReponseReclamation();
        $form = $this->createForm(ReponseReclamationType::class, $reponseReclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponseReclamationRepository->save($reponseReclamation, true);

            return $this->redirectToRoute('app_reponse_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse_reclamation/new.html.twig', [
            'reponse_reclamation' => $reponseReclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_reclamation_show', methods: ['GET'])]
    public function show(ReponseReclamation $reponseReclamation): Response
    {
        return $this->render('reponse_reclamation/show.html.twig', [
            'reponse_reclamation' => $reponseReclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reponse_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReponseReclamation $reponseReclamation, ReponseReclamationRepository $reponseReclamationRepository): Response
    {
        $form = $this->createForm(ReponseReclamationType::class, $reponseReclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponseReclamationRepository->save($reponseReclamation, true);

            return $this->redirectToRoute('app_reponse_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse_reclamation/edit.html.twig', [
            'reponse_reclamation' => $reponseReclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, ReponseReclamation $reponseReclamation, ReponseReclamationRepository $reponseReclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponseReclamation->getId(), $request->request->get('_token'))) {
            $reponseReclamationRepository->remove($reponseReclamation, true);
        }

        return $this->redirectToRoute('app_reponse_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}
