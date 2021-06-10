<?php
include "../model/connection.php";
include "../model/books.php";
$conn = new connection;
$pdo = $conn->connect_db();
$book = new books;
extract($_POST);
session_start();
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
    $book->get_information($path_to_cover, $publication_year, $book_id, $title, $author_id, $copies_sold);
    $book->update_book($pdo);
    header("location:../view/displaybook.php?msg=RecordSaaved");
} catch (exception $e) {
    header("location:../view/displaybook.php?msg=" . $e->getMessage());
}


?>
