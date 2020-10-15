<?php

require_once 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use App\UuidString;

$uuid = UuidString::returnUuid();
echo 'Your UUID: ' . $uuid;