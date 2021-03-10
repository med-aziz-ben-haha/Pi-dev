<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

/**
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 */
class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\NotBlank(message="Le champs reclamation est obligatoire * ")
     */
    private $descriptionReclamation;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reclamations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=TypeReclamation::class, inversedBy="reclamations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeReclamation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionReclamation(): ?string
    {
        return $this->descriptionReclamation;
    }

    public function setDescriptionReclamation(string $descriptionReclamation): self
    {
        $this->descriptionReclamation = $descriptionReclamation;

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

    public function getTypeReclamation(): ?TypeReclamation
    {
        return $this->typeReclamation;
    }

    public function setTypeReclamation(?TypeReclamation $typeReclamation): self
    {
        $this->typeReclamation = $typeReclamation;

        return $this;
    }
    public function __toString(){
    return $this->user;
    }
}
