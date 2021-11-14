<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES =
    [
        'fuel',
        'hybrid'
    ];

    private string $energy = 'hybrid';
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, int $capacity, int $loading)
    {
        parent::__construct($color, $nbSeats, $capacity, $loading);
        $this->capacity = $capacity;
        $this->loading = $loading;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity($capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading($loading): void
    {
        $this->loading = $loading;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }
}
