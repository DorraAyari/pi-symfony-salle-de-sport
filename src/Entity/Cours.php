<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Mime\Email;
use App\Repository\CoursRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    private $rating;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Nom champs obligatoire")]

    private ?string $nom = null;

    #[ORM\ManyToOne(inversedBy: 'Cours')]
    #[ORM\JoinColumn(onDelete : "CASCADE")]
    #[Assert\NotBlank(message:"Coach champs obligatoire")]
    private ?Coach $Coach = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Description champs obligatoire")]
    #[Assert\Length(
        max: 10000,
        maxMessage: 'La description ne doit pas dépasser 255 caractères',
    )]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'Cours', targetEntity: Calendar::class, cascade: ["persist", "remove"])]
    
    private Collection $calendars;

    #[ORM\ManyToOne(inversedBy: 'Cours', cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(onDelete:"CASCADE")]

    #[Assert\NotBlank(message:"Salle champs obligatoire")]

    private ?Salle $Salle = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Nombre de place champs obligatoire")]

    private ?int $nbPlacesTotal;

    #[ORM\Column]
    private ?int $reservation = null;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'Cours', cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(onDelete:"CASCADE")]
    private Collection $User;

    #[ORM\OneToMany(mappedBy: 'cours', targetEntity: Rating::class, cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(onDelete:"CASCADE")]

    private Collection $ratings;

 

    public function __construct()
    {
        $this->calendars = new ArrayCollection();
        $this->reservation = 0;
    //  $this->User = new ArrayCollection();
    $this->User = new ArrayCollection();
    $this->ratings = new ArrayCollection();

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
    public function getNbPlacesDisponibles(): int
{
    return $this->nbPlacesTotal - $this->reservation;
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

  

    public function setNbPlacesTotal(int $nbPlacesTotal): self
    {
        $this->nbPlacesTotal = $nbPlacesTotal;

        return $this;
    }
    public function getNbPlacesTotal(): int
    {
        return $this->nbPlacesTotal - $this->reservation;
    }
    
    public function getReservation(): ?Collection
    {
        return $this->reservation;
    }

    public function setReservation(int $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }

   
    public function reserve(int $nbPlaces): bool
{
    $placesDisponibles = $this->getNbPlacesTotal();
    if ($nbPlaces > $placesDisponibles) {
        return false; // pas assez de places disponibles
    }
    $this->reservation += $nbPlaces;
    return true;
}
public function cancelReservation(int $nbPlaces): bool
{
    if ($nbPlaces > $this->reservation) {
        return false; // impossible d'annuler plus de réservations que le nombre actuel de réservations
    }
    $this->reservation -= $nbPlaces;
    return true;
}
public function getPlacesDisponibles(): int
{
    return $this->getNbPlacesTotal() - $this->reservation;
}

/**
 * @return Collection<int, User>
 */
public function getUsers(): Collection
{
    return $this->User;
}

public function addUser(User $user): self
{
    if (!$this->User->contains($user)) {
        $this->User->add($user);
        $user->addCour($this);
    }

    return $this;
}

public function removeUser(User $user): self
{
    if ($this->User->removeElement($user)) {
        $user->removeCour($this);
    }

    return $this;
}

/**
 * @return Collection<int, Rating>
 */
public function getRatings(): Collection
{
    return $this->ratings;
}
public function setRatings(Rating $rating): self
{
     $this->ratings = $rating;

    return $this;
}
public function addRating(Rating $rating): self
{
    if (!$this->ratings->contains($rating)) {
        $this->ratings->add($rating);
        $rating->setCours($this);
    }

    return $this;
}

public function removeRating(Rating $rating): self
{
    if ($this->ratings->removeElement($rating)) {
        // set the owning side to null (unless already changed)
        if ($rating->getCours() === $this) {
            $rating->setCours(null);
        }
    }

    return $this;
}




}
