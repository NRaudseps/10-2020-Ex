<?php

namespace App;

class DataProcessing
{
    //This method saves the data
    public static function saveData(array $postRequest = []): void
    {
        //New update to the data
        $update = DataProcessing::getUpdate($postRequest);
        //The original data
        $data = DataProcessing::loadData();

        //Delete file
        unlink('./data/data.csv');
        //Create same file for writing
        $file = fopen('./data/data.csv', 'w+');
        //Go through all the data
        foreach ($data as $photo) {
            //If you reach the name of the updated data
            if ($photo[0] === $update[0]) {
                //Add or subtract the total like count
                fputcsv($file, [$photo[0], intval($photo[1]) + $update[1]]);
            } //Else just put the old data
            else {
                fputcsv($file, $photo);
            }
        }
        //Close the file
        fclose($file);
    }

    protected static function loadData(): array
    {
        //Open the file
        $file = fopen('./data/data.csv', 'r+');
        //Initialize an empty array where the data will be stored
        $data = [];
        //Checks to see if there is any data
        if (count(file('./data/data.csv')) === 0) {
            //Get the image names
            $images = Images::getImageName();
            //Store the data with a name and a 0 like count
            foreach ($images as $image) {
                $data[] = [$image, 0];
            }
        } else {
            //Else just get everything from the file
            while (($imageInfo = fgetcsv($file)) !== FALSE) {
                $data[] = $imageInfo;
            }
        }
        //Close the file
        fclose($file);

        //Return the data
        return $data;
    }

    protected static function getUpdate($postRequest): array
    {
        //If there is no post request return an empty array
        if (empty($postRequest)) {
            return [];
        }
        //Else get the name of the image
        $imageName = array_keys($postRequest)[0];
        //And the associated like or dislike
        $value = array_values($postRequest)[0];
        //If it is a like add one, else subtract one
        ($value === 'Like') ? $update = [$imageName, 1] : $update = [$imageName, -1];

        //Return the updated data
        return $update;
    }
}