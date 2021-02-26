<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
    private $serviceReservation;

    /**
     * @ORM\Column(type="date")
     */
    private $dateReservation;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="reservations")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity=CentreMedical::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $centreMedical;



    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServiceReservation(): ?string
    {
        return $this->serviceReservation;
    }

    public function setServiceReservation(?string $serviceReservation): self
    {
        $this->serviceReservation = $serviceReservation;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->users->removeElement($user);

        return $this;
    }

    public function getCentreMedical(): ?CentreMedical
    {
        return $this->centreMedical;
    }

    public function setCentreMedical(?CentreMedical $centreMedical): self
    {
        $this->centreMedical = $centreMedical;

        return $this;
    }


}
