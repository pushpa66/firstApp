<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gpslocationcustomer
 *
 * @ORM\Table(name="gpslocationcustomer", uniqueConstraints={@ORM\UniqueConstraint(name="customer_id_2", columns={"customer_id"}), @ORM\UniqueConstraint(name="customer_id_3", columns={"customer_id"})}, indexes={@ORM\Index(name="customer_id", columns={"customer_id"}), @ORM\Index(name="customer_id_4", columns={"customer_id"})})
 * @ORM\Entity
 */
class Gpslocationcustomer
{
    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=20, nullable=false)
     */
    private $location;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="customer_id")
     * })
     */
    private $customer;



    /**
     * Set location
     *
     * @param string $location
     * @return Gpslocationcustomer
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
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     * @return Gpslocationcustomer
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
