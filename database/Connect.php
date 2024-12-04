<?php
@include('../configs/app.php');

class Connect
{
    public $connection;
    public function __construct()
    {
        $this->connection = new mysqli(
            getenv('DB_HOST'),
            getenv('DB_USERNAME'),
            getenv('DB_PASSWORD'),
            getenv('DB_NAME'),
            (int) getenv('DB_PORT')
        );
    }

    public function getConnection(): mysqli
    {
        return $this->connection;
    }
}
