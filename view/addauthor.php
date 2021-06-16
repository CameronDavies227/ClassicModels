
<?php
include "headerv_admin.php";
?>
<form action="../controller/addauthorcontroller.php" method="POST" enctype="multipart/form-data">
    First Name:<br>
    <input type="text" name="firstname" placeholder="First Name" required pattern="[a-zA-Z]{3,}"><br>
    Last Name:<br>
    <input type="text" name="lastname" placeholder="Last Name" required pattern="[a-zA-Z]{3,}"><br>
    <br>
    <input type="submit" name="submit" value="Save">
</form>
<?php
if(isset($_GET['msg'])){
    echo"<p>". $_GET['msg']. "</p>";
}
include "footerv.php";
?>