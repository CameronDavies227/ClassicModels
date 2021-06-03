<?php
class authors{
    Private $author_id;
    Private $firstname;
    Private $lastname;

    public function get_information( $author_id, $firstname, $lastname){
        $this->author_id=$author_id;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
    }

    public function insert_author($pdo){
        $query="INSERT INTO authors(`firstname`, `lastname`) VALUES(:fn,:ln)";
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(":fn", $this->firstname);
        $stmt->bindParam(":ln", $this->lastname);
        $stmt->execute();
    }

    public function search_author_by_id($pdo, $author_id){
        $query = "SELECT * FROM authors WHERE author_id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array($author_id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function get_authorids($pdo){
        $query="SELECT * FROM authors";
        $stmt=$pdo->prepare($query);
        $stmt->execute();
        #$row = $stmt->fetch(PDO::FETCH_ASSOC);
        $row = $stmt->fetchAll();
        return $row;
    }

    public function display_all_authors($pdo){
        $query = "SELECT * FROM authors";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $records = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $records[] = $row;
        }
    return $records;
    }

    public function delete_author($pdo, $author_id){
        $query = "Delete FROM authors where author_id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array($author_id));
    }

}
?>