<?php
include "../model/connection.php";
include "../model/authors.php";
$conn = new connection;
$pdo = $conn->connect_db();
$author = new authors;
extract($_POST);
if(isset($savebtn)){
    try {
        /*if (isset($_FILES['newfilename'])){
        $imageName=mt_rand().$_FILES['newfilename']['name'];
        $imagePath="../view/img/".$imageName;
        move_uploaded_file($_FILES['newfilename']['tmp_name'],$imagePath);
        $image_path="http://localhost:8084/ClassicModels/view/img/".$imageName;
        }*/
        $author->get_information($author_id, $firstname, $lastname);
        $author->update_author($pdo);
        header("location:../view/authordisplay.php?msg=RecordSaved");
    } catch (exception $e) {
        header("location:../view/authordisplay.php?msg=" . $e->getMessage());
    }
}else{
    header("location:../view/authordisplay.php?msg=EditCancelled");
}
?>
