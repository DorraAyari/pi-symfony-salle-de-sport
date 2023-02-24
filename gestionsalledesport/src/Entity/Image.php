<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'images')]
    private ?coach $coach = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoach(): ?coach
    {
        return $this->coach;
    }

    public function setCoach(?coach $coach): self
    {
        $this->coach = $coach;

        return $this;
    }
}
