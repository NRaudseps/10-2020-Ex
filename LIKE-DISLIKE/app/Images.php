<?php

namespace App;

class Images
{
    //Get name of image
    public static function getImageName()
    {
        $images = static::getJSON();

        return array_keys($images);
    }

    //Get link of image
    public static function getImageLinks()
    {
        $images = static::getJSON();

        return array_values($images);
    }

    //Get json file contents and store that in an array
    protected static function getJSON()
    {
        $file = file_get_contents('./data/images.json');

        return json_decode($file, true);
    }
}