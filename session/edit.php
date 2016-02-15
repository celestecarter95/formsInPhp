<?php require_once('../includes/header.php'); ?>

<div class="card grey lighten-2">
  <div class="card-content ">
    <h3>Sign in</h3>

    <div class="row">
        <form class="col s12" method="POST" action="update.php">
          <div class="row">
            <div class="input-field col s12">
              <input id="email" name="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
              <input id="password" name="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
            <div class="input-field col s1">
              <button name="submit" class="btn-large waves-effect waves-light purple darken-2">Sign in</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

<?php require_once('../includes/footer.php'); ?>
