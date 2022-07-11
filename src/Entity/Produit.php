<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nameproduit;

    #[ORM\Column(type: 'string', length: 255)]
    private $idcategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameproduit(): ?string
    {
        return $this->nameproduit;
    }

    public function setNameproduit(string $nameproduit): self
    {
        $this->nameproduit = $nameproduit;

        return $this;
    }

    public function getIdcategorie(): ?string
    {
        return $this->idcategorie;
    }

    public function setIdcategorie(string $idcategorie): self
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }
}
