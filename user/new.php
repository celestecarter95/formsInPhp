<?php require_once('../includes/header.php'); ?>

<div class="card grey lighten-2">
  <div class="card-content ">
    <h3>Sign Up</h3>

    <div class="row">
        <form class="col s12" method="POST" action="create.php">
          <div class="row">
            <div class="input-field col s12">
              <input id="first_name" name="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s12">
              <input id="last_name" name="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
            <div class="input-field col s12">
              <input id="email" name="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
              <input id="password" name="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
            <div class="input-field col s12">
              <input id="re-password" name="retype_password" type="password" class="validate">
              <label for="re-password">Retype Password</label>
            </div>
            <div class="input-field col s1">
              <button name="submit" class="btn-large waves-effect waves-light purple darken-2">Submit</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

<?php require_once('../includes/footer.php'); ?>
