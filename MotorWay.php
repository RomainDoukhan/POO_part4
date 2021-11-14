<?php
require_once __DIR__ . '/HighWay.php';
require_once __DIR__ . '/../vehicle/Car.php';
require_once __DIR__ . '/../vehicle/Truck.php';

final class Motorway extends Highway
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
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
