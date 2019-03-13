<?php

// Tworzymy zmienna dla imienia i nazwiska
$name = $_POST['name'];

// Tworzymy zmienna dla adresu email
$email = $_POST['email'];

// Tworzymy zmienna dla wiadomości
$message = $_POST['message'];

// Podajesz adres email z którego ma być wysłana wiadomość
$odkogo = "TwojAdresEmail1@gmail.com"; 

// Podajesz adres email na który chcesz otrzymać wiadomość
$dokogo = "k4minski2@gmail.com"; 

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "Formularz kontaktowy z 79level.pl";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// Wysyłamy wiadomość
$sukces = mail($dokogo, $tytul, $wiadomosc, "Od: <$odkogo>");

// Przekierowywujemy na potwierdzenie 
if ($sukces){
  print "<meta http-equiv="refresh" content="0;URL=potwierdzenie.php">";
}
else{
  print "<meta http-equiv="refresh" content="0;URL=error.htm">";
}
?>