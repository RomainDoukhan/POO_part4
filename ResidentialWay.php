<?php
require_once __DIR__ . '/HighWay.php';
require_once __DIR__ . '/../vehicle/Bicycle.php';
require_once __DIR__ . '/../vehicle/Scooter.php';
require_once __DIR__ . '/../vehicle/Car.php';

final class ResidentialWay extends Highway
{
    private int $nbLane = 2;
    private int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Scooter || $vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        } else {
            return "Interdiction de rouler sur cette route";
        }
    }


    /**
     * Get the value of nbLane
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}
