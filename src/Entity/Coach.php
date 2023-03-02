<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CoachRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CoachRepository::class)]
class Coach
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message:"Nom champs obligatoire")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        max: 255,
        maxMessage: 'La description ne doit pas dépasser 255 caractères',
    )]
    #[Assert\NotBlank(message:"Nom champs obligatoire")]

    private ?string $description = null;

    


    #[ORM\OneToMany(mappedBy: 'Coach', targetEntity: Cours::class)]
    private Collection $cours;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Age champs obligatoire")]
    #[Assert\Type(
        type: 'integer',
        message: 'Age doit être un entier.',
    )]
    private ?int $age = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Weight champs obligatoire")]

    private ?string $weight = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Height champs obligatoire")]

    private ?string $height = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Occupation champs obligatoire")]

    private ?string $occupation = null;

    #[ORM\Column(length: 255)]
     private ?string $image;

    #[ORM\OneToMany(mappedBy: 'Coach', targetEntity: Calendar::class)]
    private Collection $calendars;

 
    public function __construct()
    {
        $this->cours = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

   
   
 
   public function __toString() {
    return $this->nom;
}

   /**
    * @return Collection<int, Cours>
    */
   public function getCours(): Collection
   {
       return $this->cours;
   }

   public function addCour(Cours $cour): self
   {
       if (!$this->cours->contains($cour)) {
           $this->cours->add($cour);
           $cour->setCoach($this);
       }

       return $this;
   }

   public function removeCour(Cours $cour): self
   {
       if ($this->cours->removeElement($cour)) {
           // set the owning side to null (unless already changed)
           if ($cour->getCoach() === $this) {
               $cour->setCoach(null);
           }
       }

       return $this;
   }

   public function getAge(): ?int
   {
       return $this->age;
   }

   public function setAge(int $age): self
   {
       $this->age = $age;

       return $this;
   }

   public function getWeight(): ?string
   {
       return $this->weight;
   }

   public function setWeight(string $weight): self
   {
       $this->weight = $weight;

       return $this;
   }

   public function getHeight(): ?string
   {
       return $this->height;
   }

   public function setHeight(string $height): self
   {
       $this->height = $height;

       return $this;
   }

   public function getOccupation(): ?string
   {
       return $this->occupation;
   }

   public function setOccupation(string $occupation): self
   {
       $this->occupation = $occupation;

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
           $calendar->setCoach($this);
       }

       return $this;
   }

   public function removeCalendar(Calendar $calendar): self
   {
       if ($this->calendars->removeElement($calendar)) {
           // set the owning side to null (unless already changed)
           if ($calendar->getCoach() === $this) {
               $calendar->setCoach(null);
           }
       }

       return $this;
   }



  

}
