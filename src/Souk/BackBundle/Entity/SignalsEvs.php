<?php

namespace Souk\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * SignalsEvs
 *
 * @ORM\Table(name="signals_evs")
 * @ORM\Entity(repositoryClass="Souk\BackBundle\Repository\SignalsEvsRepository")
 */
class SignalsEvs
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
     * @ORM\Column(name="date_sg", type="date")
     */
    private $dateSg;
    /**
     * @ORM\ManyToOne(targetEntity="Souk\BackBundle\Entity\Evennements", inversedBy="signals")
     * @ORM\JoinColumn(nullable=true)
     */
    private $evennement;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Souk\UserBundle\Entity\User",inversedBy="id")
     * @ORM\JoinColumn(name="client",referencedColumnName="id",onDelete="CASCADE")
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
    public function getEvennement()
    {
        return $this->evennement;
    }

    /**
     * @param mixed $evennement
     */
    public function setEvennement($evennement)
    {
        $this->evennement = $evennement;
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
     * @return SignalsEvs
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
     * Set dateSg
     *
     * @param \DateTime $dateSg
     *
     * @return SignalsEvs
     */
    public function setDateSg($dateSg)
    {
        $this->dateSg = $dateSg;

        return $this;
    }

    /**
     * Get dateSg
     *
     * @return \DateTime
     */
    public function getDateSg()
    {
        return $this->dateSg;
    }
}

