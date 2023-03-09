<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ApiReclamationController extends AbstractController
{
   
    
    #[Route('/api/Reclamation/new', name: 'app_reclamation_index', methods: ['GET'])]
public function reclamations(ReclamationRepository $reclamationRepository, SerializerInterface $serializer): JsonResponse
{
    $reclamation = $reclamationRepository->findAll();
    $json = $serializer->serialize($reclamation, 'json', [
        'circular_reference_handler' => function ($object) {
            return $object->getId();
        },
        'attributes' => ['id', 'nom', 'prenom','email','message']
    ]);

    return new JsonResponse($json, Response::HTTP_OK, [], true);
}
#[Route('/api/ajouterreclamation/new', name: 'app_reclamation_new', methods: ['GET','POST'])]

public function ajouterReclamation(Request $request){
    $reclamation = new Reclamation();
    $nom = $request->query->get('nom');
    $prenom = $request->query->get('prenom');
    $email = $request->query->get('email');
    $message = $request->query->get('message');
 


    $reclamation->setNom($nom);
    $reclamation->setPrenom($prenom);
    $reclamation->setEmail($email);
    $reclamation->setMessage($message);
   
 
    $em = $this->getDoctrine()->getManager();
    $em->persist($reclamation);
    $em->flush();
    $serializer = new Serializer ([new ObjectNormalizer()]);
    $formatted = $serializer->normalize($reclamation);
    return new JsonResponse($formatted);

}

    #[Route('/api/DeleteRclamation/new', name: 'app_reclamation_delete', methods: ['GET'])]

     public function deleteReclamationAction(Request $request) {

        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);
        if($reclamation!=null ) {
            $em->remove($reclamation);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Reclamation a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id reclamation invalide.");


    }
    
    #[Route('/api/updateReclamation/new', name: 'app_reclamation_edit', methods: ['GET'])]
    public function modifierReclamation(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $this->getDoctrine()->getManager()
            ->getRepository(Reclamation::class)
            ->find($request->get("id"));
    
        if ($reclamation) {
            $reclamation->setNom($request->get("nom"));
            $reclamation->setPrenom($request->get("prenom"));
            $reclamation->setEmail($request->get("email"));
            $reclamation->setMessage($request->get("message"));
           
    
            $em->persist($reclamation);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("reclamation a ete modifiee avec success.");
            return new JsonResponse($formatted);
        } else {
            return new JsonResponse("Reclamation non trouve");
        }
    }
    
   
}