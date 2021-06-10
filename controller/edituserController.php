<?php
include "../model/connection.php";
include "../model/users.php";
include("../controller/san_data.php");
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
        $username=test_input($username);
        $firstname=test_input($firstname);
        $lastname=test_input($lastname);
        $password=test_input($password);
        $role=test_input($role);
        $user->update_user($pdo);
        header("location:../view/displayuser.php?msg=RecordSaved");
    } catch (exception $e) {
        header("location:../view/displayuser.php?msg=" . $e->getMessage());
    }
}else{
    header("location:../view/displayuser.php?msg=EditCancelled");
}
?>
