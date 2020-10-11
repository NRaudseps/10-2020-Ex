<?php


class InterestCalculator
{
    public static function calculateInterest(int $principal, int $interestRate, int $time): string
    {
        //Compound Interest Formula A = P(1+r/n)^nt
        $result = $principal * (1 + ($interestRate / 100)) ** $time;

        //Return formatted result
        return number_format((float)$result, 2, '.', ',') . '€';
    }
}