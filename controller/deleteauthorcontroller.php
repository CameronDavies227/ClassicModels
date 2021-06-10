<?php
include "../model/connection.php";
include "../model/authors.php";
$conn = new connection;
$pdo = $conn->connect_db();
$author = new authors;
    extract($_GET);

    try {
        $author->delete_author($pdo,$author_id);
        header("location: http://localhost/ClassicModels/view/displayauthor.php?msg=RecordDeleted");
    } catch (exception $e) {
        header("location: http://localhost/ClassicModels/view/displayauthor.php?msg=" . $e->getMessage());
    }
?>
