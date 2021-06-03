<?php
include("headerv.php");
$book_id = $_GET['book_id'];
$bookdetails = explode(',',$book_id);
include("../controller/bookListingsController.php");
?>
<div id="contact-popup">
<form action="../../controller/editbookcontroller.php" method="POST" id="contact-form" enctype="multipart/form-data">
    Book ID:<br>
    <div name="book_id" ><?php echo $bookdetails['book_id'] ?><br>
    Path to Cover:<br>
    <input type="text" name="path_to_cover" value="<?php echo $bookdetails['path_to_cover'] ?>"><br>
    Publication Year:<br>
    <input type="text" name="publication_year" value="<?php echo $bookdetails['publication_year'] ?>"><br>
    Title:<br>
    <input type="text" name="title" value="<?php echo $bookdetails['title'] ?>"><br>
    Author ID:<br>
    <select name="author_id">
        <option selected="selected" value="<?php echo $bookdetails['author_id'] ?>">
            <?php $x=$bookdetails['author_id'];
            print_r($x[0]);            ?></option>
        <?php
            foreach($authorids as $key=>$value){
                $authid=$authorids[$key]['author_id'];
                $authname=$authorids[$key]['firstname']." ".$authorids[$key]['lastname']." (".$authorids[$key]['author_id'].")";
                echo "<option value='strtolower($authid)'>$authname</option>";
            }
        ?> 
    </select><br>
    Number of Copies Sold:<br>
    <input type="text" name="copies_sold" value="<?php echo $bookdetails['copies_sold'] ?>"><br>
    <input type="submit" name="submit" value="Save">
</form>
<?php
include("footerv.php");
?>