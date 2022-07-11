<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $motpasse;

    #[ORM\Column(type: 'string', length: 255)]
    private $statutconnexion;

    #[ORM\Column(type: 'date')]
    private $dateinscription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotpasse(): ?string
    {
        return $this->motpasse;
    }

    public function setMotpasse(string $motpasse): self
    {
        $this->motpasse = $motpasse;

        return $this;
    }

    public function getStatutconnexion(): ?string
    {
        return $this->statutconnexion;
    }

    public function setStatutconnexion(string $statutconnexion): self
    {
        $this->statutconnexion = $statutconnexion;

        return $this;
    }

    public function getDateinscription(): ?\DateTimeInterface
    {
        return $this->dateinscription;
    }

    public function setDateinscription(\DateTimeInterface $dateinscription): self
    {
        $this->dateinscription = $dateinscription;

        return $this;
    }
}
