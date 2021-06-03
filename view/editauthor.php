<?php
include("headerv.php");
$author_id = $_GET['author_id'];
$authordetails = explode(',',$author_id);
include("../controller/authorListingsController.php");
?>
<div id="contact-popup">
<form action="../../controller/editauthorcontroller.php" method="POST" id="contact-form" enctype="multipart/form-data">
    Firstname:<br>
    <input type="text" name="firstname" value="<?php echo $authordetails['firstname'] ?>"><br>
    Lastname:<br>
    <input type="text" name="lastname" value="<?php echo $authordetails['lastname'] ?>"><br>
    <input type="submit" name="submit" value="Save">
</form>
<?php
include("footerv.php");
?>