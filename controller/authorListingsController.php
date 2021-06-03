<?php
include "../model/connection.php";
include "../model/authors.php";
$conn = new connection;
$pdo = $conn->connect_db();
$author = new authors;
try {
    if (isset($_GET['author_id'])) {
        $authordetails = $author->search_author_by_id($pdo, $_GET['author_id']);
    } else {
        $authordata = $author->display_all_authors($pdo);
    }
} catch (exception $e) {
    echo $e->getMessage();
}
?>
