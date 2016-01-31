<?php include('includes/header.php'); ?>

<div class="row">
    <form class="col s12" method="POST" action="index.php">
      <div class="row">
        <div class="input-field col s12">
          <input id="item" name="item" type="text" class="validate">
          <label for="item">Item</label>
        </div>
        <div class="input-field col s12">
          <input id="quantity" name="quantity" type="text" class="validate">
          <label for="quantity">Quantity</label>
        </div>
        <div class="input-field col s12">
          <input id="price" name="price" type="text" class="validate">
          <label for="price">Price</label>
        </div>
        <div class="input-field col s12">
          <input id="store" name="store" type="text" class="validate">
          <label for="store">Store</label>
        </div>
        <div class="input-field col s1">
          <button name="submit" class="btn-floating btn-large waves-effect waves-light purple darken-2"><i class="material-icons">add</i></button>
        </div>
      </div>
    </form>
  </div>

<?php include('includes/footer.php'); ?>
