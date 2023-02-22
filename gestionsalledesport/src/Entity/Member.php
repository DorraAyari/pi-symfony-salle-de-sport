<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MemberRepository::class)]
class Member
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Surname = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column]
    private ?int $Age = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column]
    private ?int $Telnumber = null;

    #[ORM\Column(length: 255)]
    private ?string $Pack = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    public function setSurname(string $Surname): self
    {
        $this->Surname = $Surname;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTelnumber(): ?int
    {
        return $this->Telnumber;
    }

    public function setTelnumber(int $Telnumber): self
    {
        $this->Telnumber = $Telnumber;

        return $this;
    }

    public function getPack(): ?string
    {
        return $this->Pack;
    }

    public function setPack(string $Pack): self
    {
        $this->Pack = $Pack;

        return $this;
    }
}
