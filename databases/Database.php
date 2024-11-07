<?php


class Database
{

    private object $connection;

    public function __construct($config)
    {

        $dns = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dns, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
             PDO::ATTR_PERSISTENT => true,
             PDO::ERRMODE_EXCEPTION => true,
             PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
    }

    public function query(string $query, $prams = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($prams);

        return $statement;
    }
}
