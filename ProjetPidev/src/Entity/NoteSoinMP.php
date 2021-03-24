<?php

namespace App\Entity;

use App\Repository\NoteSoinMPRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoteSoinMPRepository::class)
 */
class NoteSoinMP
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $valeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avis;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="noteSoinMPs")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=SoinMP::class, inversedBy="noteSoinMPs")
     */
    private $soinMP;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(?string $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(?string $avis): self
    {
        $this->avis = $avis;

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

    public function getSoinMP(): ?SoinMP
    {
        return $this->soinMP;
    }

    public function setSoinMP(?SoinMP $soinMP): self
    {
        $this->soinMP = $soinMP;

        return $this;
    }
}
