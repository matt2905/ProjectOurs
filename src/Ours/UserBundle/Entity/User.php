<?php

namespace Ours\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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

    /**
     * @var ArrayCollection $personages
     * @ORM\OneToMany(targetEntity="Ours\UserBundle\Entity\Personage", mappedBy="user")
     */
    private $personages;

    public function __construct()
    {
        parent::__construct();
        $this->personages = new ArrayCollection();
        $this->roles = array('ROLE_USER');
    }

    /**
     * set ArrayCollection Personages
     *
     * @param $personages
     */
    public function setPersonages(ArrayCollection $personages)
    {
        $this->personages = $personages;
    }

    /**
     * get Personages
     *
     * @return array $personages
     */
    public function getPersonages()
    {
        return $this->personages;
    }

    /**
     * add Personage
     *
     * @param Personage $personage
     */
    public function addPersonage(Personage $personage)
    {
        $this->personages[] = $personage;
        $personage->setUser($this);
    }

    /**
     * remove Personage
     *
     * @param Personage $personage
     */
    public function removePersonage(Personage $personage)
    {
        $this->personages->removeElement($personage);
    }
}