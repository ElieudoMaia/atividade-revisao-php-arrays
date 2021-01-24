<?php

  require_once('./database.php'); // $menu

  $product_id = null;

  if (!isset($_GET['product_id'])) {
    header('Location http://http://localhost/atividade_01/index.php');
  }
  
  $product_id = $_GET['product_id'];

  $selected_product = null;
  if ($product_id) {
    
    foreach ($menu as $value) {
      if ($value['id'] === $product_id) {
        $selected_product = $value;
      }
    }

    echo '
      <div style="display: inline-block; width: 100%; text-align: center; margin-bottom: 2rem; border: 1px solid #a2a2a2; padding: 1.5rem">
        <h2>
          ' . $selected_product['name'] . '
        </h2>
        <img src="./photos/' . $selected_product['photoURL'] . '" alt="foto da pizza" width="300" height="200">
        <p>R$ ' . $selected_product['price'] . '</p>
        <p>
        ' . $selected_product['ingredients'] . '
        </p>
        <p>
        ' . $selected_product['description'] . '
        </p>
        <form action="completed_order.php" method="GET">
          <input type="number" name="quantity" min="1" max="100" value="1" />
          <input type="text" name="pizza_name" value="'. $selected_product['name'] .'" hidden />
          <button type="submit">Finalizar Pedido</button>
        </form>
      </div>
    ';

  } else {
    echo 'Nenhum produto selecionado!';
  }

?>