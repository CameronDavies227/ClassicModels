<?php
include "headerv.php";
include "../controller/userListingsController.php";
if (isset($data)) {
    foreach ($data as $key => $value) {
        $username;
        echo "<div class='listusers'><ul>";
        foreach ($value as $k => $v) {
            if ($k == 'username'){
                $username = $v;
                echo "<div>Username : $username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            if ($k == 'firstname'){
                $firstname = $v;
                echo "Firstname : $firstname&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            if ($k == 'lastname'){
                $lastname = $v;
                echo "Lastname : $lastname&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            if ($k == 'role'){
                $role = $v;
                echo "Role : $role</div>";
            }
        }
        if($_SESSION['role'] == 'librarian'){
            echo "<ul><a href='edituser.php/?username=$username'>Edit</a>&nbsp;&nbsp;";
            echo "<a href='../controller/deleteusercontroller.php/?username=$username'>Delete</a></ul></div></ul>";
        }else{
            echo "</div>";
        }
        echo "</div>";
    }
}
include "footerv.php";
?>