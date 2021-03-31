<?php

namespace App\Entity;

use App\Repository\CentreMedicalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CentreMedicalRepository::class)
 */
class CentreMedical
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_centre_medical;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numTel;

    public function __toString()
    {
        return $this->getNomCentreMedical();
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Service", mappedBy="centreMedical",cascade="all")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $services;

    public function __construct()
    {
        $this->services = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param mixed $services
     */
    public function setServices($services): void
    {
        $this->services = $services;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCentreMedical(): ?string
    {
        return $this->nom_centre_medical;
    }

    public function setNomCentreMedical(string $nom_centre_medical): self
    {
        $this->nom_centre_medical = $nom_centre_medical;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(?int $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }
}
