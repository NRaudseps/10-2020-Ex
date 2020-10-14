<?php

require_once 'app/Pin.php';

use PIN\app\Pin;

$pin = new Pin('1123');
var_dump($pin->checkPin('1123'));

var_dump($_POST);

require './views/pin.view.php';