<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 * @UniqueEntity(fields={"login"}, message="Ce login est deja utilisé!")
 * @UniqueEntity(fields={"email"}, message="Cette adresses email est déja utilisée!")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message="Le champs login est obligatoire * ")
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=80)
     * @Assert\Length(min=4,minMessage="Votre mot de passe doit contenir au minimum 4 caractères *")
     * @Assert\NotBlank(message="Le champs mot de passe est obligatoire * ")
     */
    private $mdp;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="Votre adresse mail non valide *")
     * @Assert\NotBlank(message="Le champs email est obligatoire * ")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message="Le champs nom est obligatoire * ")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message="Le champs prenom est obligatoire * ")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $matriculeFiscale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseUser;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank(message="Le champs telephone est obligatoire * ")
     * @Assert\Length(min=8,minMessage="Votre numero de telephne doit contenir au minimum 8 caractères.",max=15,maxMessage="Votre numero de telephne ne doit depasser 15 caractères."))
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $specialite;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $sexe;

    /**
     * @ORM\Column(type="integer")
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienImageUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lienIconeUser;

    /**
     * @ORM\OneToMany(targetEntity=Reclamation::class, mappedBy="user", orphanRemoval=true)
     */
    private $reclamations;

    /**
     * @ORM\ManyToMany(targetEntity=Actualite::class, inversedBy="users")
     */
    private $actualites;

    /**
     * @ORM\ManyToMany(targetEntity=Reservation::class, mappedBy="users")
     */
    private $reservations;



    /**
     * @ORM\OneToMany(targetEntity=RendezVous::class, mappedBy="user", orphanRemoval=true)
     */
    private $listRendezvous;

    /**
     * @ORM\OneToMany(targetEntity=NoteSoinMP::class, mappedBy="user")
     */
    private $noteSoinMPs;

    /**
     * @ORM\OneToMany(targetEntity=Ordonnance::class, mappedBy="User")
     */
    private $ordonnances;

    /**
     * @ORM\ManyToOne(targetEntity=Parapharmacie::class, inversedBy="parapharmacien")
     */
    private $parapharmacie;

    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
        $this->actualites = new ArrayCollection();
        $this->reservations = new ArrayCollection();

        $this->listRendezvous = new ArrayCollection();
        $this->noteSoinMPs = new ArrayCollection();
        $this->ordonnances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMatriculeFiscale(): ?string
    {
        return $this->matriculeFiscale;
    }

    public function setMatriculeFiscale(?string $matriculeFiscale): self
    {
        $this->matriculeFiscale = $matriculeFiscale;

        return $this;
    }

    public function getAdresseUser(): ?string
    {
        return $this->adresseUser;
    }

    public function setAdresseUser(string $adresseUser): self
    {
        $this->adresseUser = $adresseUser;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(?string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getLienImageUser(): ?string
    {
        return $this->lienImageUser;
    }

    public function setLienImageUser(?string $lienImageUser): self
    {
        $this->lienImageUser = $lienImageUser;

        return $this;
    }

    public function getLienIconeUser(): ?string
    {
        return $this->lienIconeUser;
    }

    public function setLienIconeUser(?string $lienIconeUser): self
    {
        $this->lienIconeUser = $lienIconeUser;

        return $this;
    }

    /**
     * @return Collection|Reclamation[]
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): self
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations[] = $reclamation;
            $reclamation->setUser($this);
        }

        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): self
    {
        if ($this->reclamations->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getUser() === $this) {
                $reclamation->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Actualite[]
     */
    public function getActualites(): Collection
    {
        return $this->actualites;
    }

    public function addActualite(Actualite $actualite): self
    {
        if (!$this->actualites->contains($actualite)) {
            $this->actualites[] = $actualite;
        }

        return $this;
    }

    public function removeActualite(Actualite $actualite): self
    {
        $this->actualites->removeElement($actualite);

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->addUser($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            $reservation->removeUser($this);
        }

        return $this;
    }



    /**
     * @return Collection|RendezVous[]
     */
    public function getListRendezvous(): Collection
    {
        return $this->listRendezvous;
    }

    public function addListRendezvou(RendezVous $listRendezvou): self
    {
        if (!$this->listRendezvous->contains($listRendezvou)) {
            $this->listRendezvous[] = $listRendezvou;
            $listRendezvou->setUser($this);
        }

        return $this;
    }

    public function removeListRendezvou(RendezVous $listRendezvou): self
    {
        if ($this->listRendezvous->removeElement($listRendezvou)) {
            // set the owning side to null (unless already changed)
            if ($listRendezvou->getUser() === $this) {
                $listRendezvou->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|NoteSoinMP[]
     */
    public function getNoteSoinMPs(): Collection
    {
        return $this->noteSoinMPs;
    }

    public function addNoteSoinMP(NoteSoinMP $noteSoinMP): self
    {
        if (!$this->noteSoinMPs->contains($noteSoinMP)) {
            $this->noteSoinMPs[] = $noteSoinMP;
            $noteSoinMP->setUser($this);
        }

        return $this;
    }

    public function removeNoteSoinMP(NoteSoinMP $noteSoinMP): self
    {
        if ($this->noteSoinMPs->removeElement($noteSoinMP)) {
            // set the owning side to null (unless already changed)
            if ($noteSoinMP->getUser() === $this) {
                $noteSoinMP->setUser(null);
            }
        }

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
            $ordonnance->setUser($this);
        }

        return $this;
    }

    public function removeOrdonnance(Ordonnance $ordonnance): self
    {
        if ($this->ordonnances->removeElement($ordonnance)) {
            // set the owning side to null (unless already changed)
            if ($ordonnance->getUser() === $this) {
                $ordonnance->setUser(null);
            }
        }

        return $this;
    }

    public function __toString()

    {
        return(string) $this->getLogin();
    }

    public function getParapharmacie(): ?Parapharmacie
    {
        return $this->parapharmacie;
    }

    public function setParapharmacie(?Parapharmacie $parapharmacie): self
    {
        $this->parapharmacie = $parapharmacie;

        return $this;
    }

}
