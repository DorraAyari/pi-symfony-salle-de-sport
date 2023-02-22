<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
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
    

}
