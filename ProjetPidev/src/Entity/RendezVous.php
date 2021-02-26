<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateRendezVous;

    /**
     * @ORM\Column(type="date")
     */
    private $heureRendezVous;

    /**
     * @ORM\Column(type="integer")
     */
    private $disponibiliteMedecin;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="listRendezvous")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRendezVous(): ?\DateTimeInterface
    {
        return $this->dateRendezVous;
    }

    public function setDateRendezVous(\DateTimeInterface $dateRendezVous): self
    {
        $this->dateRendezVous = $dateRendezVous;

        return $this;
    }

    public function getHeureRendezVous(): ?\DateTimeInterface
    {
        return $this->heureRendezVous;
    }

    public function setHeureRendezVous(\DateTimeInterface $heureRendezVous): self
    {
        $this->heureRendezVous = $heureRendezVous;

        return $this;
    }

    public function getDisponibiliteMedecin(): ?int
    {
        return $this->disponibiliteMedecin;
    }

    public function setDisponibiliteMedecin(int $disponibiliteMedecin): self
    {
        $this->disponibiliteMedecin = $disponibiliteMedecin;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
