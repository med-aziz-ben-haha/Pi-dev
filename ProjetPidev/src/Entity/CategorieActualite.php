<?php

namespace App\Entity;

use App\Repository\CategorieActualiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieActualiteRepository::class)
 */
class CategorieActualite
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
    private $nomCatActualite;

    /**
     * @ORM\ManyToMany(targetEntity=Actualite::class)
     */
    private $actualites;

    public function __construct()
    {
        $this->actualites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCatActualite(): ?string
    {
        return $this->nomCatActualite;
    }

    public function setNomCatActualite(string $nomCatActualite): self
    {
        $this->nomCatActualite = $nomCatActualite;

        return $this;
    }

    /**
     * @return Collection|Actualite[]
     */
    public function getActualites(): Collection
    {
        return $this->actualites;
    }

    public function addActualite(Actualite $actualite): self
    {
        if (!$this->actualites->contains($actualite)) {
            $this->actualites[] = $actualite;
        }

        return $this;
    }

    public function removeActualite(Actualite $actualite): self
    {
        $this->actualites->removeElement($actualite);

        return $this;
    }
}
