<?php include('includes/header.php'); ?>

<?php if(isset($_POST['submit'])): ?>

<?php

    $grocery_store  = $_POST['grocery_store'];
    $to = $_POST['email'];
    $user_comment = $_POST['comment'];

    $shopping_list = "";
    foreach ($_SESSION as $key => $value) {
        $shopping_list .= "<li>$key : $value</li>";
    }

	$comment = "
	<html>
	<head>
	  <title>Shopping List</title>
	</head>
	<body>
	  <h4>$grocery_store Shopping List</h4>
	  <p>$user_comment</p>
    <ol>
        $shopping_list
    </ol>
	</body>
	</html>
	";


    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //$headers .= "From: $email" . "\r\n";

    mail($to, "Shopping List", $comment, $headers);

?>

<?php //print_r($_POST); ?>

<div class="jumbotron">
  <p>
      <strong>Email send to:</strong>
      <?= $to ?>
  </p>

  <p>
      <strong>Grocery Store:</strong>
      <?= $grocery_store ?>
  </p>

  <p>
      <strong>Email Sent:</strong>
      <?= $user_comment ?>
  </p>
</div>

<?php else: ?>

<?php header('Location: contactme.php'); ?>

<?php endif ?>

<?php include('includes/footer.php'); ?>
