<?php

namespace App\Entity;

use App\Repository\CentreMedicalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", length=50)
     */
    private $nomCentreMedical;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseCentreMedical;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCentreMedical;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $numTelCentreMedical;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mailCentreMedical;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="centreMedical", orphanRemoval=true)
     */
    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCentreMedical(): ?string
    {
        return $this->nomCentreMedical;
    }

    public function setNomCentreMedical(string $nomCentreMedical): self
    {
        $this->nomCentreMedical = $nomCentreMedical;

        return $this;
    }

    public function getAdresseCentreMedical(): ?string
    {
        return $this->adresseCentreMedical;
    }

    public function setAdresseCentreMedical(string $adresseCentreMedical): self
    {
        $this->adresseCentreMedical = $adresseCentreMedical;

        return $this;
    }

    public function getTypeCentreMedical(): ?string
    {
        return $this->typeCentreMedical;
    }

    public function setTypeCentreMedical(string $typeCentreMedical): self
    {
        $this->typeCentreMedical = $typeCentreMedical;

        return $this;
    }

    public function getNumTelCentreMedical(): ?string
    {
        return $this->numTelCentreMedical;
    }

    public function setNumTelCentreMedical(string $numTelCentreMedical): self
    {
        $this->numTelCentreMedical = $numTelCentreMedical;

        return $this;
    }

    public function getMailCentreMedical(): ?string
    {
        return $this->mailCentreMedical;
    }

    public function setMailCentreMedical(?string $mailCentreMedical): self
    {
        $this->mailCentreMedical = $mailCentreMedical;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setCentreMedical($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getCentreMedical() === $this) {
                $reservation->setCentreMedical(null);
            }
        }

        return $this;
    }
}
