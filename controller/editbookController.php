<?php
include "../model/connection.php";
include "../model/books.php";
$conn = new connection;
$pdo = $conn->connect_db();
$book = new books;
extract($_POST);
if(isset($savebtn)){
    try {
        if (isset($_FILES['ImagePath'])){
            //print_r($_FILES['image_path']);
            //exit();         
            $imageName=mt_rand().$_FILES['ImagePath']['name'];         
            $ImagePath="../view/img/".$imageName;         
            move_uploaded_file($_FILES['ImagePath']['tmp_name'],$ImagePath);         
            $ImagePath="http://localhost:8804/ClassicModels/image".$imageName;
        }else{
            $ImagePath="http://localhost:8804/ClassicModels/image/no_image.png";     
        }
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
