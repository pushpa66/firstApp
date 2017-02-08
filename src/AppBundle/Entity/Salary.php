<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salary
 *
 * @ORM\Table(name="salary")
 * @ORM\Entity
 */
class Salary
{
    /**
     * @var string
     *
     * @ORM\Column(name="month", type="string", length=20, nullable=false)
     */
    private $month;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_distance", type="integer", nullable=false)
     */
    private $totalDistance;

    /**
     * @var integer
     *
     * @ORM\Column(name="monthly_salary", type="integer", nullable=false)
     */
    private $monthlySalary;

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
     * Set month
     *
     * @param string $month
     * @return Salary
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string 
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set totalDistance
     *
     * @param integer $totalDistance
     * @return Salary
     */
    public function setTotalDistance($totalDistance)
    {
        $this->totalDistance = $totalDistance;

        return $this;
    }

    /**
     * Get totalDistance
     *
     * @return integer 
     */
    public function getTotalDistance()
    {
        return $this->totalDistance;
    }

    /**
     * Set monthlySalary
     *
     * @param integer $monthlySalary
     * @return Salary
     */
    public function setMonthlySalary($monthlySalary)
    {
        $this->monthlySalary = $monthlySalary;

        return $this;
    }

    /**
     * Get monthlySalary
     *
     * @return integer 
     */
    public function getMonthlySalary()
    {
        return $this->monthlySalary;
    }

    /**
     * Set driver
     *
     * @param \AppBundle\Entity\Driver $driver
     * @return Salary
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
