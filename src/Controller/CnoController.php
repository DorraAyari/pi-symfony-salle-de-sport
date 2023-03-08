
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


class CnoController extends AbstractController
{
   
    
    #[Route('/api/produit', name: 'prpduit', methods: ['GET'])]
public function produit(ProduitRepository $produitRepository, SerializerInterface $serializer): JsonResponse
{
    $produit = $produitRepository->findAll();
    $json = $serializer->serialize($produit, 'json', [
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
    $produit->setPrix($prix);
    
    
   // $coach->setImage($image);
    $em = $this->getDoctrine()->getManager();
    $em->persist($produit);
    $em->flush();
    $serializer = new Serializer ([new ObjectNormalizer()]);
    $formatted = $serializer->normalize($produit);
    return new JsonResponse($formatted);

}
#[Route('/api/Supprimer', name: 'supprimer_produit', methods: ['GET'])]

     public function ProduitSupprimerAction(Request $request) {

        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->find($id);
        if($produit!=null ) {
            $em->remove($produit);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Produit a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id reclamation invalide.");


    }
    
    #[Route('/api/updateproduit', name: 'update_produit', methods: ['GET'])]
    public function modifierproduit(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $produit = $this->getDoctrine()->getManager()
            ->getRepository(Produit::class)
            ->find($request->get("id"));
    
        if ($produit) {
            $produit->setNom($request->get("nom"));
            $produit->setDescription($request->get("description"));
            $produit->setPrix($request->get("prix"));
            
    
            $em->persist($produit);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("produit est modifiee avec success.");
            return new JsonResponse($formatted);
        } else {
            return new JsonResponse("produit non trouve");
        }
    }
  
}
