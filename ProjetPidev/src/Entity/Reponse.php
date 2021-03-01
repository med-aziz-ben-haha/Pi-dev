<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponseRepository::class)
 */
class Reponse
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
    private $texteReponse;

    /**
     * @ORM\Column(type="float")
     */
    private $noteReponse;

    /**
     * @ORM\OneToOne(targetEntity=Discussion::class, inversedBy="reponse", cascade={"persist", "remove"})
     */
    private $discussion;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexteReponse(): ?string
    {
        return $this->texteReponse;
    }

    public function setTexteReponse(string $texteReponse): self
    {
        $this->texteReponse = $texteReponse;

        return $this;
    }

    public function getNoteReponse(): ?float
    {
        return $this->noteReponse;
    }

    public function setNoteReponse(float $noteReponse): self
    {
        $this->noteReponse = $noteReponse;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
