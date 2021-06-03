<?php
    include "../model/connection.php";
    include "../model/users.php";
    $conn=new connection;
    $pdo=$conn->connect_db();
    $user=new users;
    $usernames = $user->get_usernames($pdo);
?>