<?php
include("headerv.php");
$book_id = $_GET['book_id'];
$bookdetails = explode(',',$book_id);
include("../controller/bookListingsController.php");
?>
<div id="contact-popup">
<form action="../../controller/editbookcontroller.php" method="POST" id="contact-form" enctype="multipart/form-data">
    Book ID:<br>
    <input id="invis" name="book_id" value=<?php echo $bookdetails['book_id'] ?>>
    <style>#invis{display: none}</style>
    <div ><?php echo $bookdetails['book_id'] ?><br></div>
    Path to Cover:<br>
    <input type="file" name="path_to_cover" value="<?php echo $bookdetails['path_to_cover'] ?>"required><br>
    Publication Year:<br>
    <input type="date" name="publication_year" value="<?php echo $bookdetails['publication_year'] ?>"required><br>
    Title:<br>
    <input type="text" name="title" value="<?php echo $bookdetails['title'] ?>"required pattern="[a-zA-Z]{2,}"><br>
    Author ID:<br>
    <select name="author_id">
        <option selected="selected" value="<?php echo $bookdetails['author_id'] ?>">
            <?php echo $authordetails['firstname']." ".$authordetails['lastname']." (".$authordetails['author_id'].")";
            ?></option>
        <?php
            foreach($authordata as $key=>$value){
                $authid=$authordata[$key]['author_id'];
                $authname=$authordata[$key]['firstname']." ".$authordata[$key]['lastname']." (".$authordata[$key]['author_id'].")";
                echo "<option value='$authid'>$authname</option>";
            }
        ?> 
    </select><br>
    Number of Copies Sold:<br>
    <input type="text" name="copies_sold" value="<?php echo $bookdetails['copies_sold'] ?>"required pattern="[0-9]{1,}"><br>
    <input type="submit" name="submit" value="Save">
</form>
<?php
include("footerv.php");
?>