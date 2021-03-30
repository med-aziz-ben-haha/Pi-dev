<?php

namespace App\Entity;

use App\Repository\OrdonnanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

/**
 * @ORM\Entity(repositoryClass=OrdonnanceRepository::class)
 */
class Ordonnance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank (message=" Contenu de l'ordonnance obligatoire * ")
     */
    private $contenu_ord;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotNull
     */
    private $date_ord;

    /**
     * @ORM\ManyToMany(targetEntity=Medicament::class, mappedBy="Ordonnance")
     */
    private $medicaments;

    public function __construct()
    {
        $this->medicaments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuOrd(): ?string
    {
        return $this->contenu_ord;
    }

    public function setContenuOrd(string $contenu_ord): self
    {
        $this->contenu_ord = $contenu_ord;

        return $this;
    }

    public function getDateOrd(): ?\DateTimeInterface
    {
        return $this->date_ord;
    }

    public function setDateOrd(\DateTimeInterface $date_ord): self
    {
        $this->date_ord = $date_ord;

        return $this;
    }

    /**
     * @return Collection|Medicament[]
     */
    public function getMedicaments(): Collection
    {
        return $this->medicaments;
    }

    public function addMedicament(Medicament $medicament): self
    {
        if (!$this->medicaments->contains($medicament)) {
            $this->medicaments[] = $medicament;
            $medicament->addOrdonnance($this);
        }

        return $this;
    }

    public function removeMedicament(Medicament $medicament): self
    {
        if ($this->medicaments->removeElement($medicament)) {
            $medicament->removeOrdonnance($this);
        }

        return $this;
    }
}
