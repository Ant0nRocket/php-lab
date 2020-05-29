<?php

class Database
{
    private $host = "localhost";
    private $db_name = "rest_api_learn";
    private $username = "root";
    private $password = "pft,jr86";

    public $connection;

    public function getConnection()
    {
        $this->$connection = null;

        try {
            $this->$connection = new PDO(
                "mysql:host=$this->$host;dbname=$this->$db_name;",
                $this->$username,
                $this->$password
            );
        } catch (PDOException $ex) {
            echo "Connection error: $ex->getMessage()";
        }
    }
}
