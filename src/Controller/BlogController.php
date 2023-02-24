<?php

namespace App\Controller;

<<<<<<< HEAD:src/Controller/BlogController.php
use App\Entity\Commentaire;
use App\Form\CommentaireType;

use App\Repository\BlogRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
=======
use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
>>>>>>> fayrouz-pi:gestionsalledesport/src/Controller/BlogController.php

class BlogController extends AbstractController
{
    
    #[Route('/listblog', name: 'listblog')]
    public function index(BlogRepository $blogRepository): Response
    {
        $blog=$blogRepository->findAll();
        return $this->render('blog/blog.html.twig', [
            'blog' => $blog,
            
        ]);
    }
<<<<<<< HEAD:src/Controller/BlogController.php
    #[Route('/detailsblog/{id}', name: 'detailsblog')]
    public function details(BlogRepository $blogRepository,$id,Request $request,ManagerRegistry $doctrine): Response
    {
        $blog = $blogRepository->find($id);
        $commentaire = new Commentaire;
        $commentForm = $this->createForm(CommentaireType::class,$commentaire);
        $commentForm->handleRequest($request);
        if ($commentForm ->IsSubmitted()&& $commentForm->isValid()){
            $commentaire->setBlogid($blog);
                 $em=$doctrine->getManager();
                //persist=ajouter
                $em->persist($commentaire);
                //flush=push
                $em->flush();
                return $this->render('blog/blogdetails.html.twig', [
                    'blog' => $blog,
                    'commentForm' => $commentForm->createView(),
        
                ]);
            }
        return $this->render('blog/blogdetails.html.twig', [
            'blog' => $blog,
            'commentForm' => $commentForm->createView(),

        ]);

       
    }
    //hnee besh naamel l commaentaire mteei 
//     #[Route('/addcomment', name: 'addcomment')]

//     public function addblogadmin(Request $request , ManagerRegistry $doctrine): Response
//  {
//     $commentaire = new Commentaire;
//     $form = $this->createForm(CommentaireType::class,$commentaire);
//     $form->handleRequest($request);
//     if ($form ->IsSubmitted()&& $form->isValid()){


    
//      // $date = new DateTime();
//      // $currentDate = $date->format('Y-m-d');
//      $em=$doctrine->getManager();
//     //persist=ajouter
//     $em->persist($commentaire);
//     //flush=push
//     $em->flush();
//     return $this->redirectToRoute('detailsblog', [
//  ]);
//     }
//     return $this->render('blog/blogdetails.html.twig', [
//      'commentaire' =>  $form->createView(),
     
//  ]);
 }

=======
}
>>>>>>> fayrouz-pi:gestionsalledesport/src/Controller/BlogController.php
