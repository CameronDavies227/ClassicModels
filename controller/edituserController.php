<?php
include "../model/connection.php";
include "../model/users.php";
$conn = new connection;
$pdo = $conn->connect_db();
$user = new users;
extract($_POST);
if(isset($savebtn)){
    try {
        /*if (isset($_FILES['newfilename'])){
        $imageName=mt_rand().$_FILES['newfilename']['name'];
        $imagePath="../view/img/".$imageName;
        move_uploaded_file($_FILES['newfilename']['tmp_name'],$imagePath);
        $image_path="http://localhost:8084/ClassicModels/view/img/".$imageName;
        }*/
        $user->get_information($username, $firstname, $lastname, $password, $role);
        $user->update_user($pdo);
        header("location:../view/userdisplay.php?msg=RecordSaved");
    } catch (exception $e) {
        header("location:../view/userdisplay.php?msg=" . $e->getMessage());
    }
}else{
    header("location:../view/userdisplay.php?msg=EditCancelled");
}
?>
