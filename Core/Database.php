<?php

class Database
{
    private $pdo;
    private $sql;

    public function insert($tableName, $columns, $value)
    {
        $this->sql .= "INSERT INTO $tableName ($columns) VALUES ($value)";

    }

    public function get()
    {
        $stmt = $this->execute();
        return $stmt->fetchObject();

    }

    public function execute()
    {
        $this->connect();
        $sql = $this->sql;
        //print_r($sql);
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $this->sql = '';
        return $stmt;
    }

    public function connect()
    {
        $host = "localhost";
        $db = 'jobs_info_DB';
        $user = 'pdo_user';
        $password = 'Password@2';
        $pdo = null; //kad turetumem ka grazinti

        try {
            $pdo = new \PDO("mysql:host=$host; dbname=$db; charset=utf8", $user, $password);
            // set the PDO error mode to exception
            //   $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();

        }
        $this->pdo = $pdo;
    }

}