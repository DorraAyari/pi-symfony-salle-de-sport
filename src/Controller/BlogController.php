<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Blog;

use App\Entity\Commentaire;
use App\Entity\CommentLike;
use App\Form\CommentaireType;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentaireRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiPlatform\State\Pagination\PaginatorInterface;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BlogController extends AbstractController
{
    
    #[Route('/listblog', name: 'listblog')]
    public function index(BlogRepository $blogRepository): Response
    {
        $commentaire = new Commentaire;
        $blog=$blogRepository->findAll();
        return $this->render('blog/blog.html.twig', [
            'blog' => $blog,
            'commentaire'=>$commentaire,
            
        ]);
    }

    #[Route('/listblog', name: 'listblog')]
    public function index1(Request $request, BlogRepository $blogRepository): Response
    {
        
        $sort = $request->query->get('sort', 'desc');
        $blog = $blogRepository->findBy([], ['createdAt' => $sort]);
        if ($request->query->has('blog')) {
            $query = $request->query->get('blog');
            $blog = $blogRepository->searchByBlogName($query);
        } else {
            $blog = $blogRepository->findBy([], ['createdAt' => $sort]);
        }
        
        return $this->render('blog/blog.html.twig', [
            'blog' => $blog,
            'sort' => $sort,
        ]);
    }

    

    // #[Route('/notify', name: 'app_notify')]
    // public function index1(?string $notify=null): Response
    // {
      
    //     return $this->render('blogadmin/addblogadmin.html.twig', [
    //         'notify' => $notify,
            
    //     ]);
    // }

    

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
                    'commentaire'=>$commentaire,
                    'commentForm' => $commentForm->createView(),
        
                ]);
               
            }
        return $this->render('blog/blogdetails.html.twig', [
            'blog' => $blog,
            'commentaire'=>$commentaire,
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








    //pdffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
    #[Route('/blog/pdf', name: 'blog')]
public function pdf(BlogRepository $blogRepository): Response
{
    // Configuration de dompdf
    $pdfOptions= new Options();
    $pdfOptions->set('defaultFont','Arial');

    // initialisation pdf
    $dompdf=new Dompdf($pdfOptions);

    //retreive the events data from the database
    $blog = $blogRepository->findAll();

    //render the eventst from the database
    $html=$this->renderView('blog/pdf.html.twig',[
        'blog' => $blog,
    ]);
    //load html
    $dompdf->loadHtml($html);

    //setup the paper format
    $dompdf->setPaper('A4','Portrait');

    //render pdf as html content
    $dompdf->render();


    //save pdf as listedeparticipant pdf
    $pdfContent = $dompdf->output();
    
    // Create a response object
    $response = new Response();
    
    // Set the content type
    $response->headers->set('Content-Type', 'application/pdf');
    
    // Set the content of the response to the generated pdf content
    $response->setContent($pdfContent);
    
    // Set the content disposition header for file download
    $response->headers->set('Content-Disposition', 'attachment;filename="listedeparticipant.pdf"');
    
    // Return the response object
    return $response;

}
// shareeeeeeeeeeeeeeeeeeeeeeeeeeeeeee in faceboooook 



 }


