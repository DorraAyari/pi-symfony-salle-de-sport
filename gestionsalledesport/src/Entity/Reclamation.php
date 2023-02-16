<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min:7)]
    #[Assert\NotBlank,\Email]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $Message = null;

    #[ORM\OneToOne(inversedBy: 'reclamation', cascade: ['persist', 'remove'])]
    private ?ReponseReclamation $Reponses = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(string $Message): self
    {
        $this->Message = $Message;

        return $this;
    }

    public function getReponses(): ?ReponseReclamation
    {
        return $this->Reponses;
    }

    public function setReponses(?ReponseReclamation $Reponses): self
    {
        $this->Reponses = $Reponses;

        return $this;
    }

    public function __toString()
    {
        return $this->Nom;
    }
}
