<?php

namespace App\Models;

class Stock
{
    protected string $symbol;
    protected string $name;
    protected float $open;
    protected float $close;
    protected int $volume;
    protected string $timeStamp;

    public function __construct(string $symbol, string $name, float $open, float $close, int $volume, string $timeStamp)
    {
        $this->symbol = $symbol;
        $this->name = $name;
        $this->open = $open;
        $this->close = $close;
        $this->volume = $volume;
        $this->timeStamp = $timeStamp;
    }

    public function symbol(): string
    {
        return $this->symbol;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function open(): float
    {
        return $this->open;
    }

    public function close(): float
    {
        return $this->close;
    }

    public function volume(): int
    {
        return $this->volume;
    }

    public function timeStamp(): string
    {
        return $this->timeStamp;
    }
}