<?php

namespace App\Entity;

use App\Repository\CategorieProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieProduitRepository::class)
 */
class CategorieProduit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le champs categorie est obligatoire * ")
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgCategorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienImgCat;

    /**
     * @ORM\ManyToOne(targetEntity=Parapharmacie::class, inversedBy="categorieProduit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $parapharmacie;



    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="categorie", orphanRemoval=true)
     */
    private $listProd;



    public function __construct()
    {

        $this->listProd = new ArrayCollection();
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





    public function addlistProd(Produit $listProd): self
    {
        if (!$this->listProd->contains($listProd)) {
            $this->listProd[] = $listProd;
            $listProd->setCategorie($this);
        }

        return $this;
    }

    public function removelistProd(Produit $listProd): self
    {
        if ($this->listProd->removeElement($listProd)) {
            // set the owning side to null (unless already changed)
            if ($listProd->getCategorie() === $this) {
                $listProd->setCategorie(null);
            }
        }

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getImgCategorie(): ?string
    {
        return $this->imgCategorie;
    }

    public function setImgCategorie(?string $imgCategorie): self
    {
        $this->imgCategorie = $imgCategorie;

        return $this;
    }

    public function getLienImgCat(): ?string
    {
        return $this->lienImgCat;
    }

    public function setLienImgCat(?string $lienImgCat): self
    {
        $this->lienImgCat = $lienImgCat;

        return $this;
    }


}
