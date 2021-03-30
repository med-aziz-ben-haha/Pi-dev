<?php

namespace App\Entity;

use App\Repository\PosttRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PosttRepository::class)
 */
class Postt
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
    private $titrePostt;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $textePostt;

    /**
     * @ORM\Column(type="date", )
     */
    private $datePostt;

    /**
     * @ORM\ManyToOne(targetEntity=CategoriePost::class, inversedBy="postts")
     */
    private $categoriePost;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePostt(): ?string
    {
        return $this->titrePostt;
    }

    public function setTitrePostt(string $titrePostt): self
    {
        $this->titrePostt = $titrePostt;

        return $this;
    }

    public function getTextePostt(): ?string
    {
        return $this->textePostt;
    }

    public function setTextePostt(string $textePostt): self
    {
        $this->textePostt = $textePostt;

        return $this;
    }

    public function getDatePostt(): ?\DateTimeInterface
    {
        return $this->datePostt;
    }

    public function setDatePostt(\DateTimeInterface $datePostt): self
    {
        $this->datePostt = $datePostt;

        return $this;
    }

    public function getCategoriePost(): ?CategoriePost
    {
        return $this->categoriePost;
    }

    public function setCategoriePost(?CategoriePost $categoriePost): self
    {
        $this->categoriePost = $categoriePost;

        return $this;
    }
}
