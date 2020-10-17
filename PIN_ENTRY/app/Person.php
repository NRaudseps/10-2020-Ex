<?php


namespace App;


class Person
{
    public static function findPerson(string $pin): array
    {
        //Open the database
        $file = fopen('./data/persons.csv', 'r+');
        //Search through all the db
        while (($person = fgetcsv($file)) !== FALSE) {
            //If the pin matches one of the persons pins
            if ($person[2] === $pin) {
                //return the information on that person
                return $person;
            }
        }
        fclose($file);

        //If nothing return an empty array
        return [];
    }
}