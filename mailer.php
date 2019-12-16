<?php

require 'class/SMTPMailer.php';

$to = $_POST["to"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail = new SMTPMailer();

$mail->addTo($_POST["to"]);

$mail->Subject($_POST["subject"]);
$mail->Body($_POST["message"]);

if ($mail->Send()) echo 'Mail sent successfully';
else               echo 'Mail failure';