<?php

require_once '../functions/connection.php';

// ------ Текущая страница --------
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else $page = 1;

// ----- кол-во записей на странице -------
$notesPerPage = 4;

// ---- с какой записи выводить -------
$start = ($page * $notesPerPage) - $notesPerPage;

// ----- всего записей в таблице ------
$res = $connection->query("SELECT COUNT(*) FROM customers");
$row = mysqli_fetch_row($res);
$total = $row[0];

// ------ Количество страниц --------
$numOfPages = ceil($total / $notesPerPage);

// ------ Запрос и вывод записей ------
$customers = $connection->query("SELECT * FROM customers LIMIT $start, $notesPerPage");

while ($result = mysqli_fetch_array($customers, MYSQLI_ASSOC)) {
    $users[] = $result;
}

require '../html/header.html';

require '../html/list.html';

require '../html/footer.html';
