<?php

require_once 'Dog.php';
require_once 'DogTest.php';

$dogs = [
    [
        'name' => 'Max',
        'sex' => 'male',
        'father' => 'Rocky',
        'mother' => 'Lady'
    ],
    [
        'name' => 'Coco',
        'sex' => 'male',
        'father' => 'Buster',
        'mother' => 'Molly',
    ],
    [
        'name' => 'Rocky',
        'sex' => 'male',
        'father' => 'Sam',
        'mother' => 'Molly',
    ],
    [
        'name' => 'Buster',
        'sex' => 'male',
        'father' => 'Sparky',
        'mother' => 'Lady',
    ],
];

$dogCollection = (new DogTest())->main($dogs);