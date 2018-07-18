<?php 
namespace Classes;

use Classes\Connection;


class Database
{

    private $conn;


    public function __construct(Connection $connection)
    {
        $this->conn = $connection;
    }

    public function select()
    {
        return $this->conn;
    }

}