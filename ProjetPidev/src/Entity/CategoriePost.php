<?php

namespace App\Entity;

use App\Repository\CategoriePostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriePostRepository::class)
 */
class CategoriePost
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
    private $nomCategoriePost;


    /**
     * @ORM\OneToMany(targetEntity=Postt::class, mappedBy="categoriePost")
     */
    private $postts;

    public function __construct()
    {

        $this->postts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategoriePost(): ?string
    {
        return $this->nomCategoriePost;
    }

    public function setNomCategoriePost(string $nomCategoriePost): self
    {
        $this->nomCategoriePost = $nomCategoriePost;

        return $this;
    }



    /**
     * @return Collection|Postt[]
     */
    public function getPostts(): Collection
    {
        return $this->postts;
    }

    public function addPostt(Postt $postt): self
    {
        if (!$this->postts->contains($postt)) {
            $this->postts[] = $postt;
            $postt->setCategoriePost($this);
        }

        return $this;
    }

    public function removePostt(Postt $postt): self
    {
        if ($this->postts->removeElement($postt)) {
            // set the owning side to null (unless already changed)
            if ($postt->getCategoriePost() === $this) {
                $postt->setCategoriePost(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return(string) $this->getNomCategoriePost();
    }
}
