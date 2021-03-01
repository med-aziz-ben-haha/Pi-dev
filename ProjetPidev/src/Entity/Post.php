<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
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
    private $titrePost;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $textPost;

    /**
     * @ORM\Column(type="date")
     */
    private $datePost;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="posts")
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity=CategoriePost::class, inversedBy="posts")
     */
    private $categoriesPost;

    /**
     * @ORM\OneToOne(targetEntity=Discussion::class, inversedBy="post", cascade={"persist", "remove"})
     */
    private $discussion;

    public function __construct()
    {
        $this->categoriesPost = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitrePost(): ?string
    {
        return $this->titrePost;
    }

    public function setTitrePost(string $titrePost): self
    {
        $this->titrePost = $titrePost;

        return $this;
    }

    public function getTextPost(): ?string
    {
        return $this->textPost;
    }

    public function setTextPost(string $textPost): self
    {
        $this->textPost = $textPost;

        return $this;
    }

    public function getDatePost(): ?\DateTimeInterface
    {
        return $this->datePost;
    }

    public function setDatePost(\DateTimeInterface $datePost): self
    {
        $this->datePost = $datePost;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|CategoriePost[]
     */
    public function getCategoriesPost(): Collection
    {
        return $this->categoriesPost;
    }

    public function addCategoriesPost(CategoriePost $categoriesPost): self
    {
        if (!$this->categoriesPost->contains($categoriesPost)) {
            $this->categoriesPost[] = $categoriesPost;
        }

        return $this;
    }

    public function removeCategoriesPost(CategoriePost $categoriesPost): self
    {
        $this->categoriesPost->removeElement($categoriesPost);

        return $this;
    }

    public function getDiscussion(): ?Discussion
    {
        return $this->discussion;
    }

    public function setDiscussion(?Discussion $discussion): self
    {
        $this->discussion = $discussion;

        return $this;
    }
}
