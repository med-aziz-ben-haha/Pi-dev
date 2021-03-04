<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $nomProduit;

    /**
     * @ORM\Column(type="float")
     */
    private $prixProduit;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantiteProduit;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $img_Prod;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienImgP;


    /**
     * @ORM\ManyToOne(targetEntity=CategorieProduit::class, inversedBy="listProd")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;


    /**
     * @ORM\ManyToOne(targetEntity=Parapharmacie::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $parapharmacie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getPrixProduit(): ?float
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(float $prixProduit): self
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    public function getQuantiteProduit(): ?int
    {
        return $this->quantiteProduit;
    }

    public function setQuantiteProduit(int $quantiteProduit): self
    {
        $this->quantiteProduit = $quantiteProduit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienImgP()
    {
        return $this->lienImgP;
    }

    /**
     * @param mixed $lienImgP
     */
    public function setLienImgP($lienImgP): void
    {
        $this->lienImgP = $lienImgP;
    }

    /**
     * @return mixed
     */
    public function getImgProd()
    {
        return $this->img_Prod;
    }

    /**
     * @param mixed $img_Prod
     */
    public function setImgProd($img_Prod): void
    {
        $this->img_Prod = $img_Prod;
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



    public function getCategorie(): ?CategorieProduit
    {
        return $this->categorie;
    }

    public function setCategorie(?CategorieProduit $categorieProduit): self
    {
        $this->categorie = $categorieProduit;

        return $this;
    }
}
