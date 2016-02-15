<?php require_once('../includes/header.php'); ?>

<?php
if(isset($_POST['submit'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (first_name, last_name, email, encrypted_password) VALUE ('$first_name', '$last_name', '$email', '$encrypted_password')";
  mysqli_query($mysql_connection, $sql);

?>

<div class="card grey lighten-2">
  <div class="card-content ">
    <p><strong>First Name:</strong> <?= $first_name ?></p>
    <p><strong>Last Name:</strong> <?= $last_name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
  </div>
</div>

<?php } ?>
