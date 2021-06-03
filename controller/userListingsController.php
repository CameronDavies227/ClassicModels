<?php
include "../model/connection.php";
include "../model/users.php";
$conn = new connection;
$pdo = $conn->connect_db();
$user = new users;
try {
    if (isset($_GET['username'])) {
        $userdetails = $user->search_user_by_username($pdo, $_GET['username']);
    } else {
        $data = $user->display_all_users($pdo);
    }
} catch (exception $e) {
    echo $e->getMessage();
}
?>
