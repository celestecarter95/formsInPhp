<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP and Forms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap stuff -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    <!-- Materialize Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
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
    </style>

</head>
<body>
    <nav>
        <div class="nav-wrapper purple lighten-2">
            <div class="container-fluid">
              <a href="index.php" class="brand-logo">Email Shopping List</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">List</a></li>
                <li><a href="add_item.php">Add Item</a></li>
                <li><a href="list.php">Session Shopping</a></li>
                <li><a href="contactme.php">Contact Me</a></li>
              </ul>
            </div>
        </div>
      </nav>
    <div class="container content">
