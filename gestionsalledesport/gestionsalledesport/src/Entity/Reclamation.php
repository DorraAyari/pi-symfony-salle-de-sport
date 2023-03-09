<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['Reclamation', 'posts:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message : "nom obligatoire")]
    #[Groups(['Reclamation', 'posts:read'])]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message : "prenom obligatoire")]
    #[Groups(['Reclamation', 'posts:read'])]

    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min:7)]
    #[Assert\NotBlank,Email]
    #[Groups(['Reclamation', 'posts:read'])]

    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message : "message obligatoire")]
    #[Groups(['Reclamation', 'posts:read'])]

    private ?string $Message = null;

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

     public function __toString()
     {
     return $this->Nom;
     }
}
