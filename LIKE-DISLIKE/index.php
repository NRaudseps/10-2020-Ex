<?php

require_once 'vendor/autoload.php';

use App\Images;
use App\DataProcessing;

$images = Images::loadImages();
DataProcessing::saveData($_POST);

require './views/images.view.php';