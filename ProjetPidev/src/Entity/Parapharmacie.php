<?php

namespace App\Entity;

use App\Repository\ParapharmacieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParapharmacieRepository::class)
 */
class Parapharmacie
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
    private $nomPara;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adressePara;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $telPara;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $img_Para;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienImageP;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="parapharmacie", orphanRemoval=true)
     */
    private $produits;



    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPara(): ?string
    {
        return $this->nomPara;
    }

    public function setNomPara(string $nomPara): self
    {
        $this->nomPara = $nomPara;

        return $this;
    }

    public function getAdressePara(): ?string
    {
        return $this->adressePara;
    }

    public function setAdressePara(string $adressePara): self
    {
        $this->adressePara = $adressePara;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienImageP()
    {
        return $this->lienImageP;
    }

    /**
     * @param mixed $lienImageP
     */
    public function setLienImageP($lienImageP): void
    {
        $this->lienImageP = $lienImageP;
    }

    public function getTelPara(): ?string
    {
        return $this->telPara;
    }

    public function setTelPara(string $telPara): self
    {
        $this->telPara = $telPara;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImgPara()
    {
        return $this->img_Para;
    }

    /**
     * @param mixed $img_Para
     */
    public function setImgPara($img_Para): void
    {
        $this->img_Para = $img_Para;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setParapharmacie($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getParapharmacie() === $this) {
                $produit->setParapharmacie(null);
            }
        }

        return $this;
    }


}
