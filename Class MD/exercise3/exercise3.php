<?php

require_once 'FuelGauge.php';
require_once 'Odometer.php';

$fuel = new FuelGauge(0);
$distance = new Odometer(0);

echo 'Filling the tank till full' . PHP_EOL;
sleep(2);

//While fuel is less than maximum add one litre every 0.7 seconds
while ($fuel->getFuel() < FuelGauge::MAXFUEL) {
    $fuel->addFuel();
    echo 'Current Fuel Capacity: ' . $fuel->getFuel() . PHP_EOL;
    usleep(70000);
}

echo 'Starting to drive' . PHP_EOL;
sleep(2);

//While the tank has fuel print the mileage and fuel that is in the tank
while ($fuel->getFuel() > 0) {
    $distance->addMileage($fuel);
    echo 'Current Mileage: ' . $distance->getMileage() . 'km' . PHP_EOL;
    echo 'Current Fuel: ' . $fuel->getFuel() . ' litres' . PHP_EOL;
    echo PHP_EOL;

    //Prints every 0.1 seconds
    usleep(10000);
}