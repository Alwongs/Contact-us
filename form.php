<?php

require_once 'functions/connection.php';

//Check connection
if (!$connection) {
    die("connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_REQUEST['name']);
    $surname = trim($_REQUEST['surname']);
    $email = trim($_REQUEST['email']);
    $phone = trim($_REQUEST['phone']);
    $gender = $_REQUEST['gender'];
    $hide = $_REQUEST['hide'];
    $topic = $_REQUEST['topic'];
    $text = trim($_REQUEST['text']);
    move_uploaded_file($_FILES['image']['tmp_name'], 'downloads/images/' . $_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    //var_dump($image);

    $query = "INSERT INTO customers (name, surname, email, phone, gender, hide, topic, text, image) VALUES ('$name', '$surname', '$email', '$phone',  '$gender', '$hide', '$topic', '$text', '$image')";
    //var_dump($query);

    $user_is_created = $connection->query($query);
}

if ($user_is_created) {

    $messages_db = "<span style=\"color: green;\">успішно відправленно.</span>";
    header("Location: report.php");
    exit();
}
