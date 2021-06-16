
<?php
include "headerv_admin.php";
include "../controller/getbookidscontroller.php";
?>
<form action="../controller/addbookcontroller.php" method="POST" enctype="multipart/form-data">
    <input id="invis" name="book_id" value='book_id'>
    <style>#invis{display: none}</style>
    Book Title:<br>
    <input type="text" name="title" placeholder="Title" required pattern="[a-zA-Z 9-0]{3,}"><br>
    Number of Copies Sold:<br>
    <input type="text" name="copies_sold" placeholder="Number Sold" required pattern="[0-9]{1,}"><br>
    What Year was the Book Published:<br>
    <input type="date" name="publication_year" placeholder="Publication Year" required><br>
    Cover Image:<br>
    <input type="file" name="path_to_cover" placeholder="Path to the Cover Image" required><br>
    Author:<br>
    <select name="author_id">
        <option selected="selected">Please choose the relavent Author</option>
        <?php
            foreach($authordata as $key=>$value){
                $authid=$authordata[$key]['author_id'];
                $authname=$authordata[$key]['firstname']." ".$authordata[$key]['lastname']." (".$authordata[$key]['author_id'].")";
                echo "<option value='$authid'>$authname</option>";
            }
        ?> 
    </select>
    <br>
    <br>
    <input type="submit" name="submit" value="Save">
</form>
<?php
if(isset($_GET['msg'])){
    echo"<p>". $_GET['msg']. "</p>";
}
include "footerv.php";
?>