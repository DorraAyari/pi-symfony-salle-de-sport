<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Repository\CoachRepository;
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
   
    
    #[Route('/api/coach', name: 'coachs', methods: ['GET'])]
public function coachs(CoachRepository $coachRepository, SerializerInterface $serializer): JsonResponse
{
    $coachs = $coachRepository->findAll();
    $json = $serializer->serialize($coachs, 'json', [
        'circular_reference_handler' => function ($object) {
            return $object->getId();
        },
        'attributes' => ['id', 'nom', 'description','age','weight','height','occupation']
    ]);

    return new JsonResponse($json, Response::HTTP_OK, [], true);
}
#[Route('/api/ajoutercoach', name: 'add_coach', methods: ['GET','POST'])]

public function ajouterCoach(Request $request){
    $coach = new Coach();
    $nom = $request->query->get('nom');
    $description = $request->query->get('description');
    $age = $request->query->get('age');
    $weight = $request->query->get('weight');
    $height = $request->query->get('height');
    $occupation = $request->query->get('occupation');
  //  $image = $request->query->get('image');

    $coach->setNom($nom);
    $coach->setDescription($description);
    $coach->setAge($age);
    $coach->setWeight($weight);
    $coach->setHeight($height);
    $coach->setOccupation($occupation);
   // $coach->setImage($image);
    $em = $this->getDoctrine()->getManager();
    $em->persist($coach);
    $em->flush();
    $serializer = new Serializer ([new ObjectNormalizer()]);
    $formatted = $serializer->normalize($coach);
    return new JsonResponse($formatted);

}
  
}
