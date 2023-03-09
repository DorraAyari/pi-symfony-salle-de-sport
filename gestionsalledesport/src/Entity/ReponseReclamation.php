<?php

namespace App\Entity;

use App\Repository\ReponseReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseReclamationRepository::class)]
class ReponseReclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Insérer la réponse")]
    private ?string $Reponse = null;

    #[ORM\OneToOne(mappedBy: 'Reponses', cascade: ['persist', 'remove'])]
    private ?Reclamation $reclamation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReponse(): ?string
    {
        return $this->Reponse;
    }

    public function setReponse(string $Reponse): self
    {
        $this->Reponse = $Reponse;

        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): self
    {
        // unset the owning side of the relation if necessary
        if ($reclamation === null && $this->reclamation !== null) {
            $this->reclamation->setReponses(null);
        }

        // set the owning side of the relation if necessary
        if ($reclamation !== null && $reclamation->getReponses() !== $this) {
            $reclamation->setReponses($this);
        }

        $this->reclamation = $reclamation;

        return $this;
    }
}
