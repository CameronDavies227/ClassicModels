<?php
include "../model/connection.php";
include "../model/users.php";
$conn = new connection;
$pdo = $conn->connect_db();
$user = new users;
    extract($_GET);
    echo "I beg for death";

    try {
        $user->delete_user($pdo,$username);

        header("location: http://localhost/ClassicModels/view/displayuser.php?msg=RecordDeleted");
    } catch (exception $e) {
        header("location: http://localhost/ClassicModels/view/displayuser.php?msg=" . $e->getMessage());
    }
?>
