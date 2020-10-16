<?php

require_once 'vendor/autoload.php';

use App\Pin;

//Get Pin
$pin = new Pin();
//This var will show in the end if the pin code was correct or not
$display = '';
session_start();

//$_SESSION['input'] is the input from the user
//Initialize input
if (!isset($_SESSION['input'])) {
    $_SESSION['input'] = '';
//    As long the input count is below four then add the post request to the input
} elseif (strlen($_SESSION['input']) < 4) {
    $_SESSION['input'] .= $_POST['num'];
}

//If the user submits
if (isset($_POST['submit'])) {
    //Check the pin. If correct unlock else lock.
    if ($pin->checkPin((int)$_SESSION['input'])) {
        $display = 'Unlocked';
    } else {
        $display = 'Locked';
    }
    //Start all over again
    $_SESSION['input'] = '';
}

//Load the view
require './views/pin.view.php';