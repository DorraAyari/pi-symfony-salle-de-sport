<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Form\BlogType;
use App\Repository\BlogRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use DateTime;

class BlogadminController extends AbstractController
{
    #[Route('/blogadmin', name: 'app_blogadmin')]
    public function index(): Response
    {
        return $this->render('blogadmin/index.html.twig', [
            'controller_name' => 'BlogadminController',
        ]);
    }
    #[Route('/listBlog', name: 'listBlog')]
    public function listBlog(BlogRepository $blogRepository): Response
    {
        $blog=$blogRepository->findAll();
        return $this->render('blogadmin/index.html.twig', [
            'blog' => $blog,
            
        ]);
    }
    // liste des blog dans l'admin 
    #[Route('/afficheblogadmin', name: 'afficheblogadmin')]
    public function afficheblogadmin(BlogRepository $blogRepository): Response
    {
        $blog=$blogRepository->findAll();
        return $this->render('blogadmin/listblog.html.twig', [
            'blog' => $blog,
            
        ]);
    }
    
         #[Route('/addblogadmin', name: 'addblog')]

       public function addblogadmin(Request $request , ManagerRegistry $doctrine): Response
    {
       $blog = new Blog;
       $form = $this->createForm(BlogType::class,$blog);
       $form->handleRequest($request);
       if ($form ->IsSubmitted()&& $form->isValid()){
        $image = $form->get('image')->getData();

        // On boucle sur les images
        foreach($image as $image){
            // On génère un nouveau nom de fichier
            $fichier = md5(uniqid()) . '.' . $image->guessExtension();

            // On copie le fichier dans le dossier uploads
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );

            // On stocke l'image dans la base de données (son nom)
            $blog->setImage($fichier);
        }
        $blog->setCreatedAt(new \DateTime());
        // $date = new DateTime();
        // $currentDate = $date->format('Y-m-d');
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($blog);
       //flush=push
       $em->flush();
       return $this->redirectToRoute('afficheblogadmin', [
    ]);
       }
       return $this->render('blogadmin/addblogadmin.html.twig', [
        'blog' => $form->createView(),
        
    ]);
    }
    //modifierr blog 
    #[Route('/updateblog/{id}', name: 'updateblog')]
    public function updateblog(Request $request , ManagerRegistry $doctrine, Blog $blog): Response
    {
       $form = $this->createForm(BlogType::class,$blog);
       $form->handleRequest($request);
       if ($form ->IsSubmitted()){
        $image = $form->get('image')->getData();

        // On boucle sur les images
        foreach($image as $image){
            // On génère un nouveau nom de fichier
            $fichier = md5(uniqid()) . '.' . $image->guessExtension();

            // On copie le fichier dans le dossier uploads
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );
        }
            // On stocke l'image dans la base de données (son nom)
            $blog->setImage($fichier);
        $em=$doctrine->getManager();
       //persist=ajouter
       $em->persist($blog);
       //flush=push
       $em->flush();
       return $this->redirectToRoute('afficheblogadmin', [
    ]);
       }
       return $this->renderForm('blogadmin/updateblogadmin.html.twig', [
        'blog' => $form,

    ]);
       
    }

    //delete blog 
    #[Route('deleteblog/{id}', name: 'deleteblog')]

    public function deleteblog($id , ManagerRegistry $doctrine): Response
{
    $em=$doctrine->getManager();
    $blog =$doctrine->getRepository(Blog::class);
    $blog =  $blog->find($id);
    $em->remove($blog);
$em->flush();
return $this->redirectToRoute('afficheblogadmin');

}
    
}
