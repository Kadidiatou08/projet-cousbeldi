<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numeroenvoi;

    #[ORM\Column(type: 'string', length: 255)]
    private $typelivraison;

    #[ORM\Column(type: 'float')]
    private $prixlivraison;

    #[ORM\Column(type: 'integer')]
    private $numeroregiondestinateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroenvoi(): ?int
    {
        return $this->numeroenvoi;
    }

    public function setNumeroenvoi(int $numeroenvoi): self
    {
        $this->numeroenvoi = $numeroenvoi;

        return $this;
    }

    public function getTypelivraison(): ?string
    {
        return $this->typelivraison;
    }

    public function setTypelivraison(string $typelivraison): self
    {
        $this->typelivraison = $typelivraison;

        return $this;
    }

    public function getPrixlivraison(): ?float
    {
        return $this->prixlivraison;
    }

    public function setPrixlivraison(float $prixlivraison): self
    {
        $this->prixlivraison = $prixlivraison;

        return $this;
    }

    public function getNumeroregiondestinateur(): ?int
    {
        return $this->numeroregiondestinateur;
    }

    public function setNumeroregiondestinateur(int $numeroregiondestinateur): self
    {
        $this->numeroregiondestinateur = $numeroregiondestinateur;

        return $this;
    }
}
