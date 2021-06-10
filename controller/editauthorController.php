<?php
include "../model/connection.php";
include "../model/authors.php";
include("../controller/san_data.php");
$conn = new connection;
$pdo = $conn->connect_db();
$author = new authors;
extract($_POST);
try {
    /*if (isset($_FILES['newfilename'])){
    $imageName=mt_rand().$_FILES['newfilename']['name'];
    $imagePath="../view/img/".$imageName;
    move_uploaded_file($_FILES['newfilename']['tmp_name'],$imagePath);
    $image_path="http://localhost:8084/ClassicModels/view/img/".$imageName;
    }*/
    $author->get_information($firstname, $author_id, $lastname);
    $author_id=test_input($author_id);
    $firstname=test_input($firstname);
    $lastname=test_input($lastname);
    $author->update_author($pdo);
    header("location:../view/displayauthor.php?msg=RecordSaved");
} catch (exception $e) {
    header("location:../view/displayauthor.php?msg=" . $e->getMessage());
}
?>
