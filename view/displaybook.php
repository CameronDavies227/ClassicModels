<?php
include "headerv.php";
include "../controller/bookListingsController.php";
if (isset($bookdata)) {
    foreach ($bookdata as $key => $value) {
        $book_id;
        echo "<div class='listbooks'><ul>";
        foreach ($value as $k => $v) {
            if ($k == 'path_to_cover'){
                $book_id = $v;
                echo "<div>Path to Cover: ".$value['path_to_cover']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            if ($k == 'publication_year'){
                $book_id = $v;
                echo "Year of Publication: ".$value['publication_year']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            if ($k == 'book_id'){
                $book_id = $v;
                echo "Book ID: ".$value['book_id']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            if ($k == 'title'){
                $title = $v;
                echo "Title of Book: ".$value['title']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            }
            if ($k == 'author_id'){
                $author_id = $v;
                foreach($authordata as $ke=>$va){
                    if($va['author_id']==$value['author_id']){
                        $authname=$va['firstname']." ".$va['lastname']." (".$va['author_id'].")";
                        echo "Author ID: $authname&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                    }
                }
            }
            if ($k == 'copies_sold'){
                $copies_sold = $v;
                echo "Copies of Book Sold: $copies_sold</div>";
            } 
        }
        echo "<ul><a href='editbook.php/?book_id=$book_id'>Edit</a>&nbsp;&nbsp;";
        echo "<a href='../controller/deletebookcontroller.php/?book_id=$book_id'>Delete</a></ul></div></ul>";
    }
}
include "footerv.php";
?>