<?php

namespace App;

use Ramsey\Uuid\Uuid;

class UuidString
{
    public static function returnUuid()
    {
        return Uuid::uuid4()->toString();
    }
}