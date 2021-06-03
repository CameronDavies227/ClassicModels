<?php
    include "../model/connection.php";
    include "../model/users.php";
    $conn=new connection;
    $pdo=$conn->connect_db();
    $login=new users;
    extract($_POST);
    $login->loginCheck($pdo, $username, $password);
?>