<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

  
  

 
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"NOM est obligatoir")]
    
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Description est obligatoir")]
    #[Assert\Length( min: 2,max: 200,)]
    private ?string $description = null;

    #[ORM\Column]
    
    #[Assert\NotBlank(message:"Prix est obligatoir")]
    #[Assert\Positive]
    private ?int $prix;


    #[ORM\Column(length: 255)]
    
    
    private ?string $image = null;


    #[ORM\OneToMany(mappedBy: 'Cmd', targetEntity: Command::class)]
    private Collection $cmd;

    public function __construct()
    {
        $this->Cmd = new ArrayCollection();
    }


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

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

  //  public function getImage(): ?string
   // {
  //      return $this->image;
  //  }

 //   public function setImage(string $image): self
  //  {
   //     $this->image = $image;

     //   return $this;
   // }

    /**
     * @return Collection<int, Command>
     */
    public function getCmd(): Collection
    {
        return $this->Cmd;
    }

    public function addCmd(Command $Cmd): self
    {
        if (!$this->Cmd->contains($Cmd)) {
            $this->Cmd->add($Cmd);
            $Cmd->setCmd($this);
        }

        return $this;
    }

    public function removeCmd(Command $Cmd): self
    {
        if ($this->Cmd->removeElement($Cmd)) {
            // set the owning side to null (unless already changed)
            if ($Cmd->getCmd() === $this) {
                $Cmd->setCmd(null);
            }
        }

        return $this;
    }


}
