<?php


namespace App;


class SQLiteQuery
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function queryDb()
    {
        //Select everything from the database
        $stmt = $this->pdo->query("SELECT * FROM phoneBank");

        //Put all the information in a table array
        $tables = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $tables[] = $row;
        }

        return $tables;
    }
}