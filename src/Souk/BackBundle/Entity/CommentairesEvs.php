<?php

namespace Souk\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * CommentairesEvs
 *
 * @ORM\Table(name="commentaires_evs")
 * @ORM\Entity(repositoryClass="Souk\BackBundle\Repository\CommentairesEvsRepository")
 */
class CommentairesEvs
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
     * @var \Date
     *
     * @ORM\Column(name="date_cmt", type="date")
     */
    private $dateCmt;

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
     * @ORM\ManyToOne(targetEntity="Souk\BackBundle\Entity\Evennements", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */
    private $evennement;

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
     * @return CommentairesEvs
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
     * Set dateCmt
     *
     * @param \DateTime $dateCmt
     *
     * @return CommentairesEvs
     */
    public function setDateCmt($dateCmt)
    {
        $this->dateCmt = $dateCmt;

        return $this;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get dateCmt
     *
     * @return \DateTime
     */
    public function getDateCmt()
    {
        return $this->dateCmt;
    }
}

