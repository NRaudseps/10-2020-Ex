<?php


namespace App;


class SQLiteConnection
{
    const PATH_TO_SQLITE_FILE = './db/phone.db';

    private $pdo = null;

    public function connect()
    {
        //If pdo is null make new PDO
        if ($this->pdo === null) {
            $this->pdo = new \PDO("sqlite:" . SQLiteConnection::PATH_TO_SQLITE_FILE);
        }

        return $this->pdo;
    }
}