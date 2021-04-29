<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prixTot;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tvaTot;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prixFinale;

    /**
     * @ORM\ManyToOne(targetEntity=User::class , inversedBy="paniers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Parapharmacie::class, inversedBy="paniers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $parapharmacie;

    /**
     * @ORM\OneToMany(targetEntity=ListProduit::class, mappedBy="panier")
     */
    private $ListProduit;

    public function __construct()
    {
        $this->ListProduit = new ArrayCollection();
    }







    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixTot(): ?float
    {
        return $this->prixTot;
    }

    public function setPrixTot(?float $prixTot): self
    {
        $this->prixTot = $prixTot;

        return $this;
    }

    public function getTvaTot(): ?float
    {
        return $this->tvaTot;
    }

    public function setTvaTot(?float $tvaTot): self
    {
        $this->tvaTot = $tvaTot;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrixFinale()
    {
        return $this->prixFinale;
    }

    /**
     * @param mixed $prixFinale
     */
    public function setPrixFinale($prixFinale): void
    {
        $this->prixFinale = $prixFinale;
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

    public function getParapharmacie(): ?Parapharmacie
    {
        return $this->parapharmacie;
    }

    public function setParapharmacie(?Parapharmacie $parapharmacie): self
    {
        $this->parapharmacie = $parapharmacie;

        return $this;
    }

    /**
     * @return Collection|ListProduit[]
     */
    public function getListProduit(): Collection
    {
        return $this->ListProduit;
    }

    public function addListProduit(ListProduit $listProduit): self
    {
        if (!$this->ListProduit->contains($listProduit)) {
            $this->ListProduit[] = $listProduit;
            $listProduit->setPanier($this);
        }

        return $this;
    }

    public function removeListProduit(ListProduit $listProduit): self
    {
        if ($this->ListProduit->removeElement($listProduit)) {
            // set the owning side to null (unless already changed)
            if ($listProduit->getPanier() === $this) {
                $listProduit->setPanier(null);
            }
        }

        return $this;
    }




}
