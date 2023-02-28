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
    #[Route('/api/blog', name: 'blog', methods: ['GET'])]
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
      //  $image = $request->query->get('image');
    
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
      
    }

