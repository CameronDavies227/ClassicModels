<?php
include("headerv_admin.php");
$author_id = $_GET['author_id'];
$authordetails = explode(',',$author_id);
include("../controller/authorListingsController.php");
?>
<div id="contact-popup">
<form action="../../controller/editauthorcontroller.php" method="POST" id="contact-form" enctype="multipart/form-data">
    Firstname:<br>
    <input type="text" name="firstname" value="<?php echo $authordetails['firstname'] ?>" required pattern="[a-zA-Z-]{3,}"><br>
    Lastname:<br>
    <input type="text" name="lastname" value="<?php echo $authordetails['lastname'] ?>" required pattern="[a-zA-Z-]{3,}"><br>
    <input type="submit" name="submit" value="Save">
</form>
<?php
include("footerv.php");
?>