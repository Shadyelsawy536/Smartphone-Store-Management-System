<?php

namespace App;
use mysqli;

class DB
{
    private string $username = 'root';
    private string $host = 'localhost';
    private string $database = 'inventory_Sys';
    private string $password = '';

    public mysqli $connection;

    public function __construct()
    {

        $this->connection = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database,
        );
    }
    public function check(): void
    {
        if ($this->connection->connect_error == null) {
            echo "Connected successfully";
        } else {
            echo "Connection failed";
        }
    }


}