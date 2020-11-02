<?php


class SavingsAccount
{
    protected float $amount;
    protected int $interest;
    protected float $deposited = 0;
    protected float $withdrawn = 0;
    protected float $totalInterest = 0;

    public function __construct(float $amount, int $interest)
    {
        $this->amount = $amount;
        $this->interest = $interest;
    }

    public function addAmount(float $addition): void
    {
        $this->amount += $addition;
        $this->deposited += $addition;
    }

    public function subtractAmount(float $subtraction): void
    {
        $this->amount -= $subtraction;
        $this->withdrawn += $subtraction;
    }

    public function addInterest(): void
    {
        $this->totalInterest += $this->amount * ($this->interest / (12));
        $this->amount += $this->amount * ($this->interest / (12));
    }

    public function getAmount(): float
    {
        return number_format($this->amount, 2, '.', '');
    }

    public function getDeposited(): float
    {
        return number_format($this->deposited, 2, '.', '');
    }

    public function getWithdrawn(): float
    {
        return number_format($this->withdrawn, 2, '.', '');
    }

    public function getTotalInterest(): float
    {
        return number_format($this->totalInterest, 2, '.', '');
    }
}