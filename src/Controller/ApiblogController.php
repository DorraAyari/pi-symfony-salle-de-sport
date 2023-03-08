<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiblogController extends AbstractController
{
    
    #[Route('/api/bloggg', name: 'blogg', methods: ['GET'])]
    
    public function blog(BlogRepository $blogRepository, SerializerInterface $serializer): JsonResponse
    {
        $blog = $blogRepository->findAll();
        $json = $serializer->serialize($blog, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            },
            'attributes' => ['id', 'nom', 'description','moredescreption','slogan']
        ]);
    
        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/api/ajouterblog', name: 'add_blog', methods: ['GET','POST'])]
    
    public function ajouterblog(Request $request){
        $blog = new Blog();
        $nom = $request->query->get('nom');
        $description = $request->query->get('description');
        $moredescreption = $request->query->get('moredescreption');
        $slogan = $request->query->get('slogan');
        // $image = $request->query->get('image');
    
        $blog->setNom($nom);
        $blog->setDescription($description);
        $blog->setMoredescreption($moredescreption);
        $blog->setSlogan($slogan);
       // $coach->setImage($image);
        $em = $this->getDoctrine()->getManager();
        $em->persist($blog);
        $em->flush();
        $serializer = new Serializer ([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($blog);
        return new JsonResponse($formatted);
    
    }
    #[Route('/api/DeleteBlog', name: 'delete_blog', methods: ['GET'])]

     public function deleteBlogAction(Request $request) {

        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository(Blog::class)->find($id);
        if($blog!=null ) {
            $em->remove($blog);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Blog a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id reclamation invalide.");


    }
    
    #[Route('/api/updateBlog', name: 'update_blog', methods: ['GET'])]
    public function modifierBlogh(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $blog = $this->getDoctrine()->getManager()
            ->getRepository(Blog::class)
            ->find($request->get("id"));
    
        if ($blog) {
            $blog->setNom($request->get("nom"));
            $blog->setDescription($request->get("description"));
            $blog->setMoredescreption($request->get("moredescreption"));
            $blog->setSlogan($request->get("slogan"));
           
    
            $em->persist($blog);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("blog a ete modifiee avec success.");
            return new JsonResponse($formatted);
        } else {
            return new JsonResponse("Blog non trouve");
        }
    }
      
    } 

