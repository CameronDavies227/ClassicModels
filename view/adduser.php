
<?php
include "headerv.php";
include "../controller/getusernamecontroller.php";
?>
<form action="../controller/addusercontroller.php" method="POST">
    User Name:<br>
    <input type="text" name="username" placeholder="Username"><br>
    First Name:<br>
    <input type="text" name="firstname" placeholder="First Name"><br>
    Last Name:<br>
    <input type="text" name="lastname" placeholder="Last Name"><br>
    Password:<br>
    <input type="text" name="password" placeholder="Password"><br>
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