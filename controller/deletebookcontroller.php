<?php
include "../model/connection.php";
include "../model/books.php";
$conn = new connection;
$pdo = $conn->connect_db();
$book = new books;
    extract($_GET);

    try {
        echo "I beg for death";
        $book->delete_book($pdo,$book_id);
        header("location: http://localhost/ClassicModels/view/displaybook.php?msg=RecordDeleted");
    } catch (exception $e) {
        header("location: http://localhost/ClassicModels/view/displaybook.php?msg=" . $e->getMessage());
    }
?>
