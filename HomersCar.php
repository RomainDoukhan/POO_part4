<?php

require_once 'Vehicle.php';

class HomersCar extends Vehicle
{
    public const ALLOWED_ENERGIES =
    [
        'fuel',
        'electric'
    ];

    private string $energy = 'electric';
    private int $energyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        if ($this->hasParkBrake == true) {
            throw new Exception("Ton frein à main est serré");
        }
        $this->currentSpeed = 20;
        return "Je roule";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
