<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\CommentLike;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentLikeController extends AbstractController
{
    
    //code of reagit
    #[Route('/comment/{id}/like', name:'comment_like')]
    public function commentLike(Request $request, Commentaire $commentaire)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
    
        $commentLike = $entityManager->getRepository(CommentLike::class)->findOneBy([
            'user' => $user,
            'commentaire' => $commentaire,
        ]);
    
        if (!$commentLike) {
            $commentLike = new CommentLike();
            $commentLike->setUser($user);
            $commentLike->setCommentaire($commentaire);
        }
    
        $commentLike->setIsLiked(true); // set isLiked to true for like
        $entityManager->persist($commentLike);
        $entityManager->flush();
    
        return $this->redirectToRoute('detailsblog', [
            'id' => $commentaire->getBlogid()->getId()
        ]);
    }
    
    #[Route('/comment/{id}/dislike', name:'comment_dislike')]
    public function commentDislike(Request $request, Commentaire $commentaire)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
    
        $commentLike = $entityManager->getRepository(CommentLike::class)->findOneBy([
            'user' => $user,
            'commentaire' => $commentaire,
        ]);
    
        if (!$commentLike) {
            $commentLike = new CommentLike();
            $commentLike->setUser($user);
            $commentLike->setCommentaire($commentaire);
        }
    
        $commentLike->setIsLiked(false); // set isLiked to false for dislike
        $entityManager->persist($commentLike);
        $entityManager->flush();
    
        return $this->redirectToRoute('detailsblog', [
            'id' => $commentaire->getBlogid()->getId()
        ]);
    }
    /**
     * @Route("/blog/{id}/like", name="app_blog_like", methods={"POST"})
     */
   
    
}
