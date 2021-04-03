<?php
require_once 'functions/connection.php';
require_once 'form.php';


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



var_dump($image);


require 'html/header.html';

require 'html/report.html';

require 'html/footer.html';
