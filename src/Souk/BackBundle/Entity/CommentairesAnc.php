<?php

namespace Souk\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * CommentairesAnc
 *
 * @ORM\Table(name="commentaires_anc")
 * @ORM\Entity(repositoryClass="Souk\BackBundle\Repository\CommentairesAncRepository")
 */
class CommentairesAnc
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
     * @ORM\ManyToOne(targetEntity="Souk\BackBundle\Entity\Annonces", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=true)
     */
    private $annonce;

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
     * @return CommentairesAnc
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
     * @return CommentairesAnc
     */
    public function setDateCmt($dateCmt)
    {
        $this->dateCmt = $dateCmt;

        return $this;
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

