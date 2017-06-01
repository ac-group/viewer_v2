<?php

namespace ViewerBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $layers;


    /**
     * Add layer
     *
     * @param \ViewerBundle\Entity\Layer $layer
     *
     * @return User
     */
    public function addLayer(\ViewerBundle\Entity\Layer $layer)
    {
        $this->layers[] = $layer;

        return $this;
    }

    /**
     * Remove layer
     *
     * @param \ViewerBundle\Entity\Layer $layer
     */
    public function removeLayer(\ViewerBundle\Entity\Layer $layer)
    {
        $this->layers->removeElement($layer);
    }

    /**
     * Get layers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLayers()
    {
        return $this->layers;
    }
}
