<?php

namespace App;

class Product
{
    public string $name;
    protected int $price;
    protected int $amount;

    public function __construct(string $name, int $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProducts(): string
    {
        return $this->name . ', price ' . number_format($this->price / 100, 2) . ' EUR, amount ' . $this->amount . PHP_EOL;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}