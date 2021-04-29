<?php

namespace App\Entity;

use App\Repository\CategorieSoinMPRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @ORM\Entity(repositoryClass=CategorieSoinMPRepository::class)
 */
class CategorieSoinMP
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le champs titre est obligatoire * "))
     */
    private $libelleCategorieSoinMP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienIconeCSMP;

    /**
     * @ORM\OneToMany(targetEntity=SoinMP::class, mappedBy="CategorieSoinMP", orphanRemoval=true)
     */
    private $ListSoinMP;

    public function __construct()
    {
        $this->ListSoinMP = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCategorieSoinMP(): ?string
    {
        return $this->libelleCategorieSoinMP;
    }

    public function setLibelleCategorieSoinMP(?string $libelleCategorieSoinMP): self
    {
        $this->libelleCategorieSoinMP = $libelleCategorieSoinMP;

        return $this;
    }

    public function getLienIconeCSMP(): ?string
    {
        return $this->lienIconeCSMP;
    }

    public function setLienIconeCSMP(?string $lienIconeCSMP): self
    {
        $this->lienIconeCSMP = $lienIconeCSMP;

        return $this;
    }

    /**
     * @return Collection|SoinMP[]
     */
    public function getListSoinMP(): Collection
    {
        return $this->ListSoinMP;
    }

    public function addListSoinMP(SoinMP $listSoinMP): self
    {
        if (!$this->ListSoinMP->contains($listSoinMP)) {
            $this->ListSoinMP[] = $listSoinMP;
            $listSoinMP->setCategorieSoinMP($this);
        }

        return $this;
    }

    public function removeListSoinMP(SoinMP $listSoinMP): self
    {
        if ($this->ListSoinMP->removeElement($listSoinMP)) {
            // set the owning side to null (unless already changed)
            if ($listSoinMP->getCategorieSoinMP() === $this) {
                $listSoinMP->setCategorieSoinMP(null);
            }
        }

        return $this;
    }

    public function __toString()

    {
        return(string) $this->getLibelleCategorieSoinMP();
    }
}
