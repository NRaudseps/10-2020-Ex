<?php


namespace App;


class SearchForPerson
{
    public function search(array $tables, string $number = ''): array
    {
        //Go through all the tables
        foreach ($tables as $table) {
            //Does the phone number exist in the table
            if (in_array($number, $table)) {
                //Return the first name and the last name
                return [$table['first_name'], $table['last_name']];
            }
        }
        //Else return empty array
        return [];
    }
}