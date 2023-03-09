<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTimeInterface;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Start = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Finish = null;

    #[ORM\Column(nullable: true)]
     
    #[Assert\Range(min:1, max:2, maxMessage:"The maximum capacity  is 40.")]
    private ?int $capacity = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?User $User = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Day = null;

    
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->Start;
    }

    public function setStart(\DateTimeInterface $Start): self
    {
        $this->Start = $Start;

        return $this;
    }

    public function getFinish(): ?\DateTimeInterface
    {
        return $this->Finish;
    }

    public function setFinish(\DateTimeInterface $Finish): self
    {
        $this->Finish = $Finish;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(?int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getDay(): ?\DateTimeInterface
    {
        return $this->Day;
    }

    public function setDay(\DateTimeInterface $Day): self
    {
        $this->Day = $Day;

        return $this;
    }

   
}