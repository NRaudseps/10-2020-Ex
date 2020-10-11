<?php

require_once 'app/Person.php';
require_once 'app/DataStorage.php';

use REGISTER\app\Person;
use REGISTER\app\DataStorage;

//Personal address one can search
$address = '';
//A new person that can be saved
$person = new Person();
//Determine if it is either saving or searching a person
if (count($_POST) === 4) {
    $person = new Person($_POST['name'], $_POST['surname'], $_POST['code'], $_POST['address']);
} elseif (count($_POST) === 1) {
    $address = $_POST['code'];
}

//Save personal data
$file = fopen('./data/info.csv', 'rw+');
$data = DataStorage::saveData($file, $person->getInfo());
fclose($file);

//Find the relevant person
$file = fopen('./data/info.csv', 'rw+');
$personQuery = DataStorage::findPerson($file, $address);
fclose($file);

//Load the view
require './views/register.view.php';