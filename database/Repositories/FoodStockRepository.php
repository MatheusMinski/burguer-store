<?php

namespace database\Repositories;

require_once __DIR__ . '/../Connect.php';

use database\Connect;

class FoodStockRepository
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = (new Connect())->getConnection();
    }

    public function index()
    {
        return $this->dbConnection->execute_query('SELECT * FROM food_stock')->fetch_all();
    }

    public function create(array $data) {}

    public function update(int $id, array $data)
    {
        return $this->dbConnection
            ->execute_query(
                "UPDATE food_stock SET name = '{$data['name']}', value = '{$data['value']}' WHERE id = {$id}"
            );
    }

    public function delete(int $id) {}
}
