<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
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


class ApiCoachController extends AbstractController
{
   
    
    #[Route('/api/produit', name: 'prpduit', methods: ['GET'])]
public function coachs(ProduitRepository $produitRepository, SerializerInterface $serializer): JsonResponse
{
    $produit = $coachRepository->findAll();
    $json = $serializer->serialize($coachs, 'json', [
        'circular_reference_handler' => function ($object) {
            return $object->getId();
        },
        'attributes' => ['id', 'nom', 'description','prix']
    ]);

    return new JsonResponse($json, Response::HTTP_OK, [], true);
}
#[Route('/api/ajouterproduit', name: 'add_produit', methods: ['GET','POST'])]

public function ajouterProduit(Request $request){
    $produit = new Produit();
    $nom = $request->query->get('nom');
    $description = $request->query->get('description');
    $prix = $request->query->get('prix');
    
  //  $image = $request->query->get('image');

    $produit->setNom($nom);
    $produit->setDescription($description);
    $produit->setAge($prix);
    
    
   // $coach->setImage($image);
    $em = $this->getDoctrine()->getManager();
    $em->persist($produit);
    $em->flush();
    $serializer = new Serializer ([new ObjectNormalizer()]);
    $formatted = $serializer->normalize($produit);
    return new JsonResponse($formatted);

}
  
}
