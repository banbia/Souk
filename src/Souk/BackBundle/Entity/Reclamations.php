<?php

namespace Souk\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * Reclamations
 *
 * @ORM\Table(name="reclamations")
 * @ORM\Entity(repositoryClass="Souk\BackBundle\Repository\ReclamationsRepository")
 */
class Reclamations
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
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rec", type="date")
     */
    private $dateRec;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Souk\UserBundle\Entity\User",inversedBy="reclamations")
     * @ORM\JoinColumn(nullable=true)
     */
    private $client;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Souk\UserBundle\Entity\User",inversedBy="id")
     * @ORM\JoinColumn(name="commercial",referencedColumnName="id",onDelete="CASCADE")
     */
    private $commercial;

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
    public function getCommercial()
    {
        return $this->commercial;
    }

    /**
     * @param mixed $commercial
     */
    public function setCommercial($commercial)
    {
        $this->commercial = $commercial;
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Reclamations
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateRec
     *
     * @param \DateTime $dateRec
     *
     * @return Reclamations
     */
    public function setDateRec($dateRec)
    {
        $this->dateRec = $dateRec;

        return $this;
    }

    /**
     * Get dateRec
     *
     * @return \DateTime
     */
    public function getDateRec()
    {
        return $this->dateRec;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Reclamations
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

