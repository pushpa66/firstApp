<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gpslocationdriver
 *
 * @ORM\Table(name="gpslocationdriver")
 * @ORM\Entity
 */
class Gpslocationdriver
{
    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=20, nullable=false)
     */
    private $location;

    /**
     * @var \AppBundle\Entity\Driver
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Driver")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="driver_id", referencedColumnName="driver_id")
     * })
     */
    private $driver;



    /**
     * Set location
     *
     * @param string $location
     * @return Gpslocationdriver
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set driver
     *
     * @param \AppBundle\Entity\Driver $driver
     * @return Gpslocationdriver
     */
    public function setDriver(\AppBundle\Entity\Driver $driver)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Get driver
     *
     * @return \AppBundle\Entity\Driver 
     */
    public function getDriver()
    {
        return $this->driver;
    }
}
