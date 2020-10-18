<?php


namespace App;


class Chatroom
{
    public static function saveMessage(string $id, string $message): void
    {
        //Reach the end of the file
        $file = fopen('../data/messages.csv', 'r+');
        while (($data = fgetcsv($file)) !== FALSE) {
        }
        //Save the appropriate message with the id
        fputcsv($file, [$id, $message]);
        fclose($file);
    }
}