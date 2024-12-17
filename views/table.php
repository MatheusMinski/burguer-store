<!DOCTYPE html>

<?php
require_once('database/Repositories/FoodStockRepository.php');

use database\Repositories\FoodStockRepository;

$products = (new FoodStockRepository())->index();
?>

<div id='app'>
    <div id='tableTitle' class='flex-center'>
        <h1>Estoque de produtos</h1>
    </div>
    <div id='tableContent' class='flex-center'>
        <table id='productsTable'>
            <th>Id</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Ações</th>
            <?php
            foreach ($products as $product) {
                echo '<td>' . $product[0] . '</td>';
            }
            ?>

            <?php
            foreach ($products as $product) {
                echo "<form action='views/form.php' method='get'>";
                echo '<tr>';
                echo '<td>' . $product[0] . '</td>';
                echo '<td>' . $product[1] . '</td>';
                echo '<td>' . $product[2] . '</td>';

                echo "<input name='id', value={$product[0]} hidden />";
                echo "<input name='name', value={$product[1]} hidden />";
                echo "<input name='value', value={$product[2]} hidden />";
                echo "<td><button class='btn'  type='submit'>editar</button></td>";
                echo '</tr>';
                echo "</form>";
            }
            ?>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            url: '<?php bloginfo('template_url'); ?>/functions/twitter.php',
            data: "tweets=<?php echo $ct_tweets; ?>&account=<?php echo $ct_twitter; ?>",
            success: function(data) {
                $('#twitter-loader').remove();
                $('#twitter-container').html(data);
            }
        });
   });
</script>