<?php require_once('../includes/header.php'); ?>

<?php

if(isset($_POST['submit'])) {
  if($_SESSION['login']) {
    unset($_SESSION['login']);
  }
  header('location: /formsInPhp/session/edit.php');
} else {
  header('location: /formsInPhp/shopping_list/index.php');
}

?>
