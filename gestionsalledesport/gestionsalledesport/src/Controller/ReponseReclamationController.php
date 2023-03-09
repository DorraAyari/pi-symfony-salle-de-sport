<?php

namespace App\Controller;

use App\Entity\ReponseReclamation;
use App\Form\ReponseReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseReclamationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reponse/reclamation')]
class ReponseReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reponse_reclamation_index', methods: ['GET'])]
    public function index(Request $request,ReclamationRepository $reclamationRepository,PaginatorInterface $paginator): Response
    {
        $reclamations = $reclamationRepository->findAll();
        $reclamations = $paginator->paginate(
            $reclamations, /* query NOT result */
            $request->query->getInt('page', 1),
            2
        );

        return $this->render('reponse_reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    #[Route('/show/{id}', name: 'app_reponse_reclamation_index_rep', methods: ['GET'])]
    public function indexRep(Request $request,int $id,ReponseReclamationRepository $reponseReclamationRepository,ReclamationRepository $reclamationRepository,PaginatorInterface $paginator): Response
    {
        $reclamation = $reclamationRepository->findOneBy([
            'id' => $id
        ]);

        $reponses = $reponseReclamationRepository->findBy([
            'reclamation' => $reclamation
        ]);

        return $this->render('reponse_reclamation/ShowRep.html.twig', [
            'reponses' => $reponses,
        ]);
    }

    #[Route('/new/{id}', name: 'app_reponse_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request,int $id,ReclamationRepository $reclamationRepository, ReponseReclamationRepository $reponseReclamationRepository): Response
    {

        $reponseReclamation = new ReponseReclamation();
        $form = $this->createForm(ReponseReclamationType::class, $reponseReclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamations = $reclamationRepository->findOneBy([
                'id' => $id
            ]);
            $reponseReclamation->setReclamation($reclamations);
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

    #[Route('/edit/{id}', name: 'app_reponse_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReponseReclamation $reponseReclamation, ReponseReclamationRepository $reponseReclamationRepository): Response
    {
        $form = $this->createForm(ReponseReclamationType::class, $reponseReclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponseReclamationRepository->save($reponseReclamation, true);

            return $this->redirectToRoute('app_reponse_reclamation_index_rep', [  'id' =>  $reponseReclamation->getReclamation()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse_reclamation/edit.html.twig', [
            'reponse_reclamation' => $reponseReclamation,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_reponse_reclamation_delete', methods: ['GET','DELETE'])]
    public function delete(ManagerRegistry $doctrine, ReponseReclamationRepository $reponseReclamationRepository,int $id)
    {
        $rep = $reponseReclamationRepository->find($id);

        $entityyManager = $doctrine->getManager();
        $entityyManager->remove($rep);
        $entityyManager->flush();


        return $this->redirectToRoute('app_reponse_reclamation_index_rep', [  'id' =>  $rep->getReclamation()->getId()], Response::HTTP_SEE_OTHER);

    }
}
