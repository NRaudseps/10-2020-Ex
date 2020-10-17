<?php

require_once 'vendor/autoload.php';

use App\Images;
use App\DataProcessing;

//Get links for the images for the view
$images = Images::getImageLinks();
//Get the name of those links
$imageNames = Images::getImageName();
//Save the user input
DataProcessing::saveData($_POST);

//Load the view
require './views/images.view.php';