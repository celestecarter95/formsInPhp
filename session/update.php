<?php require_once('../includes/header.php'); ?>

<?php
if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email = '$email'";
  $results = mysqli_query($mysql_connection, $sql);

  if($row = mysqli_fetch_array($results)) {
    if (password_verify($password, $row['encrypted_password'])) {
      $_SESSION['login'] = $row['id'];
      print_r($_SESSION);
      $error = false;
    } else {
      // error incorrect password: generic error message
      echo 'password incorrect';
      $error = true;
    }
  } else {
    $error = true;
  }

  if($error) {
    echo 'Incorrect username or password';
  } else {
    header('Location: /formsInPhp/shopping_list/index.php');
  }
} else {
  // Redirect if not post
  header('Location: edit.php');
}

?>

<?php require_once('../includes/footer.php'); ?>
