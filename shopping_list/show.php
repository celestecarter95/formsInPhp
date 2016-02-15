<?php require_once('../includes/header.php'); ?>

<?php
$id = $_GET['id'];

$sql = "SELECT * FROM shopping_list WHERE id = '$id'";

$result = mysqli_query($mysql_connection, $sql);
?>

<?php if($row = mysqli_fetch_array($result)): ?>

<h1>Detailed View of <?= $row['item'] ?></h1>

<div class="jumbotron">
  <p><strong>Item:</strong> <?= $row['item'] ?></p>
  <p><strong>Quantity:</strong> <?= $row['quantity'] ?></p>
  <p><strong>Price:</strong> <?= $row['price'] ?></p>
  <p><strong>Store:</strong> <?= $row['store'] ?></p>
</div>

<?php else: ?>

<p>No such record.</p>

<?php endif ?>

<?php require_once('../includes/footer.php'); ?>
