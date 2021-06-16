
<?php
include "headerv_admin.php";
include "../controller/getusernamecontroller.php";
?>
<form action="../controller/addusercontroller.php" method="POST" enctype="multipart/form-data">
    User Name:<br>
    <input type="text" name="username" placeholder="Username" required pattern="[0-9a-zA-Z-!@#$%^&*()?]{3,}"><br>
    First Name:<br>
    <input type="text" name="firstname" placeholder="First Name" required pattern="[a-zA-Z-]{3,}"><br>
    Last Name:<br>
    <input type="text" name="lastname" placeholder="Last Name" required pattern="[a-zA-Z-]{3,}"><br>
    Password:<br>
    <input type="text" name="password" placeholder="Password" required pattern="[0-9a-zA-Z-!@#$%^&*()?]{3,}"><br>
    Role:<br>
    <select name="role">
        <option value="borrower">borrower</option>
        <option value="author">author</option>
        <option value="librarian">librarian</option>
    </select>
    <input type="submit" name="submit" value="Save">
</form>
<?php
if(isset($_GET['msg'])){
    echo"<p>". $_GET['msg']. "</p>";
}
include "footerv.php";
?>