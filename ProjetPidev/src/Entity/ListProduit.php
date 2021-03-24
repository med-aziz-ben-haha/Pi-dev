<?php

namespace App\Entity;

use App\Repository\ListProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ListProduitRepository::class)
 */
class ListProduit
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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $qte;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="listProduit")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Parapharmacie::class, inversedBy="listProduit")
     */
    private $parapharmacie;

    /**
     * @ORM\ManyToOne(targetEntity=Panier::class, inversedBy="ListProduit")
     */
    private $panier;

    /**
     * @ORM\ManyToMany(targetEntity=Produit::class, inversedBy="listProduit")
     */
    private $produit;

    public function __construct()
    {
        $this->produit = new ArrayCollection();
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



    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(?int $qte): self
    {
        $this->qte = $qte;

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

    public function getParapharmacie(): ?Parapharmacie
    {
        return $this->parapharmacie;
    }

    public function setParapharmacie(?Parapharmacie $parapharmacie): self
    {
        $this->parapharmacie = $parapharmacie;

        return $this;
    }

    public function getPanier(): ?Panier
    {
        return $this->panier;
    }

    public function setPanier(?Panier $panier): self
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduit(): Collection
    {
        return $this->produit;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produit->contains($produit)) {
            $this->produit[] = $produit;
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        $this->produit->removeElement($produit);

        return $this;
    }
}
