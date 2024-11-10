<?php

class Database
{
    private PDO $connection;

    private $statement;

    public function __construct(array $config)
    {
        // Build DSN string from config
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        // Initialize PDO connection
        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query(string $query, array $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function all()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrfail()
    {
        $result = $this->find();

        if (!$result)
            abort();

        return $result;
    }
}
