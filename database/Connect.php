<?php
namespace database;

use mysqli;

//require_once('./configs/app.php');

class Connect
{
    public $connection;
    public function __construct()
    {
        $this->connection = new mysqli(
            '127.0.0.1',
            'root',
            'strong_password',
            'burguer-store',
            3307
        );

        /**$this->connection = new mysqli(
            getenv('DB_HOST'),
            getenv('DB_USERNAME'),
            getenv('DB_PASSWORD'),
            getenv('DB_NAME'),
            getenv('DB_PORT'),
        );*/
    }

    public function getConnection(): mysqli
    {
        return $this->connection;
    }
}
