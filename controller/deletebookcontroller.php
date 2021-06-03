<?php
include "../model/connection.php";
include "../model/books.php";
$conn = new connection;
$pdo = $conn->connect_db();
$user = new books;
    extract($_GET);

    try {
        $user->delete_book($pdo,$book_id);

        header("../../view/displaybook.php?msg=RecordDeleted");
    } catch (exception $e) {
        header("../../view/displaybook.php?msg=" . $e->getMessage());
    }
?>
