<?php

require_once 'Account.php';

//Your First Account Exercise

$firstAccount = new Account("Bob's account", 100.0);
$firstAccount->deposit(20.0);
echo 'My balance ' . $firstAccount->balance() . PHP_EOL;
echo PHP_EOL;

//Your First Money Transfer Exercise

$matt = new Account("Matt's account", 1000);
$me = new Account('My account', 0);
$matt->withdraw(100);
$me->deposit(100);
echo 'Matt' . "'" . 's balance ' . $matt->balance() . PHP_EOL;
echo 'My balance ' . $me->balance() . PHP_EOL;
echo PHP_EOL;

//Money Transfer Exercise

$a = new Account("A's account", 100);
$b = new Account("B's account", 0);
$c = new Account("C's account", 0);

echo 'Initial State' . PHP_EOL;
echo 'A' . "'" . 's balance ' . $a->balance() . PHP_EOL;
echo 'B' . "'" . 's balance ' . $b->balance() . PHP_EOL;
echo 'C' . "'" . 's balance ' . $c->balance() . PHP_EOL;

Account::transfer($a, $b, 50);
Account::transfer($b, $c, 25);

echo 'After Transfer' . PHP_EOL;
echo 'A' . "'" . 's balance ' . $a->balance() . PHP_EOL;
echo 'B' . "'" . 's balance ' . $b->balance() . PHP_EOL;
echo 'C' . "'" . 's balance ' . $c->balance() . PHP_EOL;