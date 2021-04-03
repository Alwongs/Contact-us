<?php

require_once 'functions/connection.php';

$customers = $connection->query("SELECT * FROM customers");

while ($result = mysqli_fetch_array($customers, MYSQLI_ASSOC)) {
    $users[] = $result;
}

require 'html/header.html';

require 'html/list.html';

require 'html/footer.html';
