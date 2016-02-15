<?php require_once('../includes/header.php'); ?>

<?php
if(isset($_POST['submit'])) {
  $add_item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $store = $_POST['store'];
  $id = $_POST['id'];

  if($_POST['item']) {
    if($quantity == '') {
      $quantity = 1;
    }
    $sql = "UPDATE shopping_list SET item='$add_item', quantity='$quantity', price='$price', store='$store' WHERE id='$id'";
    //echo $sql;
    mysqli_query($mysql_connection, $sql);
  }

  header("Location: show.php?id=$id");
} else {
  header('Location: index.php');
}
?>
