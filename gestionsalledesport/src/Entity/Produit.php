<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $desc = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $prix = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProduit(): ?string
    {
        return $this->id;
    }

    public function setIdProduit(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNomProduit(): ?string
    {
        return $this->nom;
    }

    public function setNomProduit(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescProduit(): ?string
    {
        return $this->desc;
    }

    public function setDescProduit(string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getImageProduit(): ?string
    {
        return $this->image;
    }

    public function produit(string $image): self
    {
        $this->image = $image;

        return $this;
    }
    

    public function getPrixProduit(): ?string
    {
        return $this->prix;
    }

    public function setPrixProduit(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
