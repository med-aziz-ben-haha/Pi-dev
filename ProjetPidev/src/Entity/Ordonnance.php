<?php

namespace App\Entity;

use App\Repository\OrdonnanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=OrdonnanceRepository::class)
 */
class Ordonnance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank (message=" Contenu de l'ordonnance obligatoire * ")
     * @Groups("post:read")
     */
    private $contenu_ord;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotNull
     * @Groups("post:read")
     */
    private $date_ord;


    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ordonnances")
     */
    private $User;

    /**
     * @ORM\ManyToMany(targetEntity=Medicament::class, inversedBy="ordonnances")
     */
    private $Medicament;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="medordonnances")
     */
    private $Medecin;






    public function __construct()
    {
        $this->Medicament = new ArrayCollection();
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

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    /**
     * @return Collection|Medicament[]
     */
    public function getMedicament(): Collection
    {
        return $this->Medicament;
    }

    public function addMedicament(Medicament $medicament): self
    {
        if (!$this->Medicament->contains($medicament)) {
            $this->Medicament[] = $medicament;
        }

        return $this;
    }

    public function removeMedicament(Medicament $medicament): self
    {
        $this->Medicament->removeElement($medicament);

        return $this;
    }

    public function getMedecin(): ?User
    {
        return $this->Medecin;
    }

    public function setMedecin(?User $Medecin): self
    {
        $this->Medecin = $Medecin;

        return $this;
    }




}
