<?php require_once('../includes/header.php'); ?>

<?php
if(isset($_POST['submit'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $retype_password = $_POST['retype_password'];

  if(strcmp($password, $retype_password) == 0) {

    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $results = mysqli_query($mysql_connection, $sql);
    $row = mysqli_num_rows($results);
    if ($row <= 0) {
      $sql = "INSERT INTO users (first_name, last_name, email, encrypted_password) VALUE ('$first_name', '$last_name', '$email', '$encrypted_password')";
      mysqli_query($mysql_connection, $sql);
      header('Location: /formsInPhp/session/update.php');
    } else {
      header('Location: /formsInPhp/session/edit.php');
    }

  } else {
    echo "Passwords don't match up.";
  }

?>
  <div class="card grey lighten-2">
  <div class="card-content ">
    <p><strong>First Name:</strong> <?= $first_name ?></p>
    <p><strong>Last Name:</strong> <?= $last_name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
  </div>
</div>

<?php } ?>
