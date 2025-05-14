<?php


$servername = "localhost";
$username = "root";
$password = "root";


class Database
{
    private $connection;

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
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
