<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;

use App\Repository\BlogRepository;
use App\Repository\CommentaireRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
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
    public function details(BlogRepository $blogRepository,$id,Request $request,ManagerRegistry $doctrine): Response
    {
        $blog = $blogRepository->find($id);
        $commentaire = new Commentaire;
        $commentForm = $this->createForm(CommentaireType::class,$commentaire);
        $commentForm->handleRequest($request);
        if ($commentForm ->IsSubmitted()&& $commentForm->isValid()){
            $commentaire->setBlogid($blog);
                 $em1=$doctrine->getManager();
                //persist=ajouter
                $em1->persist($commentaire);
                //flush=push
                $em1->flush();
              // On récupère le contenu du champ parentid
                $parentid= $commentForm->get("parentid")->getData();
                 // On va chercher le commentaire correspondant
                 $em = $this->getDoctrine()->getManager();

                 if($parentid != null){
                 $parent = $em->getRepository(Commentaire::class)->find($parentid);
                  }
                // On définit le parent
                  $commentaire->setParent($parent ?? null);

                 $em->persist($commentaire);
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

