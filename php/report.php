<?php
require_once 'functions/connection.php';

$lastPost = $connection->query("SELECT * FROM customers ORDER BY id DESC LIMIT 1");
$result = mysqli_fetch_array($lastPost, MYSQLI_ASSOC);

$name = $result['name'];
$surname = $result['surname'];
$email = $result['email'];
$phone = $result['phone'];
$gender = $result['gender'];
$hide = $result['hide'];
$topic = $result['topic'];
$text = $result['text'];
$image = $result['image'];
if ($result['gender'] == 1) {
  $gender = 'муж.';
} else {
  $gender = 'жен.';
}

// ---------- отправка email -----------------
$to = 'Alwong@ya.ru';
$subject = 'Новое сообщение с сайта на тему "' . $topic . '"';
$message = '
<html>
<head>
  <title>Ваша форма отправлена успешно</title>
</head>
<body>
  <b>' . $name . ' ' . $surname . '</b> пишет:
  <p><i>' . $text . '</i></p>
</body>
</html>';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$emailIsSent = mail($to, $subject, $message, $headers);


require 'html/header.html';

require 'html/report.html';

require 'html/footer.html';
