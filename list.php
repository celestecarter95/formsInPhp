<?php include('includes/header.php'); ?>

<div class="row">
    <form class="col s12" method="POST" action="list.php">
      <div class="row">
        <div class="input-field col s11">
          <input id="food" name="food" type="text" class="validate">
          <label for="food">Food</label>
        </div>
        <div class="input-field col s1">
          <button name="submit" class="btn-floating btn-large waves-effect waves-light purple darken-2"><i class="material-icons">add</i></button>
        </div>
      </div>
    </form>
  </div>

<?php
if(isset($_POST['submit'])) {
  $add_food = $_POST['food'];

  if(!isset($_SESSION[$add_food])) {
    $_SESSION[$add_food] = 1;
  }
  else {
    $_SESSION[$add_food] += 1;
  }
} else if(isset($_POST['delete'])) {
  $key = $_POST['key'];
  unset($_SESSION[$key]); //or you can do it this way $_SESSION[$key] = null;
}
?>

<style>
th, td {
    text-align: center;
}
</style>

<table class="striped">
    <thead>
      <tr>
          <th>Shopping List</th>
          <th>Item Count</th>
          <th>Delete Item</th>
      </tr>
    </thead>
<?php foreach($_SESSION as $key => $value): ?>
    <tr>
      <form method="POST" action="list.php">
        <td><input type="hidden" name="key" value="<?= $key ?>"><?= $key ?></td>
        <td><?= $value ?></td>
        <th><button name="delete" class="waves-effect waves-light btn-large amber darken-1"><i class="material-icons">delete</i></button></th>
      </form>
    </tr>
<?php endforeach ?>
</table>

<?php include('includes/footer.php'); ?>
