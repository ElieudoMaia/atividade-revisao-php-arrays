<?php
  $quantity = $_GET['quantity'];
  $pizza_name = $_GET['pizza_name'];
?>

<div style="text-align: center;">
  <h1>Pedido Finalizado com sucesso!</h1>
  <h2>Aguarde a Entrega que já estamos chegando!</h2>
  <p>Pizza: <?php echo $pizza_name ?></p>
  <p>Quantidade: <?php echo $quantity ?></p>

  <a href="index.php">
    <button>
      INICIO
    </button>
  </a>
</div>
