<?php

namespace App\Entity;

use App\Repository\CommentLikeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentLikeRepository::class)]
class CommentLike
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $isLiked = 0;

    #[ORM\JoinColumn(onDelete:"CASCADE")] 
    #[ORM\ManyToOne(inversedBy: 'commentLikes')]
    private ?user $user = null;
    
    #[ORM\JoinColumn(onDelete:"CASCADE")]
    #[ORM\ManyToOne(inversedBy: 'commentLikes')]
    private ?commentaire $commentaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsLiked(): ?bool
    {
        return $this->isLiked;
    }

    public function setIsLiked(bool $isLiked): self
    {
        $this->isLiked = $isLiked;

        return $this;
    }
   

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCommentaire(): ?commentaire
    {
        return $this->commentaire;
    }

    public function setCommentaire(?commentaire $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
    
    
    
}
