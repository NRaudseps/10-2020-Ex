<?php

require_once 'Date.php';

$choice = (string)readline('Do you want to see your date (not the romantic kind)? (yes/no) ');
(strtolower($choice) === 'yes') ? $choice = true : $choice = false;

//Loops to ask the question again till the user says no
while ($choice) {
    $day = (string)readline('Set your day: ');
    $month = (string)readline('Set your month: ');
    $year = (string)readline('Set your year: ');

    $date = new Date($day, $month, $year);
    echo 'The date is: ' . $date->displayDate() . PHP_EOL;
    $choice = readline('Do you want to see your date (again I am sorry but not a romantic date)? (yes/no) ');
    (strtolower($choice) === 'yes') ? $choice = true : $choice = false;
}