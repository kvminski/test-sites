<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'From: kamdev.pl';
  $to = 'k4minski2@gmail.com';
  $subject = 'Formularz kontakowy kamdev.pl';
  $puzzle = $_POST['puzzle'];

  $body = "Nadawca:\n $name\n\n Email:\n $email\n\n Treœæ wiadomoœci:\n $message";
  
  if ($_POST['submit'] && $puzzle == '5') {
  	if (mail ($to, $subject, $body, $from)) {
  		header("Location: http://kamdev.pl");
  	}
  }

?>