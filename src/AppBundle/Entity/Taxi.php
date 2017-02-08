<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taxi
 *
 * @ORM\Table(name="taxi", indexes={@ORM\Index(name="driver_id", columns={"driver_id"})})
 * @ORM\Entity
 */
class Taxi
{
    /**
     * @var string
     *
     * @ORM\Column(name="taxi_registration_number", type="string", length=20, nullable=false)
     */
    private $taxiRegistrationNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="taxi_type", type="string", length=10, nullable=false)
     */
    private $taxiType;

    /**
     * @var integer
     *
     * @ORM\Column(name="taxi_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taxiId;

    /**
     * @var \AppBundle\Entity\Driver
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Driver")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="driver_id", referencedColumnName="driver_id")
     * })
     */
    private $driver;



    /**
     * Set taxiRegistrationNumber
     *
     * @param string $taxiRegistrationNumber
     * @return Taxi
     */
    public function setTaxiRegistrationNumber($taxiRegistrationNumber)
    {
        $this->taxiRegistrationNumber = $taxiRegistrationNumber;

        return $this;
    }

    /**
     * Get taxiRegistrationNumber
     *
     * @return string 
     */
    public function getTaxiRegistrationNumber()
    {
        return $this->taxiRegistrationNumber;
    }

    /**
     * Set taxiType
     *
     * @param string $taxiType
     * @return Taxi
     */
    public function setTaxiType($taxiType)
    {
        $this->taxiType = $taxiType;

        return $this;
    }

    /**
     * Get taxiType
     *
     * @return string 
     */
    public function getTaxiType()
    {
        return $this->taxiType;
    }

    /**
     * Get taxiId
     *
     * @return integer 
     */
    public function getTaxiId()
    {
        return $this->taxiId;
    }

    /**
     * Set driver
     *
     * @param \AppBundle\Entity\Driver $driver
     * @return Taxi
     */
    public function setDriver(\AppBundle\Entity\Driver $driver = null)
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
