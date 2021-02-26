<?php

namespace App\Entity;

use App\Repository\LaboratoireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LaboratoireRepository::class)
 */
class Laboratoire
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
    private $nomLabo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseLabo;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telLabo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomLabo(): ?string
    {
        return $this->nomLabo;
    }

    public function setNomLabo(string $nomLabo): self
    {
        $this->nomLabo = $nomLabo;

        return $this;
    }

    public function getAdresseLabo(): ?string
    {
        return $this->adresseLabo;
    }

    public function setAdresseLabo(string $adresseLabo): self
    {
        $this->adresseLabo = $adresseLabo;

        return $this;
    }

    public function getTelLabo(): ?string
    {
        return $this->telLabo;
    }

    public function setTelLabo(string $telLabo): self
    {
        $this->telLabo = $telLabo;

        return $this;
    }
}
