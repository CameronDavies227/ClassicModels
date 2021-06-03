<?php
class connection{
    private $pdo;
    public function connect_db(){
        $dns='mysql:dbname=library;host=localhost;port=3306';
        $username="cam1";
        $password="cam1";
      
        try{
            $pdo = new PDO($dns, $username, $password);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            header("location:../index.php?msg=DatabaseError".$e->getMessage());
        }
    }
}
?>