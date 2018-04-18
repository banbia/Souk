<?php

namespace Souk\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Souk\BackBundle\Entity\Evennements;
use Souk\BackBundle\Entity\Reservation;
use Souk\BackBundle\Entity\Reclamations;
use Souk\BackBundle\Entity\Commandes;

use FOS\MessageBundle\Model\ParticipantInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser implements ParticipantInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     *
     */
    private $prenom;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;
    /**
     * @var int
     *
     * @ORM\Column(name="mobile", type="integer", length=255, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre_commercial;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_ab", type="date", nullable=true)
     */
    private $date_fin_ab;

    /**
     * @ORM\OneToMany(targetEntity="Souk\BackBundle\Entity\Evennements", mappedBy="commercial")
     */
    private $evennements;
    /**
     * @ORM\OneToMany(targetEntity="Souk\BackBundle\Entity\Reclamations", mappedBy="client")
     */
    private $reclamations;

    /**
     * @ORM\OneToMany(targetEntity="Souk\BackBundle\Entity\Reservation", mappedBy="client")
     */
    private $reservations;
    /**
     * @ORM\OneToMany(targetEntity="Souk\BackBundle\Entity\Commandes", mappedBy="client")
     */
    private $commandes;


    /**
     * @return Collection|Commandes[]
     */
    public function getCommandes()
    {
        return $this->commandes;
    }
    /**
     * @return Collection|Reservation[]
     */
    public function getReservations()
    {
        return $this->reservations;
    }
    /**
     * @return Collection|Evennements[]
     */
    public function getEvennements()
    {
        return $this->evennements;
    }
    /**
     * @return Collection|Reclamations[]
     */
    public function getReclamations()
    {
        return $this->reclamations;
    }

    public function __construct()
    {
        parent::__construct();
        $this->reservations = new ArrayCollection();
        $this->evennements = new ArrayCollection();
        $this->commandes = new ArrayCollection();
        $this->reclamations = new ArrayCollection();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getTitreCommercial()
    {
        return $this->titre_commercial;
    }

    /**
     * @param string $titre_commercial
     */
    public function setTitreCommercial($titre_commercial)
    {
        $this->titre_commercial = $titre_commercial;
    }

    /**
     * @return \DateTime
     */
    public function getDateFinAb()
    {
        return $this->date_fin_ab;
    }

    /**
     * @param \DateTime $date_fin_ab
     */
    public function setDateFinAb($date_fin_ab)
    {
        $this->date_fin_ab = $date_fin_ab;
    }


}