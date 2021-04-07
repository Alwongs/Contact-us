<?php
require_once '../functions/connection.php';

$id = $_REQUEST['id'];

$lastPost = $connection->query("SELECT * FROM customers WHERE id=$id");
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

require '../html/header.html';

require '../html/message.html';

require '../html/footer.html';
