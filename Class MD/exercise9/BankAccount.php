<?php


class BankAccount
{
    protected string $name;
    protected float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function showUserNameAndBalance(): string
    {
        return ($this->balance >= 0) ?
            $this->name . ', $' . number_format($this->balance, 2) :
            $this->name . ', -$' . number_format(abs($this->balance), 2);
    }
}