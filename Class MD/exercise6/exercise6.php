<?php

require_once 'CustomerPercentages.php';

$surveyed = 12467;
$purchasedEnergyDrinks = 0.14;
$preferCitrus = 0.64;

$calculator = new CustomerPercentages($surveyed);

echo "Total number of people surveyed " . $surveyed . PHP_EOL;
echo "Approximately " . $calculator->thoseWhoBuyOneOrMoreEnergyDrinks($purchasedEnergyDrinks)
    . " bought at least one energy drink" . PHP_EOL;
echo $calculator->thoseWhoPreferCitrus($purchasedEnergyDrinks, $preferCitrus) . " of those "
    . "prefer citrus flavored energy drinks." . PHP_EOL;