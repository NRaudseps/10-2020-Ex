<?php

require_once 'vendor/autoload.php';

use App\Person;

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
    //Find the person in the db
    $person = Person::findPerson($_SESSION['input']);
    //If empty then no person with than pin was found
    if (!empty($person)) {
        $display = 'Unlocked';
    } else {
        $display = 'Locked';
    }
    //Set the session id as the person id
    $_SESSION['id'] = $person[0];

    //Start all over again
    $_SESSION['input'] = '';
}

//Load the view
require './views/pin.view.php';

//If unlocked go to the chatroom page
if ($display === 'Unlocked') {
    sleep(1);
    header("Location: ./views/chatroom.view.php?id=" . $_SESSION['id']);
    exit();
}
