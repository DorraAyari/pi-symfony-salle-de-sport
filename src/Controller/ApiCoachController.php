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
//   $image = $request->query->get('image');

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

    #[Route('/api/DeleteCoach', name: 'delete_coach', methods: ['GET'])]

     public function deleteCoachAction(Request $request) {

        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $coach = $em->getRepository(Coach::class)->find($id);
        if($coach!=null ) {
            $em->remove($coach);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Coach a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id reclamation invalide.");


    }
    
    #[Route('/api/updateCoach', name: 'update_coach', methods: ['GET'])]
    public function modifierCoach(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $coach = $this->getDoctrine()->getManager()
            ->getRepository(Coach::class)
            ->find($request->get("id"));
    
        if ($coach) {
            $coach->setNom($request->get("nom"));
            $coach->setDescription($request->get("description"));
            $coach->setAge($request->get("age"));
            $coach->setWeight($request->get("weight"));
            $coach->setHeight($request->get("height"));
            $coach->setOccupation($request->get("occupation"));
    
            $em->persist($coach);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("coach a ete modifiee avec success.");
            return new JsonResponse($formatted);
        } else {
            return new JsonResponse("Coach non trouve");
        }
    }
    
   
}
