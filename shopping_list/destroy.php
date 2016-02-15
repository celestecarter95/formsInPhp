<?php require_once('../includes/header.php'); ?>

<?php
if(isset($_POST['delete'])) {
  $id = $_POST['id'];
  //echo $item_delete;
  $sql = "DELETE FROM shopping_list WHERE id = '$id'";
  mysqli_query($mysql_connection, $sql);
  $result = mysqli_query($mysql_connection, $sql);
}
  header('Location: index.php');
?>
