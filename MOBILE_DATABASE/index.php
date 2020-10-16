<?php

require_once 'vendor/autoload.php';

use App\SQLiteConnection;
use App\SQLiteQuery;
use App\SearchForPerson;

//Get the phone number from the user
if (isset($_POST['phone'])) {
    $phoneNumber = $_POST['phone'];
}

//Connect to database and fetch PDO
$pdo = (new SQLiteConnection())->connect();
//Get everything from the database
$query = (new SQLiteQuery($pdo))->queryDb();
//Determine if the phone number is stored in the db
//And if it is return the name and surname of the person
$search = (new SearchForPerson())->search($query, $phoneNumber);

require './views/number.view.php';

//For your convenience here are all the phone numbers (they are all in e164)
//All the data in the db were randomised with the faker package
//+1668935370686
//+1728231376383
//+4205878512651
//+6091852683361
//+7518019391256