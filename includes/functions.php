<?php

  function currentUser() {
    global $mysql_connection;
    if(isset($_SESSION['login'])) {
      $user_id = $_SESSION['login'];
      $sql = "SELECT * FROM users WHERE id = '$user_id'";
      $results = mysqli_query($mysql_connection, $sql);
      //$row = mysqli_num_rows($results);

      if ($row = mysqli_fetch_array($results)) {
        return $row;
      } else {
        return null;
      }

    }
  }

  function strIfSet(&$str) {
    if(isset($str)) {
      return $str;
    } else {
      return "";
    }
  }

  function errorMessageForField(&$errors, $field) {
    if (isset($errors)) {
      if (isset($errors[$field])) {
        $error = $errors[$field];
        return "<span class='error'>$error</span>";
      }
    }
    return "";
  }

?>
