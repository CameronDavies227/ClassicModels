<?php
include "../model/connection.php";
include "../model/authors.php";
$conn=new connection;
$pdo=$conn->connect_db();
$author=new authors;
$authorids = $author->get_authorids($pdo);
?>
