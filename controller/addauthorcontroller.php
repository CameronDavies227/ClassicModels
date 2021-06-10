<?php
include "../model/connection.php";
include "../model/authors.php";
include("../controller/san_data.php");
extract($_POST);
$conn=new connection;
$pdo=$conn->connect_db();
$author=new authors;
try{
    $author->get_information($author_id,$firstname,$lastname);
    $author_id=test_input($author_id);
    $firstname=test_input($firstname);
    $lastname=test_input($lastname);
    $author->insert_author($pdo);
    header("location:../view/addauthor.php?msg=Saved");
}
catch(exception $e){
    header("location:../view/addauthor.php?msg=".$e->getMessage());
}
?>