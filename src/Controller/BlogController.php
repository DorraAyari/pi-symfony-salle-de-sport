<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;

use App\Repository\BlogRepository;
use App\Repository\CommentaireRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    #[Route('/detailsblog/{id}', name: 'detailsblog')]
    public function details(BlogRepository $blogRepository,$id,Security $security,Request $request,ManagerRegistry $doctrine): Response
    {
        $blog = $blogRepository->find($id);
        $commentaire = new Commentaire;
        $commentForm = $this->createForm(CommentaireType::class,$commentaire);
        $commentForm->handleRequest($request);
        if ($commentForm ->IsSubmitted()&& $commentForm->isValid()){
            $user = $security->getUser();
        $commentaire->setUser($user);
            $commentaire->setBlogid($blog);
                 $em1=$doctrine->getManager();
                //persist=ajouter
                $em1->persist($commentaire);
                //flush=push
                $em1->flush();
              
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
    // delete commencter 
    #[Route('/delete-comment/{id}', name: 'delete_comment')]
    public function deleteComment(Request $request, Commentaire $commentaire): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($commentaire);
        $em->flush();
        return $this->redirectToRoute('detailsblog', ['id' => $commentaire->getBlogid()->getId()]);
    }
 }


