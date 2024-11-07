<?php

class Database
{
    private PDO $connection;

    public function __construct(array $config)
    {
        try {
            // Build DSN string from config
            $dsn = 'mysql:' . http_build_query($config, '', ';');

            // Initialize PDO connection
            $this->connection = new PDO($dsn, 'root', '', [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT         => true,
                PDO::ERRMODE_EXCEPTION       => true,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        } catch (\PDOException $exception) {
            // Proper exception handling (log or show error)
            die('Connection failed: ' . $exception->getMessage());
        }
    }

    public function query(string $query, array $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);

            $statement->execute($params);

            return $statement;
        } catch (\PDOException $exception) {
            die('Query failed: ' . $exception->getMessage());
        }
    }
}
