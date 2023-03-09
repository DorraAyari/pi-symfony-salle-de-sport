<?php

namespace App\Controller;

use App\Entity\PdfGeneratorService;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]

    public function index(Request $request, ReclamationRepository $reclamationRepository): Response
{
    $reclamationsByEmail = $reclamationRepository->findByEmail();

    // Récupérer la valeur de la recherche
    $reclamationNom = $request->query->get('reclamation');

    // Récupérer toutes les réclamations
    $reclamations = $reclamationRepository->findAll();

    // Filtrer les réclamations si la recherche est spécifiée
    if ($reclamationNom) {
        $reclamations = $reclamationRepository->findByNom($reclamationNom);
    }

    // Trier les réclamations par email

    // Passer les réclamations et les résultats de la recherche et du tri au modèle Twig
    return $this->render('reclamation/index.html.twig', [
        'reclamations' => $reclamations,
        'reclamationsByEmail' => $reclamationsByEmail,
        'reclamationNom' => $reclamationNom,
    ]);
}


    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $form,
            

        ]);
       
    
    }

    
    #[Route('/afficher/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
            
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation, true);
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
   //-----------------------------------PDF:-------------------------------------------
   #[Route('/pdf', name: 'pdf')]
   public function pdf(ReclamationRepository $reclamationRepository,Request $request,PaginatorInterface $paginator)  
   {
       
       $reclamations = $reclamationRepository->findAll();
       $reclamations = $paginator->paginate(
           $reclamations, /* query NOT result */
           $request->query->getInt('page', 1),
           2
       );
       $pdfOptions = new Options();
       $pdfOptions->set('defaultFont', 'Arial');
       
       // Instantiate Dompdf with our options
       
////////////////////////////////////////////////////////////////////////////// ti wallahy le naerf kifh sala7tha ema hawka tsal7et w maghir chatgpt :)
$dompdf=new dompdf($pdfOptions);

$pdfOptions->setDefaultFont('Courier');
//////////////////////////////////////////////////////////////////////////////

       // Retrieve the HTML generated in our twig file
       $html = $this->renderView('tables-data.html.twig', [
           'k'=>$reclamations
       ]);
       // Load HTML to Dompdf
       $dompdf->loadHtml($html);
       // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
       $dompdf->setPaper('A4', 'portrait');
       // Render the HTML as PDF
       $dompdf->render();
       // Output the generated PDF to Browser (inline view)
       $dompdf->stream("reclamation.pdf", [
           "Attachment" => true
       ]); 
   }
  
#[Route("/r/search_recc", name:"search_Reclamation", methods:"GET")]
     
public function search_rec(Request $request, NormalizerInterface $Normalizer, ReclamationRepository $ReclamationRepository): Response
{

    $requestString = $request->get('searchValue');
    $requestString3 = $request->get('orderid');

    $rdv = $ReclamationRepository->findReclamation($requestString, $requestString3);
    $jsoncontentc = $Normalizer->normalize($rdv, 'json', ['groups' => 'posts:read']);
    $jsonc = json_encode($jsoncontentc);
    if ($jsonc == "[]") {
        return new Response(null);
    } else {
        return new Response($jsonc);
    }
}
}

   
