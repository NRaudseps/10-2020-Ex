<?php


class CustomerPercentages
{
    public int $numberSurveyed;

    public function __construct(int $numberSurveyed)
    {
        $this->numberSurveyed = $numberSurveyed;
    }

    public function thoseWhoBuyOneOrMoreEnergyDrinks(float $purchasedEnergyDrinks): float
    {
        return number_format($this->numberSurveyed * $purchasedEnergyDrinks,
            2, '.', '');
    }

    public function thoseWhoPreferCitrus(float $purchasedEnergyDrinks, float $citrusBuyer): float
    {
        //The exercise clearly states that OF THOSE people who purchase energy drinks (meaning those who pay regularly)
        //That x number of those people prefer citrus over other drinks
        //So it is a fraction of a fraction of drinkers.
        return number_format(self::thoseWhoBuyOneOrMoreEnergyDrinks($purchasedEnergyDrinks) * $citrusBuyer,
            2, '.', '');
    }
}