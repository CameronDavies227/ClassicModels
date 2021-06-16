<?php
include "headerv_admin.php";
?>

<!DOCTYPE html>
<html>
    <body>
        <nav>
            <ul>
                <li><a href="http://localhost/ClassicModels/index.php">Home</a></li>
                <li><a href="http://localhost/ClassicModels/view/adduser.php">Add user</a></li>
                <li><a href="http://localhost/ClassicModels/view/addauthor.php">Add author</a></li>
                <li><a href="http://localhost/ClassicModels/view/addbook.php">Add book</a></li>
            </ul>
        </nav>
    </body>
</html>
<?php
if(isset($_GET['msg'])){
    echo"<p>". $_GET['msg']. "</p>";
}
include "footerv.php";
?>