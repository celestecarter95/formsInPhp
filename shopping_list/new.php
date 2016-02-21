<?php require_once('../includes/header.php'); ?>

<?php if(isset($_SESSION['login'])): ?>

<div class="row">
    <form class="col s12" method="POST" action="create.php">
      <div class="row">
        <div><?= errorMessageForField($errors, 'item') ?></div>
        <div class="input-field col s12">
        <input id="item" name="item" type="text" class="validate" value="<?= strIfSet($add_item) ?>">
          <label for="item">Item</label>
        </div>
        <div><?= errorMessageForField($errors, 'quantity') ?></div>
        <div class="input-field col s12">
          <input id="quantity" name="quantity" type="text" class="validate" value="<?= strIfSet($quantity) ?>">
          <label for="quantity">Quantity</label>
        </div>
        <div><?= errorMessageForField($errors, 'price') ?></div>
        <div class="input-field col s12">
          <input id="price" name="price" type="text" class="validate" value="<?= strIfSet($price) ?>">
          <label for="price">Price</label>
        </div>
        <div><?= errorMessageForField($errors, 'store') ?></div>
        <div class="input-field col s12">
          <input id="store" name="store" type="text" class="validate" value="<?= strIfSet($store) ?>">
          <label for="store">Store</label>
        </div>
        <div class="input-field col s1">
          <button name="submit" class="btn-floating btn-large waves-effect waves-light purple darken-2"><i class="material-icons">add</i></button>
        </div>
      </div>
    </form>
  </div>

<?php else: ?>
<?php header('Location: /formsInPhp/session/edit.php/'); ?>

<?php endif ?>

<?php require_once('../includes/footer.php'); ?>
