<?php

namespace Souk\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints\Image;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Images
 *
 * @ORM\Table(name="images")
 * @ORM\Entity(repositoryClass="Souk\BackBundle\Repository\ImagesRepository")
 * @Vich\Uploadable
 */
class Images
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
   * NOTE: This is not a mapped field of entity metadata, just a simple property.
   *
   * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
   *
   * @var File
   */
  private $imageFile;
  /**
   * @var string
   *
   * @ORM\Column(name="image_name", type="string", length=255, nullable=true)
   */
  private $imageName;
  /**
   * @var \DateTime
   *
   * @ORM\Column(name="update_at", type="datetime",nullable=true)
   */
  private $updateAt;

    /**
     * @ORM\ManyToOne(targetEntity="Souk\BackBundle\Entity\Annonces", inversedBy="images")
     * @ORM\JoinColumn(nullable=true)
     */
    private $annonce;
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

  public function setImageFile(File $image = null)
  {
    $this->imageFile = $image;
    if ($image) {
      $this->updatedAt = new \DateTime('now');
    }
    return $this;
  }
  /**
   * @return File|null
   */
  public function getImageFile()
  {
    return $this->imageFile;
  }
  /**
   * Set imageName
   *
   * @param string $imageName
   *
   * @return Image
   */
  public function setImageName($imageName)
  {
    $this->imageName = $imageName;
    return $this;
  }
  /**
   * Get imageName
   *
   * @return string
   */
  public function getImageName()
  {
    return $this->imageName;
  }
  /**
   * Set updateAt
   *
   * @param \DateTime $updateAt
   *
   * @return Image
   */
  public function setUpdateAt($updateAt)
  {
    $this->updateAt = $updateAt;
    return $this;
  }
  /**
   * Get updateAt
   *
   * @return \DateTime
   */
  public function getUpdateAt()
  {
    return $this->updateAt;
  }

}

