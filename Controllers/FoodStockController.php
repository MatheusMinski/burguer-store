<?php

require_once('../database/Repositories/FoodStockRepository.php');

use database\Repositories\FoodStockRepository;

echo $products = (new FoodStockRepository())->update($_POST['id'], ['name' => $_POST['name'], 'value' => $_POST['value']]);

return header('Location: /');

?>