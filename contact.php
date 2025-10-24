<?php
// Настройки
$to_email = "art@armenianduduk.am";

// Получение данных
$name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

// Формирование письма
$email_subject = "Contact Form: " . $subject;
$email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
$headers = "From: noreply@armenianduduk.am\r\nReply-To: $email";

// Отправка
mail($to_email, $email_subject, $email_body, $headers);
?>