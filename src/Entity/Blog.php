<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
#[ORM\Entity(repositoryClass: BlogRepository::class)]
class Blog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[assert\NotBlank(message:"nom obligatoire ")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"description champs obligatoire")]
    #[Assert\Type(
        type: 'string',
        message: 'description doit être une chaine de caractére.',
    )]
    private ?string $description = null;

    // #[ORM\Column(type: Types::DATE_MUTABLE)]
    // private ?\DateTimeInterface $date = null;

    // #[ORM\Column(length: 255)]
    // private ?string $image;

    // #[ORM\Column]
    // private ?\DateTime $createdAt = null;

    #[ORM\OneToMany(mappedBy: 'blogid', targetEntity: Commentaire::class)]
    private Collection $commentaire;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"more description champs obligatoire")]
    #[Assert\Type(
        type: 'string',
        message: 'le reste de la description doit être une chaine de caractére.',
    )]
    private ?string $moredescreption = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"slogan champs obligatoire")]
    #[Assert\Length(
        max: 5,
    maxMessage: "slogan ne peut pas dépasser {{ limit }} caractères.",
    )]
    private ?string $slogan = null;

    

    public function __construct()
    {
        $this->commentaire = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    // public function getDate(): ?\DateTimeInterface
    // {
    //     return $this->date;
    // }

    // public function setDate(\DateTimeInterface $date): self
    // {
    //     $this->date = $date;

    //     return $this;
    // }

    // public function getImage(): ?string
    // {
    //     return $this->image;
    // }

    // public function setImage(string $image): self
    // {
    //     $this->image = $image;

    //     return $this;
    // }

    // public function getCreatedAt(): ?\DateTime
    // {
    //     return $this->createdAt;
    // }

    // public function setCreatedAt(\DateTime $createdAt): self
    // {
    //     $this->createdAt = $createdAt;

    //     return $this;
    // }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaire(): Collection
    {
        return $this->commentaire;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaire->contains($commentaire)) {
            $this->commentaire->add($commentaire);
            $commentaire->setBlogid($this);
            


                    }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaire->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getBlogid() === $this) {
                $commentaire->setBlogid(null);
            }
        }

        return $this;
    }

    public function getMoredescreption(): ?string
    {
        return $this->moredescreption;
    }

    public function setMoredescreption(string $moredescreption): self
    {
        $this->moredescreption = $moredescreption;

        return $this;
    }

    public function getSlogan(): ?string
    {
        return $this->slogan;
    }

    public function setSlogan(string $slogan): self
    {
        $this->slogan = $slogan;

        return $this;
    }

  
}
