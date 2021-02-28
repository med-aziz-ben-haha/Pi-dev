<?php

namespace App\Entity;

use App\Repository\SoinMPRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @ORM\Entity(repositoryClass=SoinMPRepository::class)
 */
class SoinMP
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le champs titre est obligatoire * ")
     */
    private $titreSoinMP;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le champs description est obligatoire * "))
     * @Assert\Length(min=20,minMessage="Le champs description doit contenir au minimum {{ min }} caractères.",max=300,minMessage="Le champs description ne doit depasser {{ max }} caractères."))
     */
    private $descriptionSoinMP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienImageSMP;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le champs adresse est obligatoire * ")
     */
    private $adresseSoinMP;

    /**
     * @ORM\ManyToOne(targetEntity=CategorieSoinMP::class, inversedBy="ListSoinMP")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CategorieSoinMP;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreSoinMP(): ?string
    {
        return $this->titreSoinMP;
    }

    public function setTitreSoinMP(?string $titreSoinMP): self
    {
        $this->titreSoinMP = $titreSoinMP;

        return $this;
    }

    public function getDescriptionSoinMP(): ?string
    {
        return $this->descriptionSoinMP;
    }

    public function setDescriptionSoinMP(?string $descriptionSoinMP): self
    {
        $this->descriptionSoinMP = $descriptionSoinMP;

        return $this;
    }

    public function getLienImageSMP(): ?string
    {
        return $this->lienImageSMP;
    }

    public function setLienImageSMP(?string $lienImageSMP): self
    {
        $this->lienImageSMP = $lienImageSMP;

        return $this;
    }

    public function getAdresseSoinMP(): ?string
    {
        return $this->adresseSoinMP;
    }

    public function setAdresseSoinMP(?string $adresseSoinMP): self
    {
        $this->adresseSoinMP = $adresseSoinMP;

        return $this;
    }

    public function getCategorieSoinMP(): ?CategorieSoinMP
    {
        return $this->CategorieSoinMP;
    }

    public function setCategorieSoinMP(?CategorieSoinMP $CategorieSoinMP): self
    {
        $this->CategorieSoinMP = $CategorieSoinMP;

        return $this;
    }

}
