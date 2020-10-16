<?php

namespace App;

class Pin
{
    protected int $pin;

    public function __construct()
    {
        //Set the pin from the file
        $this->pin = (int)$this->getPin()[0];
    }

    public function checkPin(int $input): bool
    {
        return $this->pin === $input;
    }

    protected function getPin(): array
    {
        //Get the pin from the pinStorage.csv file
        $file = fopen('./data/pinStorage.csv', 'r+');

        return fgetcsv($file);
    }
}