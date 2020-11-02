<?php


class Odometer
{
    protected int $mileage;
    const MAXDISTANCE = 999.999;

    public function __construct(int $mileage = 0)
    {
        $this->mileage = $mileage;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function addMileage(FuelGauge $fuelGauge): void
    {
        if($this->mileage < self::MAXDISTANCE && $this->mileage >= 0) {
            if ($this->mileage >= 1000) {
                $this->mileage = 0;
            }
            $this->mileage++;
            if ($this->mileage % 10 === 0) {
                $fuelGauge->useFuel();
            }
        }
        else {
            $this->mileage = 0;
        }
    }
}