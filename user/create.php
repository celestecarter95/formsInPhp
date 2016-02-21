<?php require_once('../includes/header.php'); ?>

<?php if(isset($_POST['submit'])): ?>

  <?php
  $first_name      = mysqli_real_escape_string($mysql_connection, $_POST['first_name']);
  $last_name       = mysqli_real_escape_string($mysql_connection, $_POST['last_name']);
  $email           = mysqli_real_escape_string($mysql_connection, $_POST['email']);
  $password        = $_POST['password'];
  $retype_password = $_POST['retype_password'];

  $errors = [];
  if (empty($email)) {
    $errors['email'] =  "Please enter your email";
  }
  if (empty($password)) {
    $errors['password'] = "Please enter a password";
  }
  if (!preg_match('/[A-Z]+[a-z]+[0-9]+/', $password)) {
    $errors['password'] = "Password should have letters, numbers, and one uppercase to be valid";
  } else {
    echo 'Secure enough';
  }
  if (empty($retype_password)) {
    $errors['retype_password'] = "Please confirm your password";
  }
  if($password != $retype_password) {
    $errors['retype_password'] = "Passwords don't match up.";
  }

  if (empty($errors)) {
    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $results = mysqli_query($mysql_connection, $sql);
    $row = mysqli_num_rows($results);
    if ($row <= 0) {
      $sql = "INSERT INTO users (first_name, last_name, email, encrypted_password) VALUE ('$first_name', '$last_name', '$email', '$encrypted_password')";
      mysqli_query($mysql_connection, $sql);
      header('Location: /formsInPhp/session/update.php');
    }
  }
  ?>

  <?php if (empty($errors)): ?>

    <div class="card grey lighten-2">
      <div class="card-content ">
        <p><strong>First Name:</strong> <?= $first_name ?></p>
        <p><strong>Last Name:</strong> <?= $last_name ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
      </div>
    </div>

  <?php else: ?>

    <?php require_once('new.php'); ?>

  <?php endif ?>

<?php endif ?>
