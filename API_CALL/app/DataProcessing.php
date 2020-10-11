<?php


namespace APIFY\app;


class DataProcessing
{
    //Method for getting data in a usable way
    public static function getData($file, $name): array
    {
        //Retrieve the name data from the .csv file if there is any
        $data = DataProcessing::retrieveDataFromFile($file, $name);
        //If .csv doesn't have the appropriate data
        if ($data === null) {
            //Get the data from the API
            $data = json_decode(file_get_contents("https://api.agify.io/?name={$name}"), true);
            //Save the data in the .csv file
            DataProcessing::saveData($file, $data);
        }

        return $data;
    }

    //Saves any new data on the .csv file
    protected static function saveData($file, $data): void
    {
        fputcsv($file, [
            $data['name'],
            $data['age'],
            $data['count'],
        ]);
    }

    //Retrieves any relevant data from the .csv file
    protected static function retrieveDataFromFile($file, $name)
    {
        //Loop through the file
        while (!feof($file)) {
            //Data on one line
            $personData = fgetcsv($file);
            //If that line has the appropriate name
            if ($name === $personData[0]) {
                //Retrieve that data
                $data = [
                    'name' => $personData[0],
                    'age' => $personData[1],
                    'count' => $personData[2]
                ];
            }
        }

        return $data;
    }
}