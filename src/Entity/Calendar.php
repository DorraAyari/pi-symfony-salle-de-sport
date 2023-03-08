<?php

namespace App\Entity;

use App\Repository\CalendarRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CalendarRepository::class)]
class Calendar
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ Titre obligatoire")]

    private ?string $title = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "Le champ date est obligatoire")]
    #[Assert\GreaterThan("today", message:"La date doit être postérieure à la date actuelle")]
    #[Assert\Expression(
        "this.getStart().format('H:i') >= '06:00' and this.getStart().format('H:i') <= '23:00'",
        message: 'La date doit être entre 06:00 et 23:00'
    )]
    #[Assert\Expression(
        "this.getEnd().format('H:i') >= '06:00' and this.getEnd().format('H:i') <= '23:00'",
        message: 'La date doit être entre 06:00 et 23:00'
    )]
    private ?\DateTimeInterface $start = null;
    
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "Le champ date est obligatoire")]
    #[Assert\GreaterThan("today", message:"La date doit être postérieure à la date actuelle")] 
    #[Assert\Expression(
        "this.getEnd().format('H:i') >= '06:00' and this.getEnd().format('H:i') <= '23:00'",
        message: 'La date doit être entre 06:00 et 23:00'
    )]
    private ?\DateTimeInterface $end = null;
    

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\Length(
        max: 255,
        maxMessage: 'La description ne doit pas dépasser 255 caractères',
    
    )]
    #[Assert\NotBlank(message: "Le champ description est obligatoire")]
    private ?string $description = null;

    #[ORM\Column(length: 7)]
    #[Assert\NotBlank(message: "Le champ background color est obligatoire")]
    private ?string $background_color = null;

    #[ORM\Column(length: 7)]
    #[Assert\NotBlank(message: "Le champ border color color est obligatoire")]

    private ?string $border_color = null;

    #[ORM\Column(length: 7)]
    private ?string $text_color = null;

    #[ORM\ManyToOne(inversedBy: 'calendars', cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(onDelete:"CASCADE")]

    #[Assert\NotBlank(message: "Le champ salle est obligatoire")]
    private ?Salle $Salle = null;

    #[ORM\ManyToOne(inversedBy: 'calendars',cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(onDelete:"CASCADE")]
    #[Assert\NotBlank(message: "Le champ cours est obligatoire")]

    private ?Cours $Cours = null;

    #[ORM\ManyToOne(inversedBy: 'calendars',cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(onDelete:"CASCADE")]
    private ?Coach $Coach = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): self
    {
        $this->end = $end;

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

    public function getBackgroundColor(): ?string
    {
        return $this->background_color;
    }

    public function setBackgroundColor(string $background_color): self
    {
        $this->background_color = $background_color;

        return $this;
    }

    public function getBorderColor(): ?string
    {
        return $this->border_color;
    }

    public function setBorderColor(string $border_color): self
    {
        $this->border_color = $border_color;

        return $this;
    }

    public function getTextColor(): ?string
    {
        return $this->text_color;
    }

    public function setTextColor(string $text_color): self
    {
        $this->text_color = $text_color;

        return $this;
    }

    public function getSalle(): ?salle
    {
        return $this->Salle;
    }

    public function setSalle(?salle $Salle): self
    {
        $this->Salle = $Salle;

        return $this;
    }

    public function getCours(): ?Cours
    {
        return $this->Cours;
    }

    public function setCours(?Cours $Cours): self
    {
        $this->Cours = $Cours;

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
}
