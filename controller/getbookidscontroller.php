<?php
include "../model/connection.php";
include "../model/books.php";
include "../model/authors.php";
$conn=new connection;
$pdo=$conn->connect_db();
$book=new books;
$bookids = $book->get_bookids($pdo);
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