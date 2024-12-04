$mysqli = new mysqli(
    "127.0.0.1",
    "root",
    "strong_password",
    "burguer-store",
    3307
);

$mysqli->execute_query('CREATE TABLE food_stock (id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT, name varchar(255), value decimal(10,2) )');
