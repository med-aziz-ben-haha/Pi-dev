<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MediaRepository::class)
 */
class Media
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
    private $typeMedia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionMedia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fichierMedia;

    /**
     * @ORM\ManyToOne(targetEntity=Actualite::class, inversedBy="medias")
     * @ORM\JoinColumn(nullable=false)
     */
    private $actualite;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeMedia(): ?string
    {
        return $this->typeMedia;
    }

    public function setTypeMedia(string $typeMedia): self
    {
        $this->typeMedia = $typeMedia;

        return $this;
    }

    public function getDescriptionMedia(): ?string
    {
        return $this->descriptionMedia;
    }

    public function setDescriptionMedia(string $descriptionMedia): self
    {
        $this->descriptionMedia = $descriptionMedia;

        return $this;
    }

    public function getFichierMedia(): ?string
    {
        return $this->fichierMedia;
    }

    public function setFichierMedia(?string $fichierMedia): self
    {
        $this->fichierMedia = $fichierMedia;

        return $this;
    }

    public function getActualite(): ?Actualite
    {
        return $this->actualite;
    }

    public function setActualite(?Actualite $actualite): self
    {
        $this->actualite = $actualite;

        return $this;
    }

}
