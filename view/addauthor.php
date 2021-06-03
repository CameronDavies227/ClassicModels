
<?php
include "headerv.php";
?>
<form action="../controller/addauthorcontroller.php" method="POST">
    First Name:<br>
    <input type="text" name="firstname" placeholder="First Name"><br>
    Last Name:<br>
    <input type="text" name="lastname" placeholder="Last Name"><br>
    <br>
    <input type="submit" name="submit" value="Save">
</form>
<?php
if(isset($_GET['msg'])){
    echo"<p>". $_GET['msg']. "</p>";
}
include "footerv.php";
?>