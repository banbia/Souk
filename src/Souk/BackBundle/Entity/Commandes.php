<?php

namespace Souk\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commandes
 *
 * @ORM\Table(name="commandes")
 * @ORM\Entity(repositoryClass="Souk\BackBundle\Repository\CommandesRepository")
 */
class Commandes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \Date
     *
     * @Assert\Date()
     * @Assert\LessThan("today")
     * @ORM\Column(name="date_com", type="date")
     */
    private $dateCom;

    /**
     * @var float
     * @Assert\Range(
     *      min = 1,
     *      max = 50,
     *      minMessage = "Vous devez entrez une quantité d'au moins 1 ",
     *      maxMessage = "Vous ne pouvez pas commandez plus ce que 50"
     * )
     * @ORM\Column(name="quantite", type="float")
     */
    private $quantite;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Souk\BackBundle\Entity\Annonces",inversedBy="commandes")
     * @ORM\JoinColumn(name="annonce",referencedColumnName="id")
     */
    private $annonce;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Souk\UserBundle\Entity\User",inversedBy="reservations")
     * @ORM\JoinColumn(name="client",referencedColumnName="id")
     */
    private $client;



    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * @param mixed $annonce
     */
    public function setAnnonce($annonce)
    {
        $this->annonce = $annonce;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateCom
     *
     * @param \DateTime $dateCom
     *
     * @return Commandes
     */
    public function setDateCom($dateCom)
    {
        $this->dateCom = $dateCom;

        return $this;
    }

    /**
     * Get dateCom
     *
     * @return \DateTime
     */
    public function getDateCom()
    {
        return $this->dateCom;
    }

    /**
     * Set quantite
     *
     * @param float $quantite
     *
     * @return Commandes
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Commandes
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }
}

