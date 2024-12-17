<!DOCTYPE html>
<html>

<head>
    <title> Burguer Store</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <form method="POST" action="../Controllers/FoodStockController.php">
        <div id="container">
            <div>
               <h3>Alterar as configurações do <?php echo $_GET['name'] ?></h3>
            </div>
            <form action="Welcome.php" method="PUT">
                <label>Nome:</label>
                <input name="name" type="text" value="<?php echo $_GET['name'] ?>">
                <label>Quantidade:</label>
                <input name="value" type="numeric" value="<?php echo $_GET['value'] ?>">

                <input hidden name="id" value="<?php echo $_GET['id'] ?>">

                <button style="margin-top: 5px;" type="submit">Salvar</button>
            </form>
        </div>
    </form>
</body>

</html>

<style>
    body {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    #container {
        width: 50vw;
        padding: 10px;
        box-shadow: 2px 2px rgb(124, 124, 124);
        border-radius: 10px;
        border: solid 1px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>