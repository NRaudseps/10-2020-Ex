<?php

namespace App;

class Images
{
    public static function loadImages(): array
    {
        return array_diff(scandir('./img'), array('..', '.'));
    }
}