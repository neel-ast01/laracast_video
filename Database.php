<?php

class Database
{

    public $connection;

    public function __construct($config, $username = "root", $password = "")
    {

        // $dns = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $dns = 'mysql:' . http_build_query($config, '', ';');



        $this->connection = new PDO($dns, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);



    }

    public function query($query)
    {

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}