<style>
  * {
    box-sizing: border-box;
    text-align: center;
    font-family: Ubuntu, sans-serif;
  }
</style>

<?php

require_once('./database.php'); // $menu

foreach ($menu as $key => $value) {
  echo '
    <div style="display: inline-block; width: 30%; margin-bottom: 2rem; border: 1px solid #a2a2a2; padding: 1.5rem">
      <h2>
        <label for="' . $key . '">
        ' . $value['name'] . '
        </label>
      </h2>
      <img src="./photos/' . $value['photoURL'] . '" alt="foto da pizza" width="300" height="200">
      <p>R$ ' . $value['price'] . '</p>
      <p>
      ' . $value['ingredients'] . '
      </p>
      <p>
      ' . $value['description'] . '
      </p>
      <a href="./basket.php?product_id=' . $value['id'] . '">
        <button type="button">Comprar</button>
      </a>
    </div>
    ';
}

?>
