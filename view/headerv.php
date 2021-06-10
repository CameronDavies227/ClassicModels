<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location:http://localhost/ClassicModels/index.php?msg=NotLoggedIn");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Database Connection and Displaying Records</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
    <body>
        <header><img src="http://localhost/ClassicModels/view/header_image2.jpg" alt="libary" width="100%" height="200"></header>
        <nav>
            <ul>
                <a href="<?php echo 'http://localhost/ClassicModels/controller/logoutController'?>">Logout</a> &nbsp&nbsp
                <a href="http://localhost/ClassicModels/view/displayuser.php">Users</a> &nbsp&nbsp
                <a href="http://localhost/ClassicModels/view/displayauthor.php">Authors</a> &nbsp&nbsp
                <a href='http://localhost/ClassicModels/view/displaybook.php'>Books</a> &nbsp&nbsp
                <?php
                    if($_SESSION['role'] == 'librarian'){
                        echo "<a href='http://localhost/ClassicModels/view/adminpage.php'>Admin Page</a>";
                    }
                ?>
            </ul>
        </nav>
    </body>
</html>
