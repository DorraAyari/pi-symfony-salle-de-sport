<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $comment = null;


    #[ORM\ManyToOne(inversedBy: 'commentaire')]
    private ?Blog $blogid = null;

   

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?User $user = null;

   


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getBlogid(): ?Blog
    {
        return $this->blogid;
    }

    public function setBlogid(?Blog $blogid): self
    {
        $this->blogid = $blogid;

        return $this;
    }

   

    /**
     * @return Collection<int, self>
     */
  

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
    

}
