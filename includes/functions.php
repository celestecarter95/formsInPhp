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

?>
