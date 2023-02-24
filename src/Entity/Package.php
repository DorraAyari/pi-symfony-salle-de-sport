<?php

namespace App\Entity;

use App\Repository\PackageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PackageRepository::class)]
class Package
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column(length: 255)]
    private ?string $choices = null;


    public function getId(): ?int
    {
        return $this->id;
    }



    public function getChoices(): ?string
    {
        return $this->choices;
    }

    public function setChoices(string $choices): self
    {
        $this->choices = $choices;

        return $this;
    }

   
}
