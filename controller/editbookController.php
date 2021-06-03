<?php
include "../model/connection.php";
include "../model/books.php";
$conn = new connection;
$pdo = $conn->connect_db();
$book = new books;
extract($_POST);
if(isset($savebtn)){
    try {
        /*if (isset($_FILES['newfilename'])){
        $imageName=mt_rand().$_FILES['newfilename']['name'];
        $imagePath="../view/img/".$imageName;
        move_uploaded_file($_FILES['newfilename']['tmp_name'],$imagePath);
        $image_path="http://localhost:8084/ClassicModels/view/img/".$imageName;
        }*/
        $book->get_information($path_to_cover, $publication_year, $book_id, $title, $author_id, $copies_sold;
        $book->update_book($pdo);
        header("location:../view/bookdisplay.php?msg=RecordSaved");
    } catch (exception $e) {
        header("location:../view/bookdisplay.php?msg=" . $e->getMessage());
    }
}else{
    header("location:../view/bookdisplay.php?msg=EditCancelled");
}
?>
