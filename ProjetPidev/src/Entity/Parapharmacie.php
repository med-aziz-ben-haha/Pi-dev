<?php

namespace App\Entity;

use App\Repository\ParapharmacieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @Assert\NotBlank(message="Le champs nom parapharmacie est obligatoire * ")
     */
    private $nomPara;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le champs adresse parapharmacie est obligatoire * ")
     */
    private $adressePara;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Length(min=8,minMessage="Le numero de telephne du parapharmacie doit contenir au minimum 8 caractères.",max=12,maxMessage="Le numero de telephne du parapharmacie ne doit depasser 12 caractères."))
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
     * @ORM\ManyToOne(targetEntity=Regions::class, inversedBy="region")
     * @ORM\JoinColumn(nullable=false)
     */
    private $region;


    /**
     * @ORM\OneToMany(targetEntity=CategorieProduit::class, mappedBy="parapharmacie", orphanRemoval=true)
     */
    private $categorieProduit;


    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="parapharmacie", orphanRemoval=true)
     */
    private $produits;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="parapharmacie", orphanRemoval=true)
     */
    private $parapharmacien;

    /**
     * @ORM\OneToMany(targetEntity=Panier::class, mappedBy="parapharmacie")
     */
    private $paniers;

    /**
     * @ORM\OneToMany(targetEntity=ListProduit::class, mappedBy="parapharmacie")
     */
    private $listProduit;





    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->categorieProduit = new ArrayCollection();
        $this->paniers = new ArrayCollection();
        $this->listProduit = new ArrayCollection();

    }

    /**
     * @return Collection|CategorieProduit[]
     */
    public function getcategorieProduit(): Collection
    {
        return $this->categorieProduit;
    }

    public function addcategorieProduit(CategorieProduit $categorieProduit): self
    {
        if (!$this->categorieProduit->contains($categorieProduit)) {
            $this->categorieProduit[] = $categorieProduit;
            $categorieProduit->setParapharmacie($this);
        }

        return $this;
    }

    public function removecategorieProduit(CategorieProduit $categorieProduit): self
    {
        if ($this->categorieProduit->removeElement($categorieProduit)) {
            // set the owning side to null (unless already changed)
            if ($categorieProduit->getParapharmacie()=== $this) {
                $categorieProduit->setParapharmacie(null);
            }
        }

        return $this;
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

    public function getRegion(): ?Regions
    {
        return $this->region;
    }

    public function setRegion(?Regions $regions): self
    {
        $this->region = $regions;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getParapharmacien(): Collection
    {
        return $this->parapharmacien;
    }

    public function addParapharmacien(User $parapharmacien): self
    {
        if (!$this->parapharmacien->contains($parapharmacien)) {
            $this->parapharmacien[] = $parapharmacien;
            $parapharmacien->setParapharmacie($this);
        }

        return $this;
    }

    public function removeParapharmacien(User $parapharmacien): self
    {
        if ($this->parapharmacien->removeElement($parapharmacien)) {
            // set the owning side to null (unless already changed)
            if ($parapharmacien->getParapharmacie() === $this) {
                $parapharmacien->setParapharmacie(null);
            }
        }

        return $this;
    }

    public function __toString()

    {
        return(string) $this->getNomPara();
    }

    /**
     * @return Collection|Panier[]
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(Panier $panier): self
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers[] = $panier;
            $panier->setParapharmacie($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): self
    {
        if ($this->paniers->removeElement($panier)) {
            // set the owning side to null (unless already changed)
            if ($panier->getParapharmacie() === $this) {
                $panier->setParapharmacie(null);
            }
        }

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
            $listProduit->setParapharmacie($this);
        }

        return $this;
    }

    public function removeListProduit(ListProduit $listProduit): self
    {
        if ($this->listProduit->removeElement($listProduit)) {
            // set the owning side to null (unless already changed)
            if ($listProduit->getParapharmacie() === $this) {
                $listProduit->setParapharmacie(null);
            }
        }

        return $this;
    }





}
