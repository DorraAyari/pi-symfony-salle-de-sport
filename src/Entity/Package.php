<?php

namespace App\Entity;

use App\Repository\PackageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: PackageRepository::class)]

 #[UniqueEntity("choices", message:"You have already selected a package type.")]
 
class Package
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column(length: 255)]
    private ?string $choices = null;

    #[ORM\ManyToOne(targetEntity:"App\Entity\User", inversedBy:"packages")]
    #[ORM\JoinColumn(name:"user_id", referencedColumnName:"id")]
    private ?User $User = null;

  
 
    



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

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

   
   
}