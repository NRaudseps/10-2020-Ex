<?php

require_once 'app/InterestCalculator.php';

//Load the result
$result = InterestCalculator::calculateInterest((int)$_POST['principal'], (int)$_POST['interestRate'], (int)$_POST['time']);
//Load the view
require 'view/calculator.view.php';