<?php
include "../model/connection.php";
include "../model/books.php";
include("../controller/san_data.php");
extract($_POST);
$conn=new connection;
$pdo=$conn->connect_db();
$book=new books;

try {
    if (isset($_FILES['path_to_cover'])){
        //print_r($_FILES['image_path']);
        //exit();         
        $imageName=mt_rand().$_FILES['path_to_cover']['name'];         
        $imagePath="../image/".$imageName;         
        move_uploaded_file($_FILES['path_to_cover']['tmp_name'], $imagePath);         
        $path_to_cover="http://localhost/ClassicModels/image/".$imageName;
    }else{
        $path_to_cover="http://localhost/ClassicModels/image/no_image.jpg";     
    }
    $book->get_information($path_to_cover,$publication_year,$book_id,$title,$author_id,$copies_sold);
    $path_to_cover=test_input($path_to_cover);
    $publication_year=test_input($publication_year);
    $book_id=test_input($book_id);
    $title=test_input($title);
    $author_id=test_input($author_id);
    $copies_sold=test_input($copies_sold);
    $book->insert_book($pdo);
    header("location:../view/addbook.php?msg=Saved");
} catch(exception $e){
    header("location:../view/addbook.php?msg=".$e->getMessage());
}
?>