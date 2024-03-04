<?php

namespace Core;

use PDO;

class Database
{

    public $connection;
    public $statement;

    // public $statement;
    public function __construct($config, $username = "root", $password = "")
    {

        $dns = 'mysql:' . http_build_query($config, '', ';');
        // $this->connection = new PDO($dns, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        try {
            $this->connection = new PDO($dns, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (\PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }


    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }


    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}


