<?php

namespace PIN\app;

class Pin
{
    private int $pin;

    public function __construct(int $pin)
    {
        $this->pin = $pin;
    }

    public function checkPin(int $input): bool
    {
        return $this->pin === $input;
    }
}