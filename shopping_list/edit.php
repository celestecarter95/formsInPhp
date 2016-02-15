<?php require_once('../includes/header.php'); ?>

<?php if(isset($_POST['edit'])):
  $id = $_POST['id'];

  $sql = "SELECT * from shopping_list WHERE id='$id'";
  //echo $sql;
  $results = mysqli_query($mysql_connection, $sql);
  $row = mysqli_fetch_array($results);
?>

<div class="row">
    <form class="col s12" method="POST" action="update.php">
      <div class="row">
        <div class="input-field col s12">
        <input value="<?= $row['item'] ?>" id="item" name="item" type="text" class="validate">
          <label for="item">Item</label>
        </div>
        <div class="input-field col s12">
          <input value="<?= $row['quantity'] ?>" id="quantity" name="quantity" type="text" class="validate">
          <label for="quantity">Quantity</label>
        </div>
        <div class="input-field col s12">
          <input value="<?= $row['price'] ?>" id="price" name="price" type="text" class="validate">
          <label for="price">Price</label>
        </div>
        <div class="input-field col s12">
          <input value="<?= $row['store'] ?>" id="store" name="store" type="text" class="validate">
          <label for="store">Store</label>
        </div>
        <input type="hidden" value="<?= $id ?>" name="id">
        <div class="input-field col s1">
          <button name="submit" class="btn-floating btn-large waves-effect waves-light purple darken-2"><i class="material-icons">edit</i></button>
        </div>
      </div>
    </form>
  </div>

<?php endif ?>

<?php require_once('../includes/footer.php'); ?>
