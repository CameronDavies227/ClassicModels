<?php
include "../model/connection.php";
include "../model/authors.php";
extract($_POST);
$conn=new connection;
$pdo=$conn->connect_db();
$author=new authors;
try{
    $author->get_information($author_id,$firstname,$lastname);
    $author->insert_author($pdo);
    header("location:../view/addauthor.php?msg=Saved");
}
catch(exception $e){
    header("location:../view/addauthor.php?msg=".$e->getMessage());
}
?>