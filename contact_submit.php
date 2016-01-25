<?php include('includes/header.php'); ?>

<?php if(isset($_POST['submit'])): ?>

<?php

    $first_name  = $_POST['first_name'];
    $last_name   = $_POST['last_name'];
    $email       = $_POST['email'];
    $subject     = $_POST['subject'];
    $user_message= $_POST['message'];

	$message = "
	<html>
	<head>
	  <title>$subject</title>
	</head>
	<body>
	  <p>$user_message</p>
	  <p>$first_name $last_name</p>
	</body>
	</html>
	";


    $to = 'celestecarter95@gmail.com';
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: $email" . "\r\n";

    mail($to, $subject, $message, $headers);

?>

<?php //print_r($_POST); ?>

<div class="jumbotron">
<p>
    <strong>First Name:</strong>
    <?= $first_name ?>
</p>

<p>
    <strong>Last Name:</strong>
    <?= $last_name ?>
</p>

<p>
    <strong>Subject:</strong>
    <?= $subject ?>
</p>

<p>
    <strong>Message:</strong>
    <?= $message ?>
</p>
</div>

<?php else: ?>

<?php header('Location: contactme.php'); ?>

<?php endif ?>

<?php include('includes/footer.php'); ?>
