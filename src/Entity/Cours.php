<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Nom champs obligatoire")]

    private ?string $nom = null;

    #[ORM\ManyToOne(inversedBy: 'Cours')]
    #[Assert\NotBlank(message:"Coach champs obligatoire")]
    private ?Coach $Coach = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Description champs obligatoire")]
    #[Assert\Length(
        max: 255,
        maxMessage: 'La description ne doit pas dépasser 255 caractères',
    )]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'Cours', targetEntity: Calendar::class)]
    
    private Collection $calendars;

    #[ORM\ManyToOne(inversedBy: 'Cours')]
    #[ORM\JoinColumn(onDelete:"CASCADE")]

    #[Assert\NotBlank(message:"Salle champs obligatoire")]

    private ?Salle $Salle = null;

    public function __construct()
    {
        $this->calendars = new ArrayCollection();
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

    public function getCoach(): ?Coach
    {
        return $this->Coach;
    }

    public function setCoach(?Coach $Coach): self
    {
        $this->Coach = $Coach;

        return $this;
    }
  
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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

    /**
     * @return Collection<int, Calendar>
     */
    public function getCalendars(): Collection
    {
        return $this->calendars;
    }

    public function addCalendar(Calendar $calendar): self
    {
        if (!$this->calendars->contains($calendar)) {
            $this->calendars->add($calendar);
            $calendar->setCours($this);
        }

        return $this;
    }

    public function removeCalendar(Calendar $calendar): self
    {
        if ($this->calendars->removeElement($calendar)) {
            // set the owning side to null (unless already changed)
            if ($calendar->getCours() === $this) {
                $calendar->setCours(null);
            }
        }

        return $this;
    }

    public function getSalle(): ?Salle
    {
        return $this->Salle;
    }

    public function setSalle(?Salle $Salle): self
    {
        $this->Salle = $Salle;

        return $this;
    }
}
