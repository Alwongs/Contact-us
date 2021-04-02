<?php

$servername = "localhost";
$username = "root";
$db_password = "root";
$db = "contact_us";

// create connection
$connection = mysqli_connect($servername, $username, $db_password, $db);

//Check connection
if (!$connection) {
    die("connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $gender = trim($_REQUEST['gender']);
    $password = password_hash(trim($_REQUEST['password']), PASSWORD_BCRYPT);

    $user_is_created = $connection->query("INSERT INTO customers (name, email, gender, password) VALUES ('$name', '$email', '$gender', '$password')");
}
$customers = $connection->query("SELECT * FROM customers");

while ($result = mysqli_fetch_array($customers, MYSQLI_ASSOC)) {
    $users[] = $result;
}

?>

<h1><?php echo $name ?>, cпасибо за ваше обращениe!</h1>
Ваши данные:
<ul>
    <li><?php echo $name ?></li>
    <li><?php echo $email ?></li>
    <li><?php echo $gender ?></li>
    <li><?php echo $password ?></li>
</ul>
Мы обязательно ответим вам в ближайшее время..