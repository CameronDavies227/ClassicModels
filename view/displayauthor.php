<?php
include "headerv.php";
include "../controller/authorListingsController.php";
if (isset($authordata)) {
    foreach ($authordata as $key => $value) {
        $author_id;
        echo "<div class='listbooks'><ul>";
        foreach ($value as $k => $v) {
            if ($k == 'author_id'){
                $author_id = $v;
                echo "<div>Author ID: $author_id&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            if ($k == 'firstname'){
                $firstname = $v;
                echo "Firstname: $firstname&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            if ($k == 'lastname'){
                $lastname = $v;
                echo "Lastname: $lastname</div>";
            }
        }
        if($_SESSION['role'] == 'librarian'){
            echo "<ul><a href='editauthor.php/?author_id=$author_id'>Edit</a>&nbsp;&nbsp;";
            echo "<a href='../controller/deleteauthorcontroller.php/?author_id=$author_id'>Delete</a></ul></ul>";
        }
        echo "</div>";
    }
}
include "footerv.php";
?>