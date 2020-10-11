<?php


namespace REGISTER\app;


class DataStorage
{
    //Saves the appropriate personal data
    public static function saveData($file, array $person): bool
    {
        //Checks to see if a person or someone with the same code exists
        if (DataStorage::checkData($file, $person)) {
            //If not then save the data in the .csv file
            fputcsv($file, $person);

            return true;
        }

        return false;
    }

    protected static function checkData($file, array $person): bool
    {
        //Go through the .csv file
        while (!feof($file)) {
            $personInfo = fgetcsv($file);
            //Does the same person or address already exist
            if ($personInfo === $person) {
                return false;
            } elseif ($personInfo[2] === $person[2]) {
                return false;
            }
        }

        return true;
    }

    public static function findPerson($file, string $address): array
    {
        //Go through the data
        while (!feof($file)) {
            $personInfo = fgetcsv($file);
            //Does the address exist in the .csv file
            if ($personInfo[2] === $address) {
                return $personInfo;
            }
        }

        //If it doesnt exist return empty array
        return [];
    }
}