<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=MedicamentRepository::class)
 */
class Medicament
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank (message=" Nom du medicament obligatoire * ")
     * @Groups("post:read")
     */
    private $nomMedicament;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\NotBlank (message=" Date de modification obligatoire * ")
     * @Groups("post:read")
     */
    private $dateModif;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull (message="Dispobinilité obligatoire *")
     * @Assert\Range(
     *      min = 0,
     *      max = 1,
     *      notInRangeMessage = " Entrez {{ min }} si le médicament est indisponible et {{ max }} s'il est disponible")
     * @Groups("post:read")
     */
    private $dispo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $img_medicament;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank (message=" Description du medicament obligatoire * ")
     * @Groups("post:read")
     */
    private $descmedicament;
    protected $captchaCode;

    /**
     * @ORM\ManyToMany(targetEntity=Ordonnance::class, mappedBy="Medicament")
     */
    private $ordonnances;

    public function __construct()
    {
        $this->ordonnances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMedicament(): ?string
    {
        return $this->nomMedicament;
    }

    public function setNomMedicament(string $nomMedicament): self
    {
        $this->nomMedicament = $nomMedicament;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(?\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    public function getDispo(): ?int
    {
        return $this->dispo;
    }

    public function setDispo(int $dispo): self
    {
        $this->dispo = $dispo;

        return $this;
    }

    public function getImgMedicament(): ?string
    {
        return $this->img_medicament;
    }

    public function setImgMedicament(?string $img_medicament): self
    {
        $this->img_medicament = $img_medicament;

        return $this;
    }

    public function getCaptchaCode()
    {
        return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
        $this->captchaCode = $captchaCode;
    }


    public function getDescmedicament(): ?string
    {
        return $this->descmedicament;
    }

    public function setDescmedicament(string $descmedicament): self
    {
        $this->descmedicament = $descmedicament;

        return $this;
    }

    /**
     * @return Collection|Ordonnance[]
     */
    public function getOrdonnances(): Collection
    {
        return $this->ordonnances;
    }

    public function addOrdonnance(Ordonnance $ordonnance): self
    {
        if (!$this->ordonnances->contains($ordonnance)) {
            $this->ordonnances[] = $ordonnance;
            $ordonnance->addMedicament($this);
        }

        return $this;
    }

    public function removeOrdonnance(Ordonnance $ordonnance): self
    {
        if ($this->ordonnances->removeElement($ordonnance)) {
            $ordonnance->removeMedicament($this);
        }

        return $this;
    }
}
