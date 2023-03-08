<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RatingRepository::class)]
class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    private $userId;
    public function __construct()
    {
        $this->userId = null;
    }
    

    #[ORM\ManyToOne(inversedBy: 'ratings',  cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(onDelete:"CASCADE")]

    private ?User $User = null;

    #[ORM\ManyToOne(inversedBy: 'ratings',  cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(onDelete:"CASCADE")]

    private ?cours $cours = null;

    #[ORM\Column]
    private ?int $stars = null;
   
    public function getId(): ?int
    {
        return $this->id;
    }

   
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
    public function getUser(): ?user
    {
        return $this->User;
    }

    public function setUser(?user $user): self
    {
        $this->User = $user;

        return $this;
    }

    public function getCours(): ?cours
    {
        return $this->cours;
    }

    public function setCours(?cours $cours): self
    {
        $this->cours = $cours;

        return $this;
    }

    public function getStars(): ?int
    {
        return $this->stars;
    }

    public function setStars(int $stars): self
    {
        $this->stars = $stars;

        return $this;
    }
}
