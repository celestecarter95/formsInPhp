<?php
  //Start the session
  session_start();
  //Connect to databse, require it instead of include it
  require_once('mysql.php');
  require_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP and Forms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap stuff -->
<!--
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    <!-- Materialize Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
  /* label color */
     .input-field label {
       color: gray;
     }
     /* label focus color */
      textarea.materialize-textarea:focus:not([readonly]) + label,
     .input-field input[type=email]:focus + label,
     .input-field input[type=password]:focus + label,
     .input-field input[type=text]:focus + label {
       color: #7b1fa2;
     }
     /* label underline focus color */
      textarea.materialize-textarea:focus:not([readonly]),
     .input-field input[type=email]:focus,
     .input-field input[type=password]:focus,
     .input-field input[type=text]:focus {
       border-bottom: 1px solid #7b1fa2;
       box-shadow: 0 1px 0 0 #7b1fa2;
     }
     /* valid color */
     .input-field input[type=password].valid,
     .input-field input[type=email].valid,
     .input-field input[type=text].valid {
       border-bottom: 1px solid #7b1fa2;
       box-shadow: 0 1px 0 0 #7b1fa2;
     }

    nav {
        margin-bottom: 40px;
    }
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }
    .content {
        flex: 1;
    }
    footer {
        color: white;
        padding:15px 0;
    }

    .error {
        padding: 10px;
        color: red;
    }
    </style>

</head>
<body>
    <nav>
        <div class="nav-wrapper purple lighten-2" style="padding: 0 25px;">
          <?php $current_user = currentUser(); ?>
            <a href="index.php" class="brand-logo">Welcome <?= $current_user['first_name']; ?></a>

              <?php if($current_user): ?>
                <form method="post" action="/formsInPhp/session/destroy.php">
                      <input style="font-size: 1rem;" class="waves-effect waves-light right hide-on-med-and-down" type="submit" name="submit" value="Sign out">
                </form>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/formsInPhp/shopping_list/index.php">List</a></li>
                <li><a href="/formsInPhp/shopping_list/new.php">Add item</a></li>
              </ul>
              <?php else: ?>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/formsInPhp/user/new.php">Sign up</a></li>
                <li><a href="/formsInPhp/session/edit.php">Sign in</a></li>
              </ul>
              <?php endif ?>
        </div>
      </nav>
    <div class="container content">
