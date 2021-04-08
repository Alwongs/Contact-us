<?php
require_once 'functions/connection.php';

//$userId передается роутером index.php

// ------ получаем сообщение по id -------
$messageById = $connection->query("SELECT * FROM customers WHERE id=$userId");
$result = mysqli_fetch_array($messageById, MYSQLI_ASSOC);

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

require 'html/header.html';

require 'html/message.html';

require 'html/footer.html';
