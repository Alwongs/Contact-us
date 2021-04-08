<?php

require_once '../functions/connection.php';
require_once '../functions/test.php';

// ------ проверка соединения с БД ---------
if (!$connection) {
    die("connection failed: " . mysqli_connect_error());
}
// --------- получение данных с формы ------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = test_input($_REQUEST['name']);
    $surname = test_input($_REQUEST['surname']);
    $email = test_input($_REQUEST['email']);
    $phone = test_input($_REQUEST['phone']);
    $gender = test_input($_REQUEST['gender']);
    $hide = test_input($_REQUEST['hide']);
    $topic = test_input($_REQUEST['topic']);
    $text = test_input($_REQUEST['text']);
    move_uploaded_file($_FILES['image']['tmp_name'], '../downloads/images/' . $_FILES['image']['name']);
    $image = $_FILES['image']['name'];

    // -------- сохранение данных в БД -------
    $query = "INSERT INTO customers (name, surname, email, phone, gender, hide, topic, text, image) VALUES ('$name', '$surname', '$email', '$phone',  '$gender', '$hide', '$topic', '$text', '$image')";
    $user_is_created = $connection->query($query);
}

if ($user_is_created) {
    header("Location: report.php");
    exit();
}
