<?php

namespace App\Entity;

use App\Repository\DetailcommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailcommandeRepository::class)]
class Detailcommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $idcommande;

    #[ORM\Column(type: 'string', length: 255)]
    private $idproduit;

    #[ORM\Column(type: 'float')]
    private $soustotal;

    #[ORM\Column(type: 'string', length: 255)]
    private $nameproduit;

    #[ORM\Column(type: 'integer')]
    private $quantite;

    #[ORM\Column(type: 'float')]
    private $prixunitaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdcommande(): ?string
    {
        return $this->idcommande;
    }

    public function setIdcommande(string $idcommande): self
    {
        $this->idcommande = $idcommande;

        return $this;
    }

    public function getIdproduit(): ?string
    {
        return $this->idproduit;
    }

    public function setIdproduit(string $idproduit): self
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    public function getSoustotal(): ?float
    {
        return $this->soustotal;
    }

    public function setSoustotal(float $soustotal): self
    {
        $this->soustotal = $soustotal;

        return $this;
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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixunitaire(): ?float
    {
        return $this->prixunitaire;
    }

    public function setPrixunitaire(float $prixunitaire): self
    {
        $this->prixunitaire = $prixunitaire;

        return $this;
    }
}
