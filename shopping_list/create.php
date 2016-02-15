<?php require_once('../includes/header.php'); ?>

<?php
if(isset($_POST['submit'])) {
  $add_item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $store = $_POST['store'];

  if($_POST['item']) {
    if($quantity == '') {
      $quantity = 1;
    }
    $sql = "INSERT INTO shopping_list (item, quantity, price, store) VALUE ('$add_item', '$quantity', '$price', '$store')";
    //echo $sql;
    mysqli_query($mysql_connection, $sql);
  }
?>

<div class="jumbotron">
<p><strong>Item:</strong> <?= $add_item ?></p>
  <p><strong>Quantity:</strong> <?= $quantity ?></p>
  <p><strong>Price:</strong> <?= $price  ?></p>
  <p><strong>Store:</strong> <?= $store ?></p>
</div>

<?php } ?>
