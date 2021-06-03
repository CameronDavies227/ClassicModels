<?php
include "../model/connection.php";
include "../model/authors.php";
$conn = new connection;
$pdo = $conn->connect_db();
$user = new authors;
    extract($_GET);

    try {
        $user->delete_author($pdo,$author_id);

        header("../../view/displayauthor.php?msg=RecordDeleted");
    } catch (exception $e) {
        header("../../view/displayauthor.php?msg=" . $e->getMessage());
    }
?>
