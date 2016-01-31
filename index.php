<?php include('includes/header.php'); ?>

<style>
th, td {
    text-align: center;
}
</style>


<?php
$mysql_connection = mysqli_connect('mysql.cs.dixie.edu', 'ccarter', 'helloworld5595', 'ccarter');

if(isset($_POST['submit'])) {
  $add_item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $store = $_POST['store'];

  $mysql_connection = mysqli_connect('mysql.cs.dixie.edu', 'ccarter', 'helloworld5595', 'ccarter');
  if($_POST['item']) {
    if($quantity == '') {
      $quantity = 1;
    }
    $sql = "INSERT INTO shopping_list (item, quantity, price, store) VALUE ('$add_item', '$quantity', '$price', '$store')";
    //echo $sql;
    mysqli_query($mysql_connection, $sql);
  }
  else {
    //header('Location: list.php');
    echo "Please at least add an item name.";
  }
}

if(isset($_POST['edit_submit'])) {
  $add_item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $store = $_POST['store'];
  $edit_item = $_POST['edit_item'];

  if($_POST['item']) {
    if($quantity == '') {
      $quantity = 1;
    }
    $sql = "UPDATE shopping_list SET item='$add_item', quantity='$quantity', price='$price', store='$store' WHERE id='$edit_item'";
    //echo $sql;
    mysqli_query($mysql_connection, $sql);
  }
  else {
    //header('Location: edit_list.php');
    echo "Please at least add an item name.";
  }
}


if(isset($_POST['delete'])) {
  $delete_item = $_POST['delete'];
  //echo $item_delete;
  $sql = "DELETE FROM shopping_list WHERE id = '$delete_item'";
  mysqli_query($mysql_connection, $sql);
}
$sql = "SELECT * FROM shopping_list";
$result = mysqli_query($mysql_connection, $sql);
?>

<h1>Shopping List</h1>

<table class="striped">
    <thead>
      <tr>
          <th>Item</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Store</th>
          <th>Delete Item</th>
          <th>Edit Item</th>
      </tr>
    </thead>
<?php while($row = mysqli_fetch_array($result)): ?>
    <tr>
        <th><?= $row['item'] ?></th>
        <th><?= $row['quantity'] ?></th>
        <th>$<?= $row['price'] ?></th>
        <th><?= $row['store'] ?></th>
      <form method="POST" action="index.php">
        <th><button name="delete" value="<?= $row['id'] ?>" class="waves-effect waves-light btn-large amber darken-1"><i class="material-icons">delete</i></button></th>
      </form>
      <form method="POST" action="edit_list.php">
        <th><button name="edit" value="<?= $row['id'] ?>" class="waves-effect waves-light btn-large purple darken-1"><i class="material-icons">edit</i></button></th>
      </form>
<?php endwhile ?>
    </tr>
</table>

<?php include('includes/footer.php'); ?>
