<?php
include "../model/connection.php";
include "../model/users.php";
include("../controller/san_data.php");
extract($_POST);
$conn=new connection;
$pdo=$conn->connect_db();
$user=new users;
try{
    #if(isset($_FILES['image'])){
    #    $imageName=mt_rand().$_FILES['image_path']['name'];
    #    $imagePath="../view/img".$imageName;
    #    move_uploaded_file
    #}
    $user->get_information($username,$firstname,$lastname,$password,$role);
    $username=test_input($username);
    $firstname=test_input($firstname);
    $lastname=test_input($lastname);
    $password=test_input($password);
    $role=test_input($role);
    $user->insert_user($pdo);
    header("location:../view/adduser.php?msg=Saved");
}
catch(exception $e){
    header("location:../view/adduser.php?msg=".$e->getMessage());
}
?>