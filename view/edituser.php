<?php
include("headerv.php");
$username = $_GET['username'];
$userdetails = explode(',',$username);
include("../controller/userListingsController.php");
?>
<div id="contact-popup">
<form action="../../controller/editusercontroller.php" method="POST" id="contact-form" enctype="multipart/form-data">
    User Name:<br>
    <input type="text" name="username" value="<?php echo $userdetails['username']?>" required pattern="[0-9a-zA-Z-!@#$%^&*()?]{3,}"><br>
    First Name:<br>
    <input type="text" name="firstname" value="<?php echo $userdetails['firstname']?>" required pattern="[a-zA-Z-]{3,}"><br>
    Last Name:<br>
    <input type="text" name="lastname" value="<?php echo $userdetails['lastname']?>" required pattern="[a-zA-Z-]{3,}"><br>
    Password:<br>
    <input type="password" name="password" value="<?php echo $userdetails['password']?>" required pattern="[0-9a-zA-Z-!@#$%^&*()?]{3,}"><br>
    Role:<br>
    <select name="role">
        <selected value="<?php echo $userdetails['role'] ?>">
        <option value="borrower">borrower</option>
        <option value="author">author</option>
        <option value="librarian">librarian</option>
    </select><br>
    <input type="submit" name="submit" value="Save">
</form>
<?php
include("footerv.php");
?>