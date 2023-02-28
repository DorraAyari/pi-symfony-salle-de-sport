<?php

namespace App\Entity;

use App\Repository\CommandRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandRepository::class)]
class Command
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_comd = null;

    #[ORM\ManyToOne(inversedBy: 'Cmd')]
    private ?Produit $Cmd = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdComd(): ?int
    {
        return $this->id_comd;
    }

    public function setIdComd(int $id_comd): self
    {
        $this->id_comd = $id_comd;

        return $this;
    }

    public function getCmd(): ?Produit
    {
        return $this->cmd;
    }

    public function setCmd(?Produit $cmd): self
    {
        $this->cmd = $cmd;

        return $this;
    }
}
