<?php

namespace Core;

use PDO;
use PDOException;

$servername = "localhost";
$username = "root";
$password = "root";



class Database
{
    private $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {


        $dsn = 'mysql:' . http_build_query($config, '', ';');
        try {
            $this->connection = new PDO("$dsn", $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    public function query($sql, $params = [])
    {
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);
        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}
