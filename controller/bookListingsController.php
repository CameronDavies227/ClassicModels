<?php
include "../model/connection.php";
include "../model/books.php";
include "../model/authors.php";
$conn = new connection;
$pdo = $conn->connect_db();
$book = new books;
try {
    if (isset($_GET['book_id'])) {
        $bookdetails = $book->search_book_by_id($pdo, $_GET['book_id']);
        $author = new authors;
        try {
            if (isset($bookdetails['author_id'])) {
                $authordetails = $author->search_author_by_id($pdo, $bookdetails['author_id']);
                $authordata = $author->display_all_authors($pdo);
            } else {
                $authordata = $author->display_all_authors($pdo);
            }
        } catch (exception $e) {
            echo $e->getMessage();
        }
    } else {
        $bookdata = $book->display_all_books($pdo);
    }
} catch (exception $e) {
    echo $e->getMessage();
}
$author = new authors;
try {
    if (isset($bookdetails['author_id'])) {
        $authordetails = $author->search_author_by_id($pdo, $bookdetails['author_id']);
        $authordata = $author->display_all_authors($pdo);
    } else {
        $authordata = $author->display_all_authors($pdo);
    }
} catch (exception $e) {
    echo $e->getMessage();
}
?>
