<?php


class Account
{
    protected string $name;
    protected float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function balance(): string
    {
        return (string)number_format($this->balance, 2, '.', ',');
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }

    public static function transfer(Account $from, Account $to, float $amount): void
    {
        $from->withdraw($amount);
        $to->deposit($amount);
    }
}