<?php require_once('../includes/header.php'); ?>

<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>

<style>
th, td {
    text-align: center;
}
</style>

<?php
if(isset($_GET['submit'])) {
  $item = $_GET['item'];
  $store = $_GET['store'];
  $price = $_GET['price'];

  $sql = "SELECT * FROM shopping_list";
  if($store) {
    $sql .= " WHERE store = '$store'";
  }
  if($store && $item) {
    $sql .= " AND item LIKE '%$item%'";
  }
  if(!$store && $item) {
    $sql .= " WHERE item LIKE '%$item%'";
  }
  if($price) {
    $sql .= " ORDER BY price $price";
  }
}
else {
  $sql = "SELECT * FROM shopping_list";
}

//echo $sql;
$result = mysqli_query($mysql_connection, $sql);

$store_sql = "SELECT DISTINCT store FROM shopping_list";

$stores = mysqli_query($mysql_connection, $store_sql);

?>

<div class="row">
    <form class="col s12" method="GET" action="index.php">
      <div class="row">
        <div class="input-field col s4">
          <input id="item" name="item" type="text" class="validate">
          <label for="item">Item</label>
        </div>
        <div class="input-field col s4">
          <select name="store" value="">
            <option name="store" value="" selected>Choose a store</option>
            <?php while($row = mysqli_fetch_array($stores)): ?>
            <option name="store" value="<?= $row['store'] ?>"><?= $row['store']?></option>
            <?php endwhile ?>
          </select>
          <label>Store</label>
        </div>
          <div class="input-field col s3">
            <p>
            <input type="hidden" name="price" value="" />
            </p>
          <p>
            <input class="with-gap" name="price" type="radio" id="asc" value="ASC" />
            <label for="asc">Ascending</label>
          </p>
          <p>
            <input class="with-gap" name="price" type="radio" id="des" value="DESC" />
            <label for="des">Descening</label>
          </p>
        </div>
        <div class="input-field col s1">
          <button name="submit" class="btn-floating btn-large waves-effect waves-light purple darken-2"><i class="material-icons">add</i></button>
        </div>
      </div>
    </form>
  </div>


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
        <th><a href="show.php?id=<?= $row['id'] ?>"><?= $row['item'] ?></a></th>
        <th><?= $row['quantity'] ?></th>
        <th>$<?= $row['price'] ?></th>
        <th><?= $row['store'] ?></th>
      <form method="POST" action="destroy.php">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <th><button name="delete" class="waves-effect waves-light btn-large amber darken-1"><i class="material-icons">delete</i></button></th>
      </form>
      <form method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <th><button name="edit" class="waves-effect waves-light btn-large purple darken-1"><i class="material-icons">edit</i></button></th>
      </form>
<?php endwhile ?>
    </tr>
</table>

<?php require_once('../includes/footer.php'); ?>
