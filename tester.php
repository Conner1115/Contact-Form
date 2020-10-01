<?php
ini_set("SMTP", "aspmx.l.google.com");
ini_set("sendmail_from", "connerow1115@gmail.com");

$message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = connerow1115@address.com";

$headers = "From: connerow1115@gmail.com";

mail("connerow1115@gmail.com", "Testing", $message, $headers);
echo "Check your email now....&lt;BR/>";
?>
