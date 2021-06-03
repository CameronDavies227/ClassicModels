
<?php
include "headerv.php";
include "../controller/getbookidscontroller.php";
?>
<form action="../controller/addbookcontroller.php" method="POST">
    Book Title:<br>
    <input type="text" name="title" placeholder="Title"><br>
    Number of Copies Sold:<br>
    <input type="text" name="copies_sold" placeholder="Number Sold"><br>
    What Year was the Book Published:<br>
    <input type="text" name="publication_year" placeholder="Publication Year"><br>
    Cover Image:<br>
    <input type="file" name="path_to_cover" placeholder="Path to the Cover Image"><br>
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