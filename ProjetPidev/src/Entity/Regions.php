<?php

namespace App\Entity;

use App\Repository\RegionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Array_;

/**
 * @ORM\Entity(repositoryClass=RegionsRepository::class)
 */
class Regions
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le champs region  est obligatoire * ")
     */
    private $region;

    /**
     * @ORM\OneToMany(targetEntity=Parapharmacie::class, mappedBy="region", orphanRemoval=true)
     */
    private $listPara;


    public function __construct()
    {
        $this->listPara = new ArrayCollection();
    }

    /**
     * @return Collection|Parapharmacie[]
     */
    public function getlistPara(): Collection
    {
        return $this->listPara;
    }

    public function addlistPara(Parapharmacie $listPara): self
    {
        if (!$this->listPara->contains($listPara)) {
            $this->listPara[] = $listPara;
            $listPara->setRegion($this);
        }

        return $this;
    }

    public function removelistPar(Parapharmacie $listPara): self
    {
        if ($this->listPara->removeElement($listPara)) {
            // set the owning side to null (unless already changed)
            if ($listPara->getRegion() === $this) {
                $listPara->setRegion(null);
            }
        }

        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function __toString()

    {
        return(string) $this->getRegion();
    }

}
