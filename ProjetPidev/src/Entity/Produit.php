<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(type="string", length=255 , nullable=false)
     * @Assert\NotBlank(message="Le champs nom produit est obligatoire * ")
     */
    private $nomProduit;

    /**
     * @ORM\Column(type="float" , nullable=false)
     * @Assert\NotBlank(message="Le champs prix produit est obligatoire * ")
     */
    private $prixProduit;

    /**
     * @ORM\Column(type="integer" , nullable=false)
     * @Assert\NotBlank(message="Le champs quantite produit est obligatoire * ")
     */
    private $quantiteProduit;

    /**
     * @ORM\Column(type="integer" , nullable=false)
     * @Assert\NotBlank(message="Le champs tva produit est obligatoire * ")
     * @Assert\Length(min=1,minMessage="TVA doit contenir au minimum 1 caractères.",max=2,maxMessage="TVA ne doit depasser 2 caractères."))
     */
    private $tva;

    /**
     * @ORM\Column(type="text" , nullable=false)
     * @Assert\NotBlank(message="Le champs description produit est obligatoire * ")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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

    /**
     * @ORM\ManyToMany(targetEntity=ListProduit::class, mappedBy="produit")
     */
    private $listProduit;

    public function __construct()
    {
        $this->listProduit = new ArrayCollection();
    }





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

    /**
     * @return mixed
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param mixed $tva
     */
    public function setTva($tva): void
    {
        $this->tva = $tva;
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

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
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

    /**
     * @return Collection|ListProduit[]
     */
    public function getListProduit(): Collection
    {
        return $this->listProduit;
    }

    public function addListProduit(ListProduit $listProduit): self
    {
        if (!$this->listProduit->contains($listProduit)) {
            $this->listProduit[] = $listProduit;
            $listProduit->addProduit($this);
        }

        return $this;
    }

    public function removeListProduit(ListProduit $listProduit): self
    {
        if ($this->listProduit->removeElement($listProduit)) {
            $listProduit->removeProduit($this);
        }

        return $this;
    }




}
