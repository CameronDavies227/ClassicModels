<?php
include "../model/connection.php";
include "../model/users.php";
$conn = new connection;
$pdo = $conn->connect_db();
$user = new users;
    extract($_GET);

    try {
        $user->delete_user($pdo,$username);

        header("../../view/displayuser.php?msg=RecordDeleted");
    } catch (exception $e) {
        header("../../view/displayuser.php?msg=" . $e->getMessage());
    }
?>
