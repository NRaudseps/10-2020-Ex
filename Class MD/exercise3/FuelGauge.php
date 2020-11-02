<?php


class FuelGauge
{
    protected int $fuel;
    const MAXFUEL = 70;

    public function __construct(int $fuel)
    {
        if ($fuel <= self::MAXFUEL && $fuel >= 0) {
            $this->fuel = $fuel;
        }
    }

    public function getFuel(): int
    {
        return $this->fuel;
    }

    public function addFuel(): void
    {
        if ($this->fuel < self::MAXFUEL) {
            $this->fuel++;
        }
    }

    public function useFuel(): void
    {
        if ($this->fuel > 0) {
            $this->fuel--;
        }
    }
}