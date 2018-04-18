<?php

namespace Souk\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * HistoriqueAbs
 *
 * @ORM\Table(name="historique_abs")
 * @ORM\Entity(repositoryClass="Souk\BackBundle\Repository\HistoriqueAbsRepository")
 */
class HistoriqueAbs
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_ab", type="date")
     */
    private $dateAb;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Souk\UserBundle\Entity\User",inversedBy="id")
     * @ORM\JoinColumn(name="commercial",referencedColumnName="id",onDelete="CASCADE")
     */
    private $commercial;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Souk\BackBundle\Entity\Abonnements",inversedBy="id")
     * @ORM\JoinColumn(name="abonnement",referencedColumnName="id",onDelete="CASCADE")
     */
    private $abonnement;

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
     * @return mixed
     */
    public function getAbonnement()
    {
        return $this->abonnement;
    }

    /**
     * @param mixed $abonnement
     */
    public function setAbonnement($abonnement)
    {
        $this->abonnement = $abonnement;
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
     * Set dateAb
     *
     * @param \DateTime $dateAb
     *
     * @return HistoriqueAbs
     */
    public function setDateAb($dateAb)
    {
        $this->dateAb = $dateAb;

        return $this;
    }

    /**
     * Get dateAb
     *
     * @return \DateTime
     */
    public function getDateAb()
    {
        return $this->dateAb;
    }
}

