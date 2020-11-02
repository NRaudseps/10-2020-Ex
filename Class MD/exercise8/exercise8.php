<?php

require_once 'SavingsAccount.php';

$amount = readline('How much money is in the account? ');
$interest = readline('Enter the annual interest rate: ');
$time = readline('How long has the account been open for? ');

$moneyBank = new SavingsAccount($amount, $interest);

for ($i = 1; $i <= $time; $i++) {
    $deposit = readline('Enter amount deposited for month ' . $i . ': ');
    $withdraw = readline('Enter amount withdrawn for month ' . $i . ': ');

    $moneyBank->addAmount($deposit);
    $moneyBank->subtractAmount($withdraw);
    $moneyBank->addInterest();
}

echo 'Total deposited: $' . $moneyBank->getDeposited() . PHP_EOL;
echo 'Total withdrawn: $' . $moneyBank->getWithdrawn() . PHP_EOL;
echo 'Interest earned: $' . $moneyBank->getTotalInterest() . PHP_EOL;
echo 'Ending balance: $' . $moneyBank->getAmount() . PHP_EOL;
