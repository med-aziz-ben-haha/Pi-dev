<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     * @Groups("art")
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     * @Groups("art")
     */
    private $contenu;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     * @Groups("art")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $vues;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     * @Groups("art")
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     * @Groups("art")
     */
    private $categorie_id;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVues(): ?string
    {
        return $this->vues;
    }

    public function setVues(?string $vues): self
    {
        $this->vues = $vues;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCategorieId(): ?string
    {
        return $this->categorie_id;
    }

    public function setCategorieId(?string $categorie_id): self
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

}
