<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     
    #[Assert\Range(min:1, max:40, maxMessage:"The maximum capacity is 40.")]
    private ?int $capacity = null;

    
    

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

   
}

