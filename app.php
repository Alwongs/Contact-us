<?php

$servername = "localhost";
$username = "root";
$db_password = "root";
$db = "contact_us";

// create connection
$mysqli = mysqli_connect($servername, $username, $db_password, $db);

//Check connection
if (!$mysqli) {
    die("connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $gender = trim($_REQUEST['gender']);
    $password = password_hash(trim($_REQUEST['password']), PASSWORD_BCRYPT);

    $user_is_created = $mysqli->query("INSERT INTO customers (name, email, gender, password) VALUES ('$name', '$email', '$gender', '$password')");
} else {
    $customers = $mysqli->query("select * from customers");
    echo '<pre>';
    print_r($customers);
    echo '</pre>';
}

require 'index.html';

exit;
