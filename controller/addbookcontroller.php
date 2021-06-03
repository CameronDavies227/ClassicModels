<?php
include "../model/connection.php";
include "../model/books.php";
extract($_POST);
$conn=new connection;
$pdo=$conn->connect_db();
$book=new books;

try{
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
    $book->get_information($path_to_cover,$publication_year,$book_id,$title,$author_id,$copies_sold,$record_created,$record_last_edited);
    $book->insert_book($pdo);
    header("location:../view/addbook.php?msg=Saved");
}
catch(exception $e){
    header("location:../view/addbook.php?msg=".$e->getMessage());
}
?>