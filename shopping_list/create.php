<?php require_once('../includes/header.php'); ?>

<?php if(isset($_POST['submit'])): ?>

<?php
  $add_item  = mysqli_real_escape_string($mysql_connection, $_POST['item']);
  $quantity  = mysqli_real_escape_string($mysql_connection, $_POST['quantity']);
  $price     = mysqli_real_escape_string($mysql_connection, $_POST['price']);
  $store     = mysqli_real_escape_string($mysql_connection, $_POST['store']);

  $errors = [];
  if(empty($add_item)) {
    $errors['item'] = "Please fill out the item field";
  }
  if(empty($store)) {
    $errors['store'] = "Pickout a store for this item";
  }
  if(empty($price)) {
    $errors['price'] = "Enter a 0.00 for the price if you don't know how much it cost";
  }
  if (!is_numeric($price)) {
    $errors['price'] = "No letters or symbols in the price field";
  }
  if (!is_numeric($quantity)) {
    $errors['quantity'] = "Quanity should only be a number";
  }

  if(empty($errors)) {
    if($quantity == '') {
      $quantity = 1;
    }
    $sql = "INSERT INTO shopping_list (item, quantity, price, store) VALUE ('$add_item', '$quantity', '$price', '$store')";
    //echo $sql;
    mysqli_query($mysql_connection, $sql);
  }
?>

  <?php if(empty($errors)): ?>
    <div class="card grey lighten-2">
      <div class="card-content ">
        <p><strong>Item:</strong> <?= $add_item ?></p>
        <p><strong>Quantity:</strong> <?= $quantity ?></p>
        <p><strong>Price:</strong> <?= $price  ?></p>
        <p><strong>Store:</strong> <?= $store ?></p>
      </div>
    </div>
  <?php else: ?>
      <?php require_once('new.php') ?>
  <?php endif ?>

<?php endif ?>
