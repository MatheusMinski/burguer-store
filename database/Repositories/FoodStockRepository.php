<?php
class FoodStockRepository {
    public function __construct(private $dbConnection){
        $this->dbConnection = (new Connect())->getConnection();
    }

    public function index(){
        return $this->dbConnection->execute_query('SELECT * FROM food_stock');
    }

    public function create(array $data){
        
    }

    public function update(int $id, array $data){
        
    }

    public function delete(int $id){
        
    }
}
?>