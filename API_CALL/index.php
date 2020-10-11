<?php

require_once 'app/Person.php';
require_once 'app/DataProcessing.php';

use APIFY\app\Person;
use APIFY\app\DataProcessing;

//Get post name and save it as an object
$user = new Person($_POST['username']);
$username = $user->getName();

//Open the .csv file
$file = fopen('./data/nameData.csv', 'rw+');
//Send the file and the name to a processing class which will return usable data
$data = DataProcessing::getData($file, $username);

//Reformat the data so it can be used in the view
$name = $data['name'];
$age = $data['age'];
$count = $data['count'];

//Load up the view
require 'view/name.view.php';