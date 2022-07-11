<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $commande;

    #[ORM\Column(type: 'string', length: 255)]
    private $nameclient;

    #[ORM\Column(type: 'string', length: 255)]
    private $statut;

    #[ORM\Column(type: 'date')]
    private $dateenvoi;

    #[ORM\Column(type: 'date')]
    private $datecreation;

    #[ORM\Column(type: 'integer')]
    private $numeroenvoi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommande(): ?string
    {
        return $this->commande;
    }

    public function setCommande(string $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getNameclient(): ?string
    {
        return $this->nameclient;
    }

    public function setNameclient(string $nameclient): self
    {
        $this->nameclient = $nameclient;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDateenvoi(): ?\DateTimeInterface
    {
        return $this->dateenvoi;
    }

    public function setDateenvoi(\DateTimeInterface $dateenvoi): self
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
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
}
