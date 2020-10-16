<?php

namespace App;

class DataProcessing
{
    public static function saveData(array $input = []): void
    {
        $update = DataProcessing::getUpdate($input);
        $data = DataProcessing::loadData();

        unlink('./data/data.csv');
        $file = fopen('./data/data.csv', 'w+');
        foreach ($data as $photo) {
            if($photo[0]===$update[0]){
                fputcsv($file, [$photo[0], intval($photo[1]) + $update[1]]);
            }
            else {
                fputcsv($file, $photo);
            }
        }
        fclose($file);
    }

    protected static function loadData(): array
    {
        $fp = file('./data/data.csv');
        $file = fopen('./data/data.csv', 'r+');
        $data = [];
        if (count($fp) === 0) {
            $images = Images::loadImages();
            foreach ($images as $image) {
                $image = DataProcessing::formatString($image);
                $data[] = [$image, 0];
            }
        } else {
            while (($imageInfo = fgetcsv($file)) !== FALSE) {
                $data[] = $imageInfo;
            }
        }
        fclose($file);

        return $data;
    }

    protected static function formatString(string $string): string
    {
        return substr($string, 0, strlen($string) - 5);
    }

    protected static function getUpdate($input): array
    {
        $key = DataProcessing::formatString(array_keys($input)[0]);
        $value = array_values($input)[0];
        ($value === 'Like') ? $update = [$key, 1] : $update = [$key, -1];

        return $update;
    }
}