<?php


class Database extends SQLite3
{
    public function __construct($filename, $flags = null, $encryption_key = null)
    {
        try {
            $this->open($filename);
        } catch (Exception $e){
            echo $e;
        }
    }
}